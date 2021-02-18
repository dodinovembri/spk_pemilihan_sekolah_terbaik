<?php

class AlternativeValueModel extends CI_Model
{
    private $_table = "alternative_value";

    public function get_alternative_value()
    {
    	return $query = $this->db->get($this->_table);
    }

}