<?php 

include_once("TelegramClient.php");
include_once("BatClanBot.php");

class App{

    private $_update = null;

    public static function run(){
        #Bot logic
        $client = new TelegramClient("537713705:AAGfMQy5fwrK9L_aBlxU6-R2Pdw205B3TTk");
        $bot = new BatClanBot($client);
        $bot->handle();
    }
}

App::run();
?>