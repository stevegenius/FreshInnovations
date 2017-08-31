 <?php
// Setup File: 
error_reporting(0);

# Database Connection Here...
include('config/connection.php');

#Constants:
DEFINE('D_TEMPLATE', 'template');
DEFINE('D_VIEW', 'views');

#Functions:
   include('functions/sandbox.php');
   include('functions/data.php');
   include('functions/template.php');

#Site Setup:
$debug = data_setting_value($dbc, 'debug-status');

$path = get_path();

$site_title = 'Ghstd';

   if(!isset($path['call_parts'][0]) || $path['call_parts'][0] == '' ) {
  // $path['call_parts'][0] = 'home'; // I set THE $path['call_parts'][0]  equal to the value given in the URL 	
   header('location: home');
   
   } 
#Page Setup
$page = data_post($dbc, $path['call_parts'][0]);
$view = data_post_type($dbc, $page['type']);


?>