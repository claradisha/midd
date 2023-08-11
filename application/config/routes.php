<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['proses_login'] = 'AuthController/proses_login';
$route['proses_regis'] = 'AuthController/proses_regis';

$route['layout'] = 'LayoutController';
$route['layout/addLayout'] = 'LayoutController/addLayout';
$route['layout/postTemplate'] = 'LayoutController/postTemplate';
$route['layout/postLayout'] = 'LayoutController/postLayout';
$route['layout/formAddLayout'] = 'LayoutController/formAddLayout';
$route['layout/publish/(:any)'] = 'LayoutController/publishLayout/$1';
$route['layout/checkout/(:any)'] = 'LayoutController/checkoutLayout/$1';
$route['layout/delete/(:any)'] = 'LayoutController/deleteLayout/$1';

$route['layout/designLayout/(:any)'] = 'DesignLayoutController/index/$1';
$route['designLayout/Clock/(:any)/(:any)'] = 'DesignLayoutController/postClock/$1/$2';
$route['postMedia/(:any)/(:any)'] = 'DesignLayoutController/postMedia/$1/$2';
$route['designLayout/Media/(:num)/(:num)'] = 'DesignLayoutController/postMedia/$1/$2';



$route['schedule'] = 'ScheduleController';
$route['schedule/addevent'] = 'ScheduleController/addevent';
$route['testcalendar'] = 'ScheduleController/test_calendar';

$route['addSchedule'] = 'AddScheduleController';
$route['addSchedule/postSchedule'] = 'AddScheduleController/postSchedule';


$route['media'] = 'MediaController';
$route['media/addMedia'] = 'MediaController/addMedia';
$route['media/postMedia'] = 'MediaController/postMedia';
$route['media/Video'] = 'MediaController/PostVideo';

$route['cekAws'] = 'MediaController/Test';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
