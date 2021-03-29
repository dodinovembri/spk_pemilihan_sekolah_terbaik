<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'AuthController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'AuthController';
$route['register'] = 'AuthController/register';
$route['register/store'] = 'AuthController/store';
$route['school_register'] = 'AuthController/school_register';
$route['school_register/store'] = 'AuthController/school_register_store';


$route['home'] = 'HomeController';

// routes for alternative
$route['alternative'] = 'AlternativeController';
$route['alternative/create'] = 'AlternativeController/create';
$route['alternative/store'] = 'AlternativeController/store';
$route['alternative/edit/(:any)'] = 'AlternativeController/edit/$1';
$route['alternative/show/(:any)'] = 'AlternativeController/show/$1';
$route['alternative/update/(:any)'] = 'AlternativeController/update/$1';
$route['alternative/destroy/(:any)'] = 'AlternativeController/destroy/$1';
$route['school_alternative'] = 'AlternativeController/school_alternative';
$route['alternative_document'] = 'AlternativeController/alternative_document';

// routes for alternative value
$route['alternative_values/(:any)'] = 'AlternativeValueController/index/$1';
$route['alternative_value/create'] = 'AlternativeValueController/create';
$route['alternative_value/store'] = 'AlternativeValueController/store';
$route['alternative_value/edit/(:any)'] = 'AlternativeValueController/edit/$1';
$route['alternative_value/update/(:any)'] = 'AlternativeValueController/update/$1';
$route['alternative_value/destroy/(:any)'] = 'AlternativeValueController/destroy/$1';

$route['ranking'] = 'RankingController';

// routes for criteria
$route['criteria'] = 'CriteriaController';
$route['criteria/create'] = 'CriteriaController/create';
$route['criteria/store'] = 'CriteriaController/store';
$route['criteria/edit/(:any)'] = 'CriteriaController/edit/$1';
$route['criteria/update/(:any)'] = 'CriteriaController/update/$1';
$route['criteria/destroy/(:any)'] = 'CriteriaController/destroy/$1';

// routes for criterion value
$route['criterion_value/(:any)'] = 'CriterionValueController/index/$1';
$route['criterion/create'] = 'CriterionValueController/create';
$route['criterion/store'] = 'CriterionValueController/store';
$route['criterion/edit/(:any)'] = 'CriterionValueController/edit/$1';
$route['criterion/update/(:any)'] = 'CriterionValueController/update/$1';
$route['criterion/destroy/(:any)'] = 'CriterionValueController/destroy/$1';

// routes for user
$route['user'] = 'UserController';
$route['user/create'] = 'UserController/create';
$route['user/store'] = 'UserController/store';
$route['user/edit/(:any)'] = 'UserController/edit/$1';
$route['user/update/(:any)'] = 'UserController/update/$1';
$route['user/destroy/(:any)'] = 'UserController/destroy/$1';



$route['my_scale'] = 'MyScaleController';
$route['my_scale/create'] = 'MyScaleController/create';
$route['my_scale/store'] = 'MyScaleController/store';
$route['my_scale/edit/(:any)'] = 'MyScaleController/edit/$1';
$route['my_scale/update/(:any)'] = 'MyScaleController/update/$1';
$route['my_scale/destroy/(:any)'] = 'MyScaleController/destroy/$1';

$route['logout'] = 'AuthController/logout';

// profile route
$route['profile'] = 'ProfileController/index';
$route['profile/change_password'] = 'ProfileController/change_password';
$route['profile/update_password/(:any)'] = 'ProfileController/update_password/$1';
$route['profile/update/(:any)'] = 'ProfileController/update/$1';

// routes for schools
$route['school'] = 'SchoolController';
$route['school/create'] = 'SchoolController/create';
$route['school/store'] = 'SchoolController/store';
$route['school/edit/(:any)'] = 'SchoolController/edit/$1';
$route['school/show/(:any)'] = 'SchoolController/show/$1';
$route['school/update/(:any)'] = 'SchoolController/update/$1';
$route['school/destroy/(:any)'] = 'SchoolController/destroy/$1';

// routes for facility
$route['alternative_facility'] = 'AlternativeFacilityController';
$route['alternative_facility/create'] = 'AlternativeFacilityController/create';
$route['alternative_facility/store'] = 'AlternativeFacilityController/store';
$route['alternative_facility/edit/(:any)'] = 'AlternativeFacilityController/edit/$1';
$route['alternative_facility/show/(:any)'] = 'AlternativeFacilityController/show/$1';
$route['alternative_facility/update/(:any)'] = 'AlternativeFacilityController/update/$1';
$route['alternative_facility/destroy/(:any)'] = 'AlternativeFacilityController/destroy/$1';

// routes for extracurricular
$route['alternative_extracurricular'] = 'AlternativeExtracurricularController';
$route['alternative_extracurricular/create'] = 'AlternativeExtracurricularController/create';
$route['alternative_extracurricular/store'] = 'AlternativeExtracurricularController/store';
$route['alternative_extracurricular/edit/(:any)'] = 'AlternativeExtracurricularController/edit/$1';
$route['alternative_extracurricular/show/(:any)'] = 'AlternativeExtracurricularController/show/$1';
$route['alternative_extracurricular/update/(:any)'] = 'AlternativeExtracurricularController/update/$1';
$route['alternative_extracurricular/destroy/(:any)'] = 'AlternativeExtracurricularController/destroy/$1';

// routes for location
$route['alternative_location'] = 'AlternativeLocationController';
$route['alternative_location/create'] = 'AlternativeLocationController/create';
$route['alternative_location/store'] = 'AlternativeLocationController/store';
$route['alternative_location/edit/(:any)'] = 'AlternativeLocationController/edit/$1';
$route['alternative_location/show/(:any)'] = 'AlternativeLocationController/show/$1';
$route['alternative_location/update/(:any)'] = 'AlternativeLocationController/update/$1';
$route['alternative_location/destroy/(:any)'] = 'AlternativeLocationController/destroy/$1';

// routes for accessibility
$route['alternative_accessibility'] = 'AlternativeAccessibilityController';
$route['alternative_accessibility/create'] = 'AlternativeAccessibilityController/create';
$route['alternative_accessibility/store'] = 'AlternativeAccessibilityController/store';
$route['alternative_accessibility/edit/(:any)'] = 'AlternativeAccessibilityController/edit/$1';
$route['alternative_accessibility/show/(:any)'] = 'AlternativeAccessibilityController/show/$1';
$route['alternative_accessibility/update/(:any)'] = 'AlternativeAccessibilityController/update/$1';
$route['alternative_accessibility/destroy/(:any)'] = 'AlternativeAccessibilityController/destroy/$1';