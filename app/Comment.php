<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    function add (){
        $this->username = $_GET['name'];
        $this->email = $_GET['e-mail'];
        $this->homepage = $_GET['homepage'];
        $this->text = $_GET['text'];
        $this->save();
    }
}
