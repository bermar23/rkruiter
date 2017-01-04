<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

//Position Page related
$route['position'] = 'position';
$route['position/new'] = 'position/newpos';
$route['position/(:any)'] = 'position/viewpos/$1';

//Position Data Related
$route['position/add_position'] = 'position/add_position';
$route['position/edit_position_editable'] = 'position/edit_position_editable';
$route['position/edit_position_hiringprocess'] = 'position/edit_position_hiringprocess';
$route['position/edit_location_editable'] = 'position/edit_location_editable';
$route['position/delete_hiringprocess_step'] = 'position/delete_hiringprocess_step';
$route['position/add_hiringprocess_step'] = 'position/add_hiringprocess_step';
$route['position/edit_hiringprocess_stepname'] = 'position/edit_hiringprocess_stepname';
$route['position/delete_position'] = 'position/delete_position';

//Select Data
$route['select/get_function'] = 'select/get_function';
$route['select/get_experience'] = 'select/get_experience';
$route['select/get_type'] = 'select/get_type';

//Settings
$route['setting'] = 'setting';
$route['upload'] = 'pages/upload';
$route['files'] = 'pages/files';
$route['aws/do_upload'] = 'aws/do_upload';
$route['setpassword'] = 'pages/setpassword';
$route['setting/initial_userinfo'] = 'setting/initial_userinfo';

//Pages
$route['dashboard'] = 'pages/dashboard';
$route['home'] = 'pages/home';

//Linkedin
$route['linklogin'] = 'linklogin';
$route['linklogin/initiate'] = 'linklogin/initiate';

$route['activate/(:any)'] = 'login/signup_activate/$1';
$route['login/signup_process'] = 'login/signup_process';
$route['login/forgotpassword_process'] = 'login/forgotpassword_process';
$route['login'] = 'login';
$route['logout'] = 'login/logout';
$route['default_controller'] = 'login';

/* End of file routes.php */
/* Location: ./application/config/routes.php */