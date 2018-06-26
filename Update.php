<?php 
class Update{
    private $_id;
    private $_text;
    private $_command;
    private $_chatId;
    public function getText(){
        return $this->_text;
    }
    public function __construct($data)
    {
        $this->_extractText($data->message->text);
        $this->_chatId = $data->message->chat->id;
    }
    public function getChatId(){
        return $this->_chatId;
    }
    public function getCommand(){
        return $this->_command;
    }
    private function _extractText($text){
        $matches = array();
        preg_match("%(?:/(?<command>\w*))?(?:@\w*)?\s?(?<text>.*)%",$text,$matches);
        $this->_command = $matches["command"];
        $this->_text= $matches["text"];
    }
}