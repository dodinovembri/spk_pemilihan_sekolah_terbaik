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

}