<?php
namespace Navid\Test2;

class IPN extends Request{

    public function __construct(){
        parent::__construct();
    }

    public function doSomething() {
        // Do something
        echo "your using IPN, so do something!";
    }
}