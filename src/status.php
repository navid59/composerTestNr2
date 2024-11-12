<?php 
namespace Navid\Test2;

class Status extends Start{
    
    function __construct(){
        parent::__construct();
    }

    public function doSomething() {
        // Do something
        echo "your using Status, so do something!";
    }
}