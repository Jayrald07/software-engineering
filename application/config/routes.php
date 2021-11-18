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
$route['default_controller'] = 'welcome';
$route['lobby'] = "lobby";
$route["lobby/create"] = "lobby/create";
$route["lobby/submit"] = "lobby/submit";

$route['fw'] = "freedom_wall";
$route["fw/create"] = "freedom_wall/create";
$route["fw/submit"] = "freedom_wall/submit";

$route['forum'] = "forum";
$route["forum/create"] = "forum/create";
$route["forum/submit"] = "forum/submit";

$route['lobby/edit/(:any)'] = "lobby/edit/$1";
$route['fw/edit/(:any)'] = "freedom_wall/edit/$1";
$route['forum/edit/(:any)'] = "forum/edit/$1";

$route["remove/(:any)"] = "lobby/remove/$1";

$route["login"] = "login";
$route["login/authenticate"] = "login/authenticate";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route["lobby/report/(:any)"] = "lobby/report/$1";
$route["fw/report/(:any)"] = "freedom_wall/report/$1";
$route["forum/report/(:any)"] = "forum/report/$1";

$route["lobby/user_report/(:any)"] = "lobby/user_report/$1";
$route["fw/user_report/(:any)"] = "freedom_wall/user_report/$1";
$route["forum/user_report/(:any)"] = "forum/user_report/$1";