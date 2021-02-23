<?php

class AlternativeValueModel extends CI_Model
{
    private $_table = "alternative_value";

    public function get_alternative_value($id)
    {
    	return $this->db->query("SELECT alternative_value.*, alternative.alternative_code AS alternative_code, criterion_value.description AS description, criteria.criteria_code AS criteria_code FROM alternative_value JOIN alternative ON alternative_value.alternative_id = alternative.id JOIN criteria ON alternative_value.criteria_id = criteria.id JOIN criterion_value ON alternative_value.criterion_value_id = criterion_value.id WHERE alternative_value.alternative_id = $id");
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

    public function destroy_by_alternative($id)
    {
        $this->db->where('alternative_id', $id);
        return $this->db->delete($this->_table);
    }                  

}