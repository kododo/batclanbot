<?php 

class TestBot extends Bot{
    
    public function inline(InlineQuery $inlineQuery){
        //$this->getClient()->sendPhoto($update->getChatId(),"https://danilopezsebastian.es/saludo.jpg");
        //$this->getClient()->deleteMessage($update->getChatId(), $update->getMessageId());
        //$this->getClient()->sendMessage($update->getChatId(), 'inline ok');
        $results = array(
            new InlineQueryResultGif('https://www.danilopezsebastian.es/past1.gif')
            );
        $this->getClient()->answerInlineQuery($inlineQuery->getId(), $results);
        return true;
    }

}