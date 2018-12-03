<?php 

class BatClanBot extends Bot{
    
    public function saludoCommand($update){
        $this->getClient()->sendPhoto($update->getChatId(),"https://danilopezsebastian.es/saludo.jpg");
        $this->deleteInvokingMessage($update);
        return true;
    }

    public function pruebaCommand($update){
        $this->getClient()->sendMessage($update->getChatId(),"tests");
        return true;
    }

    public function noCommand($update){
        echo "mensaje recibido:" . $update->getText();
    }

    public function callateCommand($update){
        $this->getClient()->sendPhoto($update->getChatId(),"https://danilopezsebastian.es/callate_1.jpg");
        $this->deleteInvokingMessage($update);
        return true;
    }

    public function pastCommand($update){
        $this->getClient()->sendAnimation($update->getChatId(),"https://www.danilopezsebastian.es/past".rand(1,9).".gif");
        $this->deleteInvokingMessage($update);
        return true;
    }

    public function cryCommand($update){
        $this->getClient()->sendAnimation($update->getChatId(),"https://www.danilopezsebastian.es/cry.gif");
        $this->deleteInvokingMessage($update);
        return true;
    }
}