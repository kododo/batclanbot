<?php 

include_once("TelegramClient.php");

class App{

    private $_update = null;

    public static function run(){
        #Bot logic
        $client = new TelegramClient("237423279:AAHjd0Gju7I-r6ubrbrwRpaxhvmJfkEAEq0");
        $bot = new TestBot($client);
        $bot->handleInline();
    }

    /* public static function run(){
        $q = new InlineQueryResultGif('https://www.danilopezsebastian.es/past1.gif');
            echo json_encode([$q,$q],JSON_PRETTY_PRINT);
    } */
}

App::run();
?>