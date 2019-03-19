<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Table;

/**
 * Description of EquipementTable
 *
 * @author fad
 */
class EquipementTable extends \Core\Table\Table {

    protected $table = "equipements";

    public function find($id) {
        return $this->query("
            SELECT * 
            FROM equipements
            WHERE id_equipement = ?", [$id], true);
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
        return $this->query("UPDATE {$this->table} SET $sql_part WHERE id_equipement = ?", $attributes, true);
    }

    public function delete($id) {
        return $this->query("DELETE FROM {$this->table} WHERE id_equipement = ?", [$id], true);
    }

}
