<?php 

class Logger{
    public static function log($msg){
        file_put_contents('log.txt', $msg);
    }
}