<?php

class HelperModel extends CI_Model
{
    public function total_importance_scale()
    {
        $user_id = $this->session->userdata('id');
        return $this->db->query("SELECT SUM(importance_scale) AS total_importance_scale FROM user_weight WHERE user_id = '$user_id'");
    }

    public function importance_scale()
    {
        $user_id = $this->session->userdata('id');
    	return $this->db->query("
    		SELECT user_weight.*, criteria.criteria_type AS criteria_type
    		FROM user_weight JOIN criteria 
    		ON user_weight.criteria_id = criteria.id 
    		WHERE user_weight.user_id = '$user_id'
    	");
    }

    public function get_criterion_value()
    {
        return $query = $this->db->get('criterion_value');
    }

    public function each_alternative()
    {
        return $this->db->query("SELECT alternative_value.*, criterion_value.description AS description, criterion_value.value AS value_of_criteria, alternative.latitude AS latitude, alternative.longitude AS longitude, criteria.criteria_code AS criteria_code FROM alternative_value JOIN criterion_value ON alternative_value.criterion_value_id = criterion_value.id JOIN alternative ON alternative_value.alternative_id = alternative.id JOIN criteria ON alternative_value.criteria_id = criteria.id");
    }
}