<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Core\Table;

use Core\Database\Database;

/**
 * Description of Table
 *
 * @author fad
 */
class Table {

    protected $table;
    protected $db;

    public function __construct(Database $db) {
        $this->db = $db;
        if (is_null($this->table)) {
            $parts = explode('\\', get_class($this));
            $class_name = end($parts);
            $this->table = strtolower(str_replace('Table', '', $class_name)) . 's';
        }
    }

    public function all() {
        return $this->query('SELECT * FROM ' . $this->table);
    }

    public function find($id) {
        return $this->query("SELECT * FROM {$this->table} WHERE id_" . substr($this->table, 0, -1) . " = [$id]");
    }

    public function getAdmin($id) {
        return $this->query("SELECT * FROM administrateurs WHERE id_administrateur = " . $id, null, true);
    }

    public function last() {
        return $this->query("SELECT * FROM {$this->table} ORDER BY id_" . substr($this->table, 0, -1) . " DESC");
    }

    public function paginaiton($page) {

        $pages = $page;

        $debute = ($pages - 1) * 12;

        $resultat = $this->query(""
                . "SELECT SQL_CALC_FOUND_ROWS * "
                . "FROM {$this->table} "
                . "ORDER BY id_" . substr($this->table, 0, -1) . " DESC LIMIT ? OFFSET ?", [12, $debute]);


        $resultFoundRows = $this->query("SELECT found_rows()");
        $nt = $resultFoundRows->fetchColumn();

        $nbrepages = ceil($nt / 12);
        
        return [$resultat, $nbrepages];
    }

    public function total() {
        return $this->query("SELECT COUNT(*) as 'nbre' FROM {$this->table}", null, true);
    }

    public function create($fields) {
        $sql_parts = [];
        $attributes = [];

        foreach ($fields as $k => $v) {
            $sql_parts[] = "$k = ?";
            $attributes[] = $v;
        }
        $sql_part = implode(',', $sql_parts);
        return $this->query("INSERT INTO {$this->table} SET $sql_part", $attributes, false);
    }

    public function query($statement, $attributes = null, $one = false) {
        if ($attributes) {
            return $this->db->prepare(
                            $statement, $attributes, str_replace('Table', 'Entity', get_class($this)), $one
            );
        } else {
            return $this->db->query(
                            $statement, str_replace('Table', 'Entity', get_class($this)), $one
            );
        }
    }

}
