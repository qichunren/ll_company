<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

$active_group = 'development';
$active_record = TRUE;


$db['development']['hostname'] = "127.0.0.1";
$db['development']['username'] = "root";
$db['development']['password'] = "123456";
$db['development']['database'] = "ll_company_development";
$db['development']['dbdriver'] = 'mysql';
$db['development']['dbprefix'] = '';
$db['development']['pconnect'] = TRUE;
$db['development']['db_debug'] = TRUE;
$db['development']['cache_on'] = FALSE;
$db['development']['cachedir'] = '';
$db['development']['char_set'] = 'utf8';
$db['development']['dbcollat'] = 'utf8_general_ci';
$db['development']['swap_pre'] = '';
$db['development']['autoinit'] = TRUE;
$db['development']['stricton'] = FALSE;
/* End of development mode */



$db['test']['hostname'] = "";
$db['test']['username'] = "root";
$db['test']['password'] = "123456";
$db['test']['database'] = "ll_company_test";
$db['test']['dbdriver'] = 'mysql';
$db['test']['dbprefix'] = '';
$db['test']['pconnect'] = TRUE;
$db['test']['db_debug'] = TRUE;
$db['test']['cache_on'] = FALSE;
$db['test']['cachedir'] = '';
$db['test']['char_set'] = 'utf8';
$db['test']['dbcollat'] = 'utf8_general_ci';
$db['test']['swap_pre'] = '';
$db['test']['autoinit'] = TRUE;
$db['test']['stricton'] = FALSE;
/* End of test mode */




/** MySQL主机名 */
if( !isset( $_SERVER['HTTP_MYSQLPORT'] ) || $_SERVER['HTTP_MYSQLPORT'] ==0 ) $_SERVER['HTTP_MYSQLPORT'] = 3307;

if($active_group == "production"){
$db['production']['hostname'] = $_SERVER['HTTP_MYSQLPORT'] . '.mysql.sae.sina.com.cn:' . $_SERVER['HTTP_MYSQLPORT'];
$db['production']['username'] = $_SERVER['HTTP_ACCESSKEY'];
$db['production']['password'] = $_SERVER['HTTP_SECRETKEY'];
$db['production']['database'] = 'app_' . $_SERVER['HTTP_APPNAME'];
$db['production']['dbdriver'] = 'mysql';
$db['production']['dbprefix'] = '';
$db['production']['pconnect'] = FALSE;
$db['production']['db_debug'] = TRUE;
$db['production']['cache_on'] = FALSE;
$db['production']['cachedir'] = '';
$db['production']['char_set'] = 'utf8';
$db['production']['dbcollat'] = 'utf8_general_ci';
$db['production']['swap_pre'] = '';
$db['production']['autoinit'] = TRUE;
$db['production']['stricton'] = FALSE;   

}
/* End of production mode */





/* End of file database.php */
/* Location: ./application/config/database.php */