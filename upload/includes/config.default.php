<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Database
|--------------------------------------------------------------------------
|
| This is your database settings. If you are unsure of these please ask
| your webhosting provider.
|
*/
$db['default']['hostname'] = "localhost";	// Database Hostname
$db['default']['username'] = "";		// Database Username
$db['default']['password'] = "";			// Database Password
$db['default']['database'] = "";	// Database Name
$db['default']['dbprefix'] = "kb_";		// Database Prefix

/*
|--------------------------------------------------------------------------
| More Database Settings
|--------------------------------------------------------------------------
|
| You can edit the ones below but generally should be left the same.
|
*/
$db['default']['dbdriver'] = "mysql";
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = APPPATH .'cache/';
$db['default']['char_set'] = "utf8";
$db['default']['dbcollat'] = "utf8_general_ci";

/*
|--------------------------------------------------------------------------
| Base Site URL
|--------------------------------------------------------------------------
|
| URL to your 68 Licensing root. Typically this will be your base URL,
| WITH a trailing slash:
|
|	http://example.com/
|
| We have tried to auto guess this by using this hack:
| http://codeigniter.com/forums/viewthread/60181/
*/
//$config['base_url']	= "http://localhost/";
$config['base_url'] = "http://".$_SERVER['HTTP_HOST'];
$config['base_url'] .= preg_replace('@/+$@','',dirname($_SERVER['SCRIPT_NAME'])).'/';

/*
|--------------------------------------------------------------------------
| Index File
|--------------------------------------------------------------------------
|
| Typically this will be your index.php file, unless you've renamed it to
| something else. If you are using mod_rewrite to remove the page set this
| variable so that it is blank.
|
| http://68kb.com/user_guide/developer/urls.html
|
*/
$config['index_page'] = "index.php";

/*
|--------------------------------------------------------------------------
| URI PROTOCOL
|--------------------------------------------------------------------------
|
| This item determines which server global should be used to retrieve the
| URI string.  The default setting of "AUTO" works for most servers.
| If your links do not seem to work, try one of the other delicious flavors:
|
| 'AUTO'			Default - auto detects
| 'PATH_INFO'		Uses the PATH_INFO
| 'QUERY_STRING'	Uses the QUERY_STRING
| 'REQUEST_URI'		Uses the REQUEST_URI
| 'ORIG_PATH_INFO'	Uses the ORIG_PATH_INFO
|
*/
$config['uri_protocol']	= "AUTO";

/*
|--------------------------------------------------------------------------
| Enable/Disable System Hooks
|--------------------------------------------------------------------------
|
| If you would like to use the "hooks" feature you must enable it by
| setting this variable to TRUE (boolean).  See the user guide for details.
|
*/
$config['enable_hooks'] = TRUE;

/*
|--------------------------------------------------------------------------
| Modules
|--------------------------------------------------------------------------
|
| This allows you to enable/disable modules from the config file
|
*/
$config['modules_on'] = TRUE;


/*
|--------------------------------------------------------------------------
| URL suffix
|--------------------------------------------------------------------------
|
| This option allows you to add a suffix to all URLs generated by CodeIgniter.
| For more information please see the user guide:
|
| http://68kb.com/user_guide/developer/urls.html
*/

$config['url_suffix'] = "";

/*
|--------------------------------------------------------------------------
| Default Language
|--------------------------------------------------------------------------
|
| This determines which set of language files should be used. Make sure
| there is an available translation if you intend to use something other
| than english.
|
*/
$config['language']	= "english";

/*
|--------------------------------------------------------------------------
| Default Attachments
|--------------------------------------------------------------------------
|
| This determines the file types you are allowed to upload through the
| administration.  
*/
$config['attachment_types'] = "pdf|txt|zip|gif|jpg|png";

/*
|--------------------------------------------------------------------------
| Date Formatting
|--------------------------------------------------------------------------
|
| This is the default date formating. Check http://php.net/date
|
| date_format - Is the default
| comment_date_format - Is for comments
| article_date_format - Is for the articles.
|
*/
$config['date_format'] = 'Y-m-d H:i:s';
$config['comment_date_format'] = 'F j, Y h:i a';
$config['article_date_format'] = 'F j, Y';


/*
|--------------------------------------------------------------------------
| Default Character Set
|--------------------------------------------------------------------------
|
| This determines which character set is used by default in various methods
| that require a character set to be provided.
|
*/
$config['charset'] = "UTF-8";

/*
|--------------------------------------------------------------------------
| Error Logging Threshold
|--------------------------------------------------------------------------
|
| If you have enabled error logging, you can set an error threshold to 
| determine what gets logged. Threshold options are:
| You can enable error logging by setting a threshold over zero. The
| threshold determines what gets logged. Threshold options are:
|
|	0 = Disables logging, Error logging TURNED OFF
|	1 = Error Messages (including PHP errors)
|	2 = Debug Messages
|	3 = Informational Messages
|	4 = All Messages
|
| For a live site you'll usually only enable Errors (1) to be logged otherwise
| your log files will fill up very fast.
|
*/
$config['log_threshold'] = 1;

/*
|--------------------------------------------------------------------------
| Error Logging Directory Path
|--------------------------------------------------------------------------
|
| Leave this BLANK unless you would like to set something other than the default
| system/logs/ folder.  Use a full server path with trailing slash.
|
*/
$config['log_path'] = APPPATH .'logs/';

/*
|--------------------------------------------------------------------------
| Date Format for Logs
|--------------------------------------------------------------------------
|
| Each item that is logged has an associated date. You can use PHP date
| codes to set your own date formatting
|
*/
$config['log_date_format'] = 'Y-m-d H:i:s';

/*
|--------------------------------------------------------------------------
| Cache Directory Path
|--------------------------------------------------------------------------
|
| Leave this BLANK unless you would like to set something other than the default
| system/cache/ folder.  Use a full server path with trailing slash.
|
*/
$config['cache_path'] = APPPATH .'cache/';

/*
|--------------------------------------------------------------------------
| Encryption Key
|--------------------------------------------------------------------------
|
| If you use the Encryption class or the Sessions class with encryption
| enabled you MUST set an encryption key. 
|
*/
$config['encryption_key'] = "";

/*
|--------------------------------------------------------------------------
| Output Compression
|--------------------------------------------------------------------------
|
| Enables Gzip output compression for faster page loads.  When enabled,
| the output class will test whether your server supports Gzip.
| Even if it does, however, not all browsers support compression
| so enable only if you are reasonably sure your visitors can handle it.
|
| VERY IMPORTANT:  If you are getting a blank page when compression is enabled it
| means you are prematurely outputting something to your browser. It could
| even be a line of whitespace at the end of one of your scripts.  For
| compression to work, nothing can be sent before the output buffer is called
| by the output class.  Do not "echo" any values with compression enabled.
|
*/
$config['compress_output'] = FALSE;

/*
|--------------------------------------------------------------------------
| Master Time Reference
|--------------------------------------------------------------------------
|
| Options are "local" or "gmt".  This pref tells the system whether to use
| your server's local time as the master "now" reference, or convert it to
| GMT.
|
*/
$config['time_reference'] = 'local';