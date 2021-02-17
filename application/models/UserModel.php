<?php

class UserModel extends CI_Model
{
    private $_table = "users";

    public function check_auth($username, $password)
    {
        // Check record to database
        $this->db->where('email', $username);
        $this->db->where('password', $password);
        return $query = $this->db->get($this->_table);
    }

    public function get_user()
    {
    	return $query = $this->db->get($this->_table);
    }

}