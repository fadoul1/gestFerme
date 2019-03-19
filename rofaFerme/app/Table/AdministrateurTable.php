<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Table;

/**
 * Description of AdminTable
 *
 * @author fad
 */
class AdministrateurTable extends \Core\Table\Table{

    protected $table = "administrateurs";

    public function find($id) {
        return $this->query("
            SELECT * 
            FROM administrateurs 
            WHERE id_administrateur = ?", [$id], true);
    }
    
     public function last() {
        return $this->query("
            SELECT * 
            FROM administrateurs 
            ORDER BY id_administrateur DESC LIMIT 5");
    }

    public function update($id, $fields) {
        $sql_parts = [];
        $attributes = [];

        foreach ($fields as $k => $v) {
            $sql_parts[] = "$k = ?";
            $attributes[] = $v;
        }
        $attributes[] = $id;
        $sql_part = implode(',', $sql_parts);
        return $this->query("UPDATE {$this->table} SET $sql_part WHERE id_administrateur = ?", $attributes, true);
    }

    public function delete($id) {
        return $this->query("DELETE FROM {$this->table} WHERE id_administrateur = ?", [$id], true);
    }

}
