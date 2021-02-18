<?php

class CriterionValueModel extends CI_Model
{
    private $_table = "criterion_value";

    public function get_criteria()
    {
    	return $query = $this->db->get($this->_table);
    }

}