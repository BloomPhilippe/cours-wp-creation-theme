<?php

require "vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

global $wp;

class Tweets
{
    private $key = "AJILqysIVF4zkLsc1jAw5BmNP";
    private $secret_key = "17wr6pS2uskTxyryRYrjfm2vZBSrL6oh32qzONrPGUcE57kpgN";
    private $access_token = "392719387-EkqrP8A6XureEsUKrwyT9cdYPgwrJHYMsoseg0D8";
    private $access_token_secret = "AzNJhPjiLROFsTo3JdrFhuT6XJ30v8XNYsvkFNExBoFB8";
    private $connection;

    function __construct()
    {

        /*
         * Ajoute une action qui s'éxecute lors de la création du menu du back-office
         */
        add_action('admin_menu', array($this, 'init'));

        $this->connection = new TwitterOAuth(
            $this->key,
            $this->secret_key,
            $this->access_token,
            $this->access_token_secret
        );

    }

    /**
     * Crée une nouvelle page coté back-office et ajoute le lien de la nouvelle page dans le menu du back-office
     */
    public function init()
    {
        add_options_page("Tweets", 'Tweets', 'administrator', 'tweets.php', array($this, 'displayAdminPage'));
    }


    /**
     * Affiche la page du back-office
     */
    public function displayAdminPage()
    {
        ob_start();
        echo 'test';

    }

    public function getTweets($limit, $nameTwitter)
    {
        $this->connection->get("account/verify_credentials");
        $result = $this->connection->get('statuses/user_timeline', [
            'screen_name' => $nameTwitter,
            'exclude_replies' => true,
            'count' => 50
        ]);

        return array_splice($result, 0, 25);
    }

    public function generate(){

    }

    /**
     * Add cron action in wp-cron
     */
    public function cron()
    {
        wp_schedule_event(time(), 'hourly', array($this, 'generate'));
    }

}
