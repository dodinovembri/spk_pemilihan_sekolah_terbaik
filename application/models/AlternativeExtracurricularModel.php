<?php

class AlternativeExtracurricularModel extends CI_Model
{
    private $_table = "alternative_extracurricular";

    public function get_extracurricular($id)
    {
        $this->db->where('alternative_id', $id);        
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

    public function get_data_by_alt($id)
    {
        $this->db->where('alternative_id', $id);
        return $query = $this->db->get($this->_table);
    }

    public function get_data_by_email($email)
    {
        $this->db->where('email', $email);
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

    public function count_alternative()
    {        
        return $this->db->count_all_results($this->_table);
    }
}