<?php

class UserWeightModel extends CI_Model
{
    private $_table = "user_weight";

    public function get_my_scale($id)
    {

    	$this->db->select('user_weight.*, criteria.criteria_code as criteria_code, criteria.criteria_description as criteria_description');
		$this->db->from('user_weight');
		$this->db->join('criteria', 'user_weight.criteria_id = criteria.id');
    	$this->db->where('user_weight.user_id', $id);
		return $query = $this->db->get();
    }

    public function insert($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    public function get_data($id)
    {
    	$this->db->select('user_weight.*, criteria.criteria_code as criteria_code, criteria.criteria_description as criteria_description');
		$this->db->from('user_weight');
		$this->db->join('criteria', 'user_weight.criteria_id = criteria.id');    	
        $this->db->where('user_weight.id', $id);
		return $query = $this->db->get();
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