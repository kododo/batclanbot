<?php 

include_once("Update.php");
include_once("Bot.php");
include_once("InlineQuery.php");
include_once("TestBot.php");
include_once("Logger.php");
include_once("InlineQueryResultGif.php");


class TelegramClient{

    const API_URL = "https://api.telegram.org/bot%s/%s?%s";

    private $_key = "";

    public function __construct($key)
    {
        if (!$key){
            throw new Exception("No se ha establecido una key");
        }
        $this->_key = $key;
    }

    public function getKey(){
        return $this->_key;
    }

    public function getWebhookUpdate(){
        $upd = json_decode(file_get_contents('php://input'));
        return new Update($upd);
    }
    public function getInlineQuery(){
        return new InlineQuery(json_decode(file_get_contents('php://input')));
    }
    public function sendMessage($chatId, $text){
        $this->_makeRequest('sendMessage',array(
            "chat_id" => $chatId,
            "text" => $text
        ));
    }
    public function sendPhoto($chatId, $photo){
        $this->_makeRequest('sendPhoto',array(
            "chat_id" => $chatId,
            "photo" => $photo
        ));
    }
    public function sendAnimation($chatId, $animation){
        $this->_makeRequest('sendAnimation',array(
            "chat_id" => $chatId,
            "animation" => $animation
        ));
    }
    public function deleteMessage($chatId, $messageId){
        $this->_makeRequest('deleteMessage',array(
            "chat_id" => $chatId,
            "message_id" => $messageId
        ));
    }
    public function answerInlineQuery($queryId, $results){
        $this->_makeRequest('answerInlineQuery', array(
            'inline_query_id' => $queryId,
            'results' => json_encode($results)
        ));
    }
    private function _makeRequest($method, $params){
        $url = sprintf(self::API_URL, $this->getKey(), $method, http_build_query($params));
        echo $url;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $data = curl_exec($ch);
        curl_close($ch);
    }
}