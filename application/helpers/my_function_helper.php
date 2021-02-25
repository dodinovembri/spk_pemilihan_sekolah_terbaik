<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
if ( ! function_exists('total_importance_scale')){
   	function total_importance_scale(){
        $CI = get_instance();
        $CI->load->model('HelperModel');
     	$total_importance_scale = $CI->HelperModel->total_importance_scale()->row();
     	return $total_importance_scale;
    }
}

if ( ! function_exists('weight_fixes')){
   	function weight_fixes(){
        $CI = get_instance();
        $CI->load->model('HelperModel');
     	$total_importance_scale = $CI->HelperModel->total_importance_scale()->row();
     	$importance_scale = $CI->HelperModel->importance_scale()->result();      	     	
     	
     	foreach ($importance_scale as $key => $value) {
		    $criteria_id[] = $value->criteria_id;
     		if ($value->criteria_type == "benefit") {
		    	$weight_fixes[]  = $value->importance_scale / $total_importance_scale->total_importance_scale;
     		}elseif ($value->criteria_type == "cost") {
		    	$weight_fixes[]  = -($value->importance_scale) / $total_importance_scale->total_importance_scale;
     		}	    
		    $array[] = array('criteria_id' => $value->criteria_id, 'weight_fixes' => $value->importance_scale / $total_importance_scale->total_importance_scale);
     	} 		
		$data = $array;
		return $data;     	
    }
}

if ( ! function_exists('s_vector')){
    function s_vector($weight_fixes){
        $CI = get_instance();
        $CI->load->model('HelperModel');
        $each_alternative = $CI->HelperModel->each_alternative()->result(); 

        $i = 0;
        $total_weight_fixes = count($weight_fixes);  
        foreach ($each_alternative as $key => $value) {            
            $weight_fixes_result = $weight_fixes[$i]["weight_fixes"];              
            $value_of_criteria = (int)$value->value_of_criteria;

            $alternative_id = $value->alternative_id;
            $criteria_id = $value->criteria_id;
            $s_vector = pow($value_of_criteria, $weight_fixes_result);

            // for reset to new
            $i++;
            if ($i == $total_weight_fixes) {
                $i = 0;
            }

            $array[] = array('alternative_id' => $alternative_id, 'criteria_id' => $criteria_id, 's_vector' => $s_vector);   
        }    
        $data = $array;
        return $data;
    }
}

if ( ! function_exists('s_vector_total')){
    function s_vector_total($s_vector_params){
        foreach ($s_vector_params as $key => $value) {
            $alternative_id = $value['alternative_id'];
            $temp_s_vector = $value['s_vector'];
            if ($key == 0) {
                $temp_s_vector_result = $temp_s_vector;
            }else{
                $temp_s_vector_result = $temp_s_vector * $value['s_vector'];
            }
            $array[] = array('alternative_id' => $alternative_id, 'total_s_vector' => $temp_s_vector_result);
        }
        $data = $array;
        return $data;
    }
}