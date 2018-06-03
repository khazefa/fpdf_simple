<?php
/** BASE URL **/
$baseurl = "http://".$_SERVER['HTTP_HOST'].str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);

define( 'DB_HOST', 'localhost' ); // set database host
define( 'DB_USER', 'root' ); // set database user
define( 'DB_PASS', 'secret' ); // set database password
define( 'DB_NAME', 'db_pegawai' ); // set database name
define( 'SEND_ERRORS_TO', 'mymaildumpp@gmail.com' ); //set email notification email address
define( 'DISPLAY_DEBUG', true ); //display db errors?

/** ASSETS PATH **/
define('ABSPATH', dirname(dirname(__FILE__)) . '/');
define('UPLOADS_DIR','uploads/');

/** LIMITATION SHOWING DATA **/
define('PAGE_LIMIT',10);

/** MAIL INFO **/
define('INFO_EMAIL','contact@admin.com');

/** WEB INFO **/
define('WEB_DESC','FPDF Sample');
define('WEB_KEYWORDS','FPDF Sample');
define('WEB_TITLE','FPDF Sample');
?>