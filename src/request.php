<?php 
namespace Navidut\Test2;

class Request extends Start {

    function __construct(){
        parent::__construct();
    }

    public function doSomething() {
        // Do something
        echo "your using Request, so do something!";
    }
}