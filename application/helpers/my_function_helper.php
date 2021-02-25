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
    function s_vector_total($s_vector_params, $total_weight_fixes){ 
        $alternative_id = 0;
        $i = 0;
        $max = $total_weight_fixes;
        $pushed = [];
        foreach ($s_vector_params as $key => $value) {
            $alternative_id = $value['alternative_id'];

            if ($i == 0) {
                $temp_s_vector = $value['s_vector'];                
            }else{
                if ($value['alternative_id'] == $alternative_id) {
                    $temp_s_vector = $temp_s_vector * $value['s_vector']; 
                }
            }

            $i++;
            if ($i == $max) {
                $array[] = array('alternative_id' => $alternative_id, 'total_s_vector' => $temp_s_vector);
                array_push($pushed, $array);
                $i = 0;
            }
        }       
        $data = $array;        
        return $data;
    }
}


if ( ! function_exists('sum_s_vector_total')){
    function sum_s_vector_total($s_vector_total){
        $total = 0;
        foreach ($s_vector_total as $key => $value) {
            $total = $total + $value['total_s_vector'];
        }       
        $data = $total;
        return $data;
    }
}

if ( ! function_exists('v_vector')){
    function v_vector($s_vector_total, $sum_s_vector_total){
        foreach ($s_vector_total as $key => $value) {
            $alternative_id = $value['alternative_id'];
            $v_vector = $value['total_s_vector'] / $sum_s_vector_total;

            $array[] = array('alternative_id' => $alternative_id, 'v_vector' => $v_vector); 
        }
        $data = $array;
        return $data;
    }
}

