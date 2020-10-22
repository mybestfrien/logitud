<?php

namespace App\Controllers;
use Symfony\Component\HttpFoundation\Request;

class HomeController {
    public function home($request){
        echo "Home";
    }
}