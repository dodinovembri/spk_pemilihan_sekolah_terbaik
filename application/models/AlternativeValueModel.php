<?php

class AlternativeValueModel extends CI_Model
{
    private $_table = "alternative_value";

    public function get_alternative_value($id)
    {
    	return $this->db->query("SELECT criterion_value.*, criteria.criteria_code AS criteria_code FROM criterion_value JOIN criteria ON criterion_value.criteria_id = criteria.id WHERE criterion_value.criteria_id = $id");
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

}