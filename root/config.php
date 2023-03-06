<?php
//  declare(strict_types=1);
// ini_set('display_errors', true); 
  //error_reporting(0); //hiding warning to show error

define('DB_SERVER','127.0.0.1:3307');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','EVENT');

$conn=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

//check connection

if (!$conn) {
     
     echo"Error! while connecting  to the database".mysqli_connect_error();
}
// else {
//      echo"WOOHO!connected  to the database";
// }

?>