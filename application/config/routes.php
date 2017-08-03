<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'base_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['dashboard'] = 'admin_controller/index';
$route['dashboard/addnew'] = 'admin_controller/addnew';
// $route['/dashboard'] = 'admin_controller/index';

