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

//$route['(:any)'] = 'system/fix';
$route['inodr/add']                                   = 'inodr/add';                     // inodr/add
$route['inodr/id/(:$any)']                            = 'inodr/id/$1';                   // inodr/id/$id
$route['inodr/id_del/(:$any)']                        = 'inodr/id_del/$1';               // inodr/id_del/$id
$route['inodr/id_edit/(:$any)']                       = 'inodr/id_edit/$1';              // inodr/id_edit/$id
$route['inodr/item/(:$any)']                          = 'inodr/item/$1';                 // inodr/item/$item
$route['inodr/time/(:$any)/(:$any)']                  = 'inodr/time/$1/$2';              // inodr/time/$from/$to
$route['inodr/item_time/(:$any)/(:$any)/(:$any)']     = 'inodr/item_time/$1/$2/$3';      // inodr/item_time/$item/$from/$to

$route['outodr/add']                                  = 'outodr/add';                    // outodr/add
$route['outodr/id/(:$any)']                           = 'outodr/id/$1';                  // outodr/id/$id
$route['outodr/item/(:$any)']                         = 'outodr/item/$1';                // outodr/item/$item
$route['outodr/time/(:$any)/(:$any)']                 = 'outodr/time/$1/$2';             // outodr/time/$from/$to
$route['outodr/item_time/(:$any)/(:$any)/(:$any)']    = 'outodr/item_time/$1/$2/$3';     // outodr/item_time/$item/$from/$t

$route['adjodr/add']                                  = 'adjodr/add';                    // adjodr/add
$route['adjodr/id/(:$any)']                           = 'adjodr/id/$1';                  // adjodr/id/$id
$route['adjodr/item/(:$any)']                         = 'adjodr/item/$1';                // adjodr/item/$item
$route['adjodr/time/(:$any)/(:$any)']                 = 'adjodr/time/$1/$2';             // adjodr/time/$from/$to
$route['adjodr/item_time/(:$any)/(:$any)/(:$any)']    = 'adjodr/item_time/$1/$2/$3';     // adjodr/item_time/$item/$from/$t

$route['order/item/(:$any)']                          = 'order/item/$1';                 // order/item/$item
$route['order/time/(:$any)/(:$any)']                  = 'order/time/$1/$2';              // order/time/$from/$to
$route['order/item_time/(:$any)/(:$any)/(:$any)']     = 'order/item_time/$1/$2/$3';      // order/item_time/$item/$from/$to
$route['noauth']                                      = 'order/noauth';

$route['item/add']                                    = 'item/add';
$route['item/edit/(:$any)']                           = 'item/edit/$1';
$route['item/remove/(:$any)']                         = 'item/remove/$1';
$route['item/getunit/(:$any)']                        = 'item/getunit/$1';
$route['item/getdesc/(:$any)']                        = 'item/getdesc/$1';
$route['item/(:$any)']                                = 'item/$1';

$route['cpo/add']                                     = 'cpo/add';
$route['cpo/edit/(:$any)']                            = 'cpo/edit/$1';
$route['cpo/remove/(:$any)']                          = 'cpo/remove/$1';
$route['cpo/packing/(:$any)']                         = 'cpo/packing/$1';
$route['cpo/bol/(:$any)']                             = 'cpo/bol/$1';
$route['cpo/(:$any)']                                 = 'cpo/$1';

$route['comp/add']                                    = 'comp/add';
$route['comp/edit/(:$any)']                           = 'comp/edit/$1';
$route['comp/remove/(:$any)']                         = 'comp/remove/$1';
$route['comp/(:$any)']                                = 'comp/$1';

$route['user/add']                                    = 'user/add';
$route['user/remove/(:$any)']                         = 'user/remove/$1';
$route['user/(:$any)']                                = 'user/$1';

$route['botdetect/(:any)']                            = 'botdetect/$1';
$route['botdetect']                                   = 'botdetect/sample';

$route['fileup/(:$any)']                              = 'fileup/$1';
$route['fileup']                                      = 'fileup';

$route['default_controller']                          = 'user';
$route['404_override']                                = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */
