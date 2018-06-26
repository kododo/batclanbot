<?php 

include_once("TelegramClient.php");
include_once("L5RCardsBot.php");

class App{
    public static function run(){
        #Bot logic
        $client = new TelegramClient("514704035:AAG1dF_KcPgXccVbn1SLdo1XcutXs9MWSCw");
        $bot = new L5RCardsBot($client);
        $bot->handleInline();
    }
}

App::run();

?>