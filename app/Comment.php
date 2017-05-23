<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{

    function add ($positionOfCom, $dir){



        $this->username = $_POST['name'];
        $this->email = $_POST['e_mail'];
        $this->homepage = $_POST['homepage'];
        $this->text = $_POST['text'];
        $this->typeOfCom = $_POST['typeOfCom'];
        $this->positionOfCom = $positionOfCom;
        $this->dataOfBrowser = $_POST['typeOfBrowser'];
        $this->dataOfIP = $_POST['IP'];
        $this->dirOfFile = $dir;
        $this->save();
        return 1;

    }
}
