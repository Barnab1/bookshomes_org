<?php
namespace Project\Controller;

class TestController {
    private $databaseTable;

    public function __construct( \Ninja\DatabaseMysqli $databaseTable){
        $this->databaseTable = $databaseTable;
    }

    public function testDatabase(){
        
    }
}