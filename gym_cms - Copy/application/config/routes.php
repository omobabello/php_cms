<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'views';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['Login'] = 'api/login';
$route['Logout'] = 'api/logout';

$route['GetBanners'] = 'api/getBanners';
$route['UploadBanner/([a-z\-]+)'] = 'api/uploadBanner/$1';

$route['SocialLinks'] = 'views/socialLinks';
$route['AddSocialLinks'] = 'api/addSocialLinks';
$route['GetSocialLinks'] = 'api/getSocialLinks';

$route['FooterContents'] = 'views/footerContents';
$route['GetFooterContents'] = 'api/getFooterContents';
$route['AddFooterContents'] = 'api/addFooterContents';

$route['ServiceContents'] = 'views/serviceContents';
$route['GetServices'] = 'api/getServices';
$route['AddService'] = 'api/addService';
$route['RemoveService'] = 'api/RemoveService';

$route['FAQs'] = 'views/faqs';
$route['GetFaqs'] = 'api/getFaqs';
$route['GetFaq/(:num)'] = 'api/getFaq/$1';
$route['AddFaq'] = 'api/addFaq';
$route['EditFaq/(:num)'] = 'api/editFaq/$1';
$route['DeleteFaq'] = 'api/deleteFaq';

$route['Pricing'] = 'views/pricing';
$route['GetPricings'] = 'api/getPricings';
$route['GetPricing/(:num)'] = 'api/getPricing/$1';
$route['AddPricing'] = 'api/addPricing';
$route['EditPricing/(:num)'] = 'api/editPricing/$1';
$route['DeletePricing/(:num)'] = 'api/deletePricing/$1';

$route['GetPricingArticles'] = 'api/getPricingArticles';
$route['GetPricingArticle/(:num)'] = 'api/getPricingArticle/$1';
$route['AddPricingArticle'] = 'api/addPricingArticle';
$route['EditPricingArticle/(:num)'] = 'api/editPricingArticle/$1';
$route['DeletePricingArticle/(:num)'] = 'api/deletePricingArticle/$1';

$route['Contact'] = 'views/contacts';
$route['GetContact'] = 'api/getContact';
$route['AddContact'] = 'api/addContact';

$route['Blog'] = 'views/blog';
$route['GetBlog'] = 'api/getBlog';
$route['AddBlog'] = 'api/addBlog';

$route['About'] = 'views/about';
$route['AddAboutSectionOne'] = 'api/addAboutSection/section-one';
$route['AddAboutSectionTwo'] = 'api/addAboutSection/section-two';
$route['AddAboutSectionThree'] = 'api/addAboutSection/section-three';
$route['AddAboutSectionFour'] = 'api/addAboutSection/section-four';
$route['AddSponsorLogo'] = 'api/addAboutSection/sponsor-logo';
$route['LoadAboutContent'] = 'api/loadAboutContent';
$route['RemoveLogo'] = 'api/removeLogo';

$route['NewsLetter'] = 'views/newsLetter';
$route['ExportNewsLetter'] = 'api/exportNewsLetter';

$route['Home'] = 'views/home_contents';
$route['GetHomeContents'] = 'api/getHomeContents';
$route['AddHomeSectionOneLeft'] = 'api/addHomeS1Left';

$route['AddTestimonials'] = 'api/addTestimonials';
$route['RemoveTestimonials/(:num)'] = 'api/removeTestimonials/$1';

$route['AddAccordion'] = 'api/addAccordion';
$route['RemoveAccordion/(:num)'] = 'api/removeAccordion/$1';

$route['AddGridImage'] = 'api/addGridImage';
$route['RemoveBanner/(:num)'] = 'api/removeBanner/$1';
