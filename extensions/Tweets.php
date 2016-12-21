<?php

require "vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

$access_token = "392719387-EkqrP8A6XureEsUKrwyT9cdYPgwrJHYMsoseg0D8";
$access_token_secret = "AzNJhPjiLROFsTo3JdrFhuT6XJ30v8XNYsvkFNExBoFB8";

$connection = new TwitterOAuth("AJILqysIVF4zkLsc1jAw5BmNP", "17wr6pS2uskTxyryRYrjfm2vZBSrL6oh32qzONrPGUcE57kpgN", $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");

var_dump($content);