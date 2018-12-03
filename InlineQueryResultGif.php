<?php

class InlineQueryResultGif implements JsonSerializable{
    private $_gif_url;
    private $_id;

    public function __construct($gifUrl){
        $this->_gif_url = $gifUrl;
        $this->_id = md5($gifUrl);
    }

    public function jsonSerialize(){
        return array(
            "gif_url" => $this->_gif_url,
            "type" => "gif",
            "id" => $this->_id,
            "thumb_url" => $this->_gif_url
        );
    }
}