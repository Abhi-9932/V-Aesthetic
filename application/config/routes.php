<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Admin_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//user routes
$route['user-dashboard'] = 'User_controller/dashboard';
$route['user-login'] = 'User_controller/index';
$route['user-logout'] = 'User_controller/logout';
$route['lead-list'] = 'User_controller/userleadlist';
$route['sales-list'] = 'User_controller/usersaleslist';
$route['expense-list'] = 'User_controller/userexpenselist';

$route['leadlocationreportsUser'] = 'User_controller/leadlocationreports';
$route['expensereportdateUser'] = 'User_controller/expensereportdate';
$route['salesreportdateUser'] = 'User_controller/salesreportdate';
$route['allleadreportsUser'] = 'User_controller/allleadreports';
$route['salesservicereportsUser'] = 'User_controller/salesservicereportsUser';


//admin routes
$route['admin-login'] = 'Admin_controller/index';
$route['admin-dashboard'] = 'Admin_controller/dashboard';
$route['lead'] = 'Admin_controller/leadlist';
$route['sales'] = 'Admin_controller/saleslist';
$route['expences'] = 'Admin_controller/expencelist';
$route['tickets'] = 'Admin_controller/ticketslist';
$route['leadlocationreports'] = 'Admin_controller/leadlocationreports';
$route['expensereportdate'] = 'Admin_controller/expensereportdate';
$route['salesreportdate'] = 'Admin_controller/salesreportdate';
$route['allleadreports'] = 'Admin_controller/allleadreports';
$route['salesservicereports'] = 'Admin_controller/salesservicereports';
$route['user'] = 'Admin_controller/userlist';