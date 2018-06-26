<?php 
class InlineQuery{
    private $_id;
    private $_query;
    public function __construct($data)
    {
        $this->_id = $data->inline_query->id;
        $this->_query = $data->inline_query->query;
    }
    public function getId(){
        return $this->_id;
    }
    public function getQuery(){
        return $this->_query;
    }
}