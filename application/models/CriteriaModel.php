<?php

class CriteriaModel extends CI_Model
{
    private $_table = "criteria";

    public function get_criteria()
    {
    	return $query = $this->db->get($this->_table);
    }

}