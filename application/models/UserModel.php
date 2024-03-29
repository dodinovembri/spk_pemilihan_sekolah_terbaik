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

    public function insert($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    public function get_data($id)
    {
        $this->db->where('id', $id);
        return $query = $this->db->get($this->_table);
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->_table, $data);
    }

    public function destroy($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->_table);
    }   

    public function count_user()
    {        
        return $this->db->count_all_results($this->_table);
    } 
}