<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
if ( ! function_exists('total_importance_scale')){
   	function total_importance_scale(){
        $CI = get_instance();
        $CI->load->model('helpermodel');
     	$total_importance_scale = $CI->helpermodel->total_importance_scale()->row();
     	return $total_importance_scale;
    }
}

if ( ! function_exists('weight_fixes')){
   	function weight_fixes(){
        $CI = get_instance();
        $CI->load->model('helpermodel');
     	$total_importance_scale = $CI->helpermodel->total_importance_scale()->row();
     	$importance_scale = $CI->helpermodel->importance_scale()->result();      	     	
     	
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