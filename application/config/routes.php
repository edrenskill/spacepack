<?php defined('BASEPATH') or exit('No direct script access allowed');
$route['default_controller'] = 'auth/index';
$route['404_override'] = 'home/page_not_found';
$route['translate_uri_dashes'] = FALSE;
//Authentication
$route['validating'] = 'auth/validate_login';
$route['logout'] = 'auth/logout';
$route['my-profile'] = 'auth/user_profile';


$route['dashboard'] = 'system/index';
$route['companies'] = 'Companies/index'; //PATH OR LOCATION NG CONTROLLER NA TINAWAG
// $route['branch-stock-list/(:num)'] = 'inventory/index/$1';

//branch
$route['add-branches'] = 'companies/insert_branch_info';
$route['update-branches'] = 'companies/update_branch_info';
$route['ban-branches'] = 'companies/ban_branch_info';
$route['active-branches'] = 'companies/active_branch_info';
$route['suspend-branches'] = 'companies/suspend_branch_info';
$route['stock-branches/(:any)'] = 'companies/stock_branch_info/$1';
 
$route[''] = '';
