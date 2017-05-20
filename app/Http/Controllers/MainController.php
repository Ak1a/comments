<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class MainController extends Controller
{

    function addComments (){


        $comments = new Comment();

        $data = Comment::all();

        if(!$data->isEmpty()){
            $positionOfCom = $data->positionOfCom;
            $positionOfCom++;
            $comments->add($positionOfCom);
        }else {
            $positionOfCom = 1;
            $comments->add($positionOfCom);
        }

        if (!empty($_GET['name'])) {
            if (!preg_match('/^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$/', $_GET['name'])) {
                return "пусто";
            } else return $_GET['name'];
        }else return "empty";
    }
}
