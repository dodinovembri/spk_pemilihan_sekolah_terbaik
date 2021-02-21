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
$route['default_controller'] = 'authcontroller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['login'] = 'authcontroller';
$route['register'] = 'authcontroller/register';


$route['home'] = 'homecontroller';

// routes for alternative
$route['alternative'] = 'alternativecontroller';
$route['alternative/create'] = 'alternativecontroller/create';
$route['alternative/store'] = 'alternativecontroller/store';
$route['alternative/edit/(:any)'] = 'alternativecontroller/edit/$1';
$route['alternative/show/(:any)'] = 'alternativecontroller/show/$1';
$route['alternative/update/(:any)'] = 'alternativecontroller/update/$1';
$route['alternative/destroy/(:any)'] = 'alternativecontroller/destroy/$1';

$route['alternative-value/(:any)'] = 'alternativevaluecontroller/index/$1';

$route['ranking'] = 'rankingcontroller';

// routes for criteria
$route['criteria'] = 'criteriacontroller';
$route['criteria/create'] = 'criteriacontroller/create';
$route['criteria/store'] = 'criteriacontroller/store';
$route['criteria/edit/(:any)'] = 'criteriacontroller/edit/$1';
$route['criteria/update/(:any)'] = 'criteriacontroller/update/$1';
$route['criteria/destroy/(:any)'] = 'criteriacontroller/destroy/$1';

// routes for criterion value
$route['criterion-value/(:any)'] = 'criterionvaluecontroller/index/$1';


// routes for user
$route['user'] = 'usercontroller';
$route['user/create'] = 'usercontroller/create';
$route['user/store'] = 'usercontroller/store';
$route['user/edit/(:any)'] = 'usercontroller/edit/$1';
$route['user/update/(:any)'] = 'usercontroller/update/$1';
$route['user/destroy/(:any)'] = 'usercontroller/destroy/$1';



$route['my-scale'] = 'myscalecontroller';
$route['my-scale/create'] = 'myscalecontroller/create';
$route['my-scale/store'] = 'myscalecontroller/store';
$route['my-scale/edit/(:any)'] = 'myscalecontroller/edit/$1';
$route['my-scale/update/(:any)'] = 'myscalecontroller/update/$1';
$route['my-scale/destroy/(:any)'] = 'myscalecontroller/destroy/$1';

$route['logout'] = 'authcontroller/logout';

// profile route
$route['profile'] = 'profilecontroller/index';
$route['profile/update/(:any)'] = 'profilecontroller/update/$1';

$route['total_importance_scale'] = 'helpercontroller/total_importance_scale';