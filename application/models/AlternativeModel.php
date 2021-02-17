<?php

class AlternativeModel extends CI_Model
{
    private $_table = "alternative";

    public function get_alternative()
    {
    	return $query = $this->db->get($this->_table);
    }

}