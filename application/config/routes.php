<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'pages/index';
$route['home'] = 'pages/index';
// $route['home/(.+)'] = 'pages/home/$1';

$route['stories'] = 'pages/stories';
$route['stories/(.+)'] = 'pages/stories/$1';

$route['updates'] = 'pages/updates';
$route['updates/tangled/register'] = 'Pages/regOncore';
$route['updates/(.+)'] = 'pages/updates/$1';

$route['tags'] = 'pages/tags';
$route['tags/(.+)'] = 'pages/tags/$1';


$route['team'] = 'pages/team';
$route['admin_login'] = 'Login/index';

$route['pes_login'] = 'Quiz_admin/index';
$route['pes_signup'] = 'Quiz_admin/pes_signup';


$route['email'] = 'Email_Controller/index';

$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
