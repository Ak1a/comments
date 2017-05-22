<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    function add ($positionOfCom){

        $this->username = $_GET['name'];
        $this->email = $_GET['e_mail'];
        $this->homepage = $_GET['homepage'];
        $this->text = $_GET['text'];
        $this->typeOfCom = $_GET['typeOfCom'];
        $this->positionOfCom = $positionOfCom;
        $this->dataOfBrowser = $_GET['typeOfBrowser'];
        $this->dataOfIP = $_GET['IP'];
        $this->save();
        return 1;

    }
}
