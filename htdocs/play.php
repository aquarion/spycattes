<?php
    require "../src/init.php";

require_once('../vendor/autoload.php');

// Get the PHP helper library from twilio.com/docs/php/install
use Twilio\Rest\Client;

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = TWILIO_SID;
$token = TWILIO_TOKEN;
$client = new Client($sid, $token);

try {
$call = $client->calls->create(
    $_POST['PHONE'], // To
    "+441224393428", // From
    array(
        "url" => "http://spycattes.aqxs.net/mp3.xml.php?mp3=".urlencode("http://aquarion.aqxs.net/spycattes.mp3"),
    )
);

echo "<pre>";
var_dump($call);
} catch (Exception $e){
    echo "<h1>UH OH</h1>";
    echo $e->getMessage();
}
