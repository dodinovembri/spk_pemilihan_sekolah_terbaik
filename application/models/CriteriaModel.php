<?php

class CriteriaModel extends CI_Model
{
    private $_table = "criteria";

    public function get_criteria()
    {
    	return $query = $this->db->get($this->_table);
    }

    public function get_criteria_with_not_in()
    {
        $user_id = $this->session->userdata('id');
        return $this->db->query("SELECT * FROM criteria WHERE id NOT IN(SELECT criteria_id FROM user_weight WHERE user_id = '$user_id')");
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

    public function count_criteria()
    {        
        return $this->db->count_all_results($this->_table);
    }
}