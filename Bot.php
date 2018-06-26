<?php 

class Bot{
    private $_client = null;

    public function __construct($client){
        $this->_client = $client;
    }

    public function getClient(){
        return $this->_client;
    }

    public function handle(){
        $update = $this->getClient()->getWebhookUpdate();
        if (!$update){
            throw new Exception("Error al procesar la petición");
        }

        if(method_exists($this, $update->getCommand() . 'Command')){
            return $this->{$update->getCommand() . 'Command'}($update);
        }else if (!$update->getCommand() && method_exists($this, 'noCommand')){
            return $this->noCommand($update);
        }
    }

    public function handleInline(){
        $query = $this->getClient()->getInlineQuery();
        return $this->inline($query);
    }

}