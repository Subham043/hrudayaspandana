<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'authentication';

$route['404_override'] = '';

$route['translate_uri_dashes'] = FALSE;

//admin authentication

$route['login'] = 'authentication/index'; //login view
$route['can-login'] = 'authentication/form_validation'; //check credential exist
$route['dashboard'] = 'authentication/enter'; //open dashboard

$route['logout'] = 'authentication/logout'; //logout

$route['otp-verification/(:any)']  	= 'authentication/otp_verication/$1';


//forgot password

$route['forgot-password'] = 'authentication/forgot_password'; //forgot password email check

$route['set-password/(:any)'] = 'authentication/add_pass/$1'; //forgot password email click

$route['update-password'] = 'authentication/update_pass'; //forgot password email click

//change password

$route['change-password'] = 'account/index'; //forgot password email click

$route['password/change'] = 'account/password_validation'; //forgot password email click


$route['enquiries']   		= 'Contact/index'; 		
$route['enquiries/view/(:any)']  	= 'Contact/view/$1';

$route['volunteer']   		= 'Volunteer/index'; 		
$route['volunteer/view/(:any)']  	= 'Volunteer/view/$1';

$route['registration']   		= 'Registration/index'; 		
$route['registration/view/(:any)']  	= 'Registration/view/$1';
$route['events/status/(:any)/(:any)']  	= 'Events/status/$1/$2';

$route['subscription']   		= 'Subscription/index'; 
$route['subscription/add']   		= 'Subscription/add'; 		
$route['subscription/edit/(:any)']  	= 'Subscription/edit/$1';		
$route['subscription/delete/(:any)']  	= 'Subscription/delete/$1';

$route['home/video/(:any)']  	= 'Home/video/$1';
$route['home/banner']  	= 'Home/banner';
$route['home/banner/delete/(:any)']  	= 'Home/deleteBannerImage/$1';

// $route['gallery/(:any)']  	= 'Gallery/view/$1';
// $route['gallery/images/upload/(:any)']  	= 'Gallery/galleryUpload/$1';
// $route['gallery/images/view/(:any)']  	= 'Gallery/galleryView/$1';
// $route['gallery/images/delete/(:any)/(:any)']  	= 'Gallery/deleteGalleryImage/$1/$2';

$route['gallery-images/(:any)']  	= 'GalleryImages/index/$1';
$route['gallery-images/upload/(:any)']  	= 'GalleryImages/upload/$1';
$route['gallery-images/delete/(:any)/(:any)']  	= 'GalleryImages/delete/$1/$2';

$route['gallery-audios/(:any)']  	= 'GalleryAudios/index/$1';
$route['gallery-audio/upload/(:any)']  	= 'GalleryAudios/upload/$1';
$route['gallery-audios/delete/(:any)/(:any)']  	= 'GalleryAudios/delete/$1/$2';

$route['gallery-videos/(:any)']  	= 'GalleryVideos/index/$1';
$route['gallery-videos/upload/(:any)']  	= 'GalleryVideos/upload/$1';
$route['gallery-videos/delete/(:any)/(:any)']  	= 'GalleryVideos/delete/$1/$2';

$route['e-hundi']   		= 'Hundi/index'; 		
$route['e-hundi/add']   		= 'Hundi/add'; 		
$route['e-hundi/edit/(:any)']  	= 'Hundi/edit/$1';
$route['e-hundi/view/(:any)']  	= 'Hundi/view/$1';
$route['e-hundi/delete/(:any)']  	= 'Hundi/delete/$1';

$route['donation/(:any)']   		= 'Donation/index/$1'; 		
$route['donation/view/(:any)']  	= 'Donation/view/$1';

$route['literature']   		= 'Literature/index'; 		
$route['literature/add']  	= 'Literature/add';
$route['literature/view/(:any)']  	= 'Literature/view/$1';
$route['literature/delete/(:any)']  	= 'Literature/delete/$1';
$route['literature/edit/(:any)']  	= 'Literature/edit/$1';

$route['events/(:any)']   		= 'Events/index/$1'; 		
$route['events/new/add']  	= 'Events/add';
$route['events/view/(:any)/(:any)']  	= 'Events/view/$1/$2';
$route['events/delete/(:any)/(:any)']  	= 'Events/delete/$1/$2';
$route['events/status/(:any)/(:any)/(:any)']  	= 'Events/status/$1/$2/$3';

$route['services/(:any)']   		= 'Services/index/$1'; 		
$route['services/new/add']  	= 'Services/add';
// $route['services/new/gallery/images/(:any)']  	= 'Services/galleryUpload/$1';
// $route['services/new/gallery/images/view/(:any)']  	= 'Services/galleryView/$1';
// $route['services/new/gallery/images/delete/(:any)']  	= 'Services/deleteGalleryImage/$1';
$route['services/new/gallery/audio/(:any)/(:any)']  	= 'Services/galleryAudioUpload/$1/$2';
$route['services/new/gallery/new/audio/delete/(:any)']  	= 'Services/deleteGalleryAudio/$1';
$route['services/new/gallery/image/(:any)/(:any)']  	= 'Services/galleryImageUpload/$1/$2';
$route['services/new/gallery/new/image/delete/(:any)']  	= 'Services/deleteGalleryImage/$1';
$route['services/view/(:any)/(:any)']  	= 'Services/view/$1/$2';
// $route['services/gallery/(:any)/(:any)']  	= 'Services/gallery/$1/$2';
$route['services/audio/(:any)/(:any)']  	= 'Services/audio/$1/$2';
$route['services/image/(:any)/(:any)']  	= 'Services/image/$1/$2';
$route['services/videos/(:any)/(:any)']  	= 'Services/videos/$1/$2';
$route['services/videos/delete/(:any)/(:any)']  	= 'Services/videos_delete/$1/$2';
$route['services/delete/(:any)/(:any)']  	= 'Services/delete/$1/$2';


$route['crossword']  	= 'Crossword';
$route['crossword/upload']  	= 'Crossword/upload';
$route['crossword/view']  	= 'Crossword/view';
$route['crossword/delete/(:any)']  	= 'Crossword/delete/$1';





//account settings

$route['profile/update'] = 'account/updateacnt';



$route['botdetect/captcha-handler'] = 'botdetect/captcha_handler/index';








