<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'pages/index';
$route['stories'] = 'pages/stories';
$route['stories/(.+)'] = 'pages/stories/$1';

$route['execom'] = 'pages/execom';

$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
