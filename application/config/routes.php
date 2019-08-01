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
$route['default_controller'] = 'Admin/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//****************** Cutomer Starts Here *********************//
$route['admin/forgot-password'] = 'Admin/Forgot';
$route['admin/dashboard'] = 'Admin/Dashboard';
$route['admin/restaurant-list'] = 'Admin/Restaurant';
$route['admin/add-restaurant'] = 'Admin/Restaurant/addrestaurant';
$route['admin/edit-restaurant/([a-zA-Z0-9-]+)'] = 'Admin/Restaurant/editrestarent/$1';


$route['admin/Payment-details'] = 'Admin/Payment';
$route['admin/running-client-status'] = 'Admin/Runningclientstatus';
$route['admin/chat'] = 'Admin/Chat';


//sub admin
$route['sub-admin/update-restaurant'] = 'Subadmin/Updaterestaurant';
//****table***//
$route['sub-admin/table-list'] = 'Subadmin/Table';
$route['sub-admin/add-table'] = 'Subadmin/Table/addtable';
$route['sub-admin/edit-table/([a-zA-Z0-9-]+)'] = 'Subadmin/Table/edittable/$1';
//****ofr
$route['sub-admin/offers-deals-list'] = 'Subadmin/Offersdeals';
$route['sub-admin/offers-deals'] = 'Subadmin/Offersdeals/addofferdeal';
$route['sub-admin/edit-offer/([a-zA-Z0-9-]+)'] = 'Subadmin/Offersdeals/editoffer/$1';
//*******menu
$route['sub-admin/menu-list'] = 'Subadmin/Menu';
$route['sub-admin/add-menu'] = 'Subadmin/Menu/addmenu';
$route['sub-admin/edit-menu/([a-zA-Z0-9-]+)'] = 'Subadmin/Menu/editmenu/$1';


$route['sub-admin/billing-list'] = 'Subadmin/Billing';
$route['sub-admin/add-billing'] = 'Subadmin/Billing/addbilling';
$route['sub-admin/edit-billing/([a-zA-Z0-9-]+)'] = 'Subadmin/Billing/editbilling/$1';

//******** add kichen******//

$route['sub-admin/restaurant-list'] = 'Subadmin/Restaurant';
$route['sub-admin/add-restarent'] = 'Subadmin/Restaurant/addrestarent';
$route['sub-admin/edit-restarent/([a-zA-Z0-9-]+)'] = 'Subadmin/Restaurant/editrestarent/$1';
// *************kichen******//

$route['kitchen/dashboard'] = 'Kitchen/Dashboard';
$route['kitchen/orders'] = 'Kitchen/Orders';

$route['admin/profile-list'] = 'Admin/Profile';

$route['admin/add-package'] = 'Admin/Packages/addpackage';
$route['admin/package-list'] = 'Admin/Packages';
$route['admin/edit-package/([a-zA-Z0-9-]+)'] = 'Admin/Packages/editpackage/$1';

$route['admin/add-banner'] = 'Admin/Bannerslider/addbanner';
$route['admin/banner-list'] = 'Admin/Bannerslider';
$route['admin/edit-banner/([a-zA-Z0-9-]+)'] = 'Admin/Bannerslider/editslider/$1';
$route['admin/change-password'] = 'Admin/Changepassword';
$route['subadmin/change-password'] = 'SubAdmin/Changepassword';
$route['kitchen/change-password'] = 'Kitchen/Changepassword';




