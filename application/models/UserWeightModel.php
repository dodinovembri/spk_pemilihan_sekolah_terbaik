<?php

class UserWeightModel extends CI_Model
{
    private $_table = "user_weight";

    public function get_my_scale()
    {
    	return $query = $this->db->get($this->_table);
    }

}