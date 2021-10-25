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
$route['default_controller'] = 'Home';
$route['404_override'] = 'Home/pageNotFound';
$route['translate_uri_dashes'] = FALSE;

$route['botdetect/captcha-handler'] = 'botdetect/captcha_handler/index';
$route['donation'] = 'Home/donation';
$route['donation-api'] = 'Home/donation_ajax';
$route['donation-payment/(:any)'] = 'Home/makeDonationPayment/$1';
$route['e-hundi'] = 'Home/hundi';
$route['e-hundi-payment/(:any)'] = 'Home/makeHundiPayment/$1';
$route['payment/(:any)/(:any)'] = 'Home/payment/$1/$2';
$route['payment-data'] = 'Home/payment_data';
$route['payment-data/download/(:any)'] = 'Home/payment_data_download/$1';
$route['contact'] = 'Home/contact';
$route['literature'] = 'Home/literature';
$route['gallery/images'] = 'Home/gallery';
$route['gallery/videos'] = 'Home/galleryVidoes';
$route['gallery/videos'] = 'Home/galleryVidoes';
$route['gallery/audios'] = 'Home/galleryAudios';
$route['about'] = 'Home/about';
$route['about/sai-meru-mathi-trust'] = 'Home/sai_meru_mathi';
$route['about/sai-mayee-trust'] = 'Home/sai_mayee';
$route['services/(:any)/(:any)'] = 'Home/services/$1/$2';
$route['events/(:any)'] = 'Home/events/$1';
$route['events/(:any)/(:any)'] = 'Home/event_detail/$1/$2';
$route['volunteer'] = 'Home/volunteer';
$route['subscribe'] = 'Home/subscribe';
$route['404'] = 'Home/pageNotFound';
$route['qr'] = 'Home/qr';

$route['login'] = 'Authentication';
$route['logout'] = 'Authentication/logout';
$route['register'] = 'Authentication/register';
$route['forgot-password'] = 'Authentication/forgotPassword';
$route['otp/(:any)'] = 'Authentication/otp/$1';
$route['reset-password/(:any)'] = 'Authentication/resetPassword/$1';

