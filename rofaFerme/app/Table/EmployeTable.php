<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Table;

/**
 * Description of EmployeTable
 *
 * @author fad
 */
class EmployeTable extends \Core\Table\Table{

    protected $table = "employes";

    public function find($id) {
        return $this->query("
            SELECT * 
            FROM employes 
            WHERE id_employe = ?", [$id], true);
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
        return $this->query("UPDATE {$this->table} SET $sql_part WHERE id_employe = ?", $attributes, true);
    }

    public function delete($id) {
        return $this->query("DELETE FROM {$this->table} WHERE id_employe = ?", [$id], true);
    }

}
