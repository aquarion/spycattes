<?PHP


set_include_path(get_include_path() . 
	PATH_SEPARATOR . '../libraries/google-api-php-client/src' . 
	PATH_SEPARATOR . '../libraries/twilio' .
	 PATH_SEPARATOR . '../libraries/PHPMailer');

include("../etc/config.php");
