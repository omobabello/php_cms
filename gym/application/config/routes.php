<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['Services'] = 'home/services';
$route['AboutUs'] = 'home/about_us';
$route['Pricing'] = 'home/pricing';
$route['FAQs'] = 'home/faq';
$route['Blog'] = 'home/blog';

$route['ContactUs'] = 'home/contact';
$route['SendMail'] = 'home/send_mail';

$route['Book'] = 'home/book';
$route['BookNow'] = 'home/book_now';
