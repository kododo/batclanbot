<?php 

class L5RCardsBot extends Bot{
    
    public function inline($query){
        $results = array(
            array(
                "type" => "photo",
                "id" => "1",
                "photo_url" => "http://lcg-cdn.fantasyflightgames.com/l5r/L5C06_98.jpg",
                "thumb_url" => "http://lcg-cdn.fantasyflightgames.com/l5r/L5C06_98.jpg"
            )
        );
        $this->getClient()->answerInlineQuery($query->getId(), $results);
    }

}