<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function addComments (){
        if (!empty($_GET['name'])) {
            if (!preg_match('/^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$/', $_GET['name'])) {
                return "пусто";
            } else return $_GET['name'];
        }else return "empty";
    }
}
