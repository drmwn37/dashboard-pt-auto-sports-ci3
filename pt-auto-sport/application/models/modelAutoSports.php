<?php

class ModelAutoSports extends CI_Model
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function get_MP($field, $table, $mp)
    {
        return $this->db->query("SELECT $field FROM $table Where $field = '$mp'")->num_rows();
    }
}
