<?php

class CriterionValueModel extends CI_Model
{
    private $_table = "criterion_value";

    public function get_criterion_value()
    {
    	return $query = $this->db->get($this->_table);
    }

}