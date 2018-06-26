<?php 

class BatClanBot extends Bot{
    
    public function saludoCommand($update){
        $this->getClient()->sendPhoto($update->getChatId(),"https://www.subedenivel.com/saludo.jpg");
        return true;
    }

    public function pruebaCommand($update){
        $this->getClient()->sendMessage($update->getChatId(),"tests");
        return true;
    }

    public function noCommand($update){
        echo "mensaje recibido:" . $update->getText();
    }

}