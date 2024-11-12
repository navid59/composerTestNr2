<?php
namespace Navidut\Test2;

class VerifyAuth extends Request {
    public function __construct(){
        parent::__construct();
    }

    public function doSomething() {
        // Do something
        echo "your using VerifyAuth, so do something!";
    }
}