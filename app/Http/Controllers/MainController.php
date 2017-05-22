<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Answer;

class MainController extends Controller
{

    public function addComments()
    {
        $comments = new Comment();
        $data = Comment::all();


        function captcha()
        {

            if ($_GET['capthcaChek'] == 'captcha1' && $_GET['captcha'] == '28ivw') {
                return true;
            } else if ($_GET['capthcaChek'] == 'captcha2' && $_GET['captcha'] == 'k4ez') {
                return true;
            } else if ($_GET['capthcaChek'] == 'captcha3' && $_GET['captcha'] == 'jw62k') {
                return true;
            } else if ($_GET['capthcaChek'] == 'captcha4' && $_GET['captcha'] == 'xmqki') {
                return true;
            } else return false;
        }

        if (preg_match('/^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$/', $_GET['name'])) {
            if (preg_match('/^([a-z0-9_.-]+)@(([a-z0-9-]+\.)+[a-z]{2,6})$/', $_GET['e_mail'])) {
                if (!preg_match('/^([a-zA-Z0-9]([a-zA-Z0-9\-]{0,61}[a-zA-Z0-9])?\.)+[a-zA-Z]{2,6}\$/', $_GET['homepage'] || empty($_GET['homepage']))) {
                    if (captcha()) {
                        if (preg_match('/^(?!<$)(?!>$)(.*)$/', $_GET['text'])) {
                            if (!$data->isEmpty()) {
                                foreach ($data as $el) ;
                                $positionOfCom = unserialize($el->positionOfCom);
                                $positionOfCom [0]++;
                                $pos = serialize($positionOfCom);
                                $comments->add($pos);
                                return 'Everything is fine';
                            } else {
                                $positionOfCom = [1];
                                $pos = serialize($positionOfCom);
                                $comments->add($pos);
                                return 'Everything is fine';
                            }
                        } else return 'Allowed to enter only letters and numbers in text area';
                    } else return "Captcha entered incorrectly";
                } else return "Homepage entered incorrectly";
            } else return "Email entered incorrectly";
        } else return "User name entered incorrectly";
    }


    public function showAll()
    {

        $data = [];
        if (!empty($_GET['sort'])) {

            switch ($_GET['sort']) {
                case 'nameD':
                    $data = [
                        'data' => Comment::orderBy('username', 'desc')->get()
                    ];
                    break;

                case 'nameE':
                    $data = [
                        'data' => Comment::orderBy('username', 'asc')->get()
                    ];
                    break;
                case 'emailD':
                    $data = [
                        'data' => Comment::orderBy('email', 'desc')->get()
                    ];
                    break;
                case 'emailE':
                    $data = [
                        'data' => Comment::orderBy('username', 'asc')->get()
                    ];
                    break;
                case 'dateD':
                    $data = [
                        'data' => Comment::orderBy('created_at', 'desc')->get()
                    ];
                    break;
                case 'dateE':
                    $data = [
                        'data' => Comment::orderBy('created_at', 'asc')->get()
                    ];
                    break;
            }
        } else {
            $data = [
                'data' => Comment::orderBy('created_at', 'desc')->get()
            ];
        }
        return view('show', $data);

    }

    public function showKaskad()
    {
        $length = 0;
        foreach (Answer::all() as $el) {

            if ($length < count(unserialize($el->positionOfCom))) {
                $length = count(unserialize($el->positionOfCom));
            }
        }

        $data = [
            'comments' => Comment::oldest()->get(),
            'answers' => Answer::oldest()->get(),
            'length' => $length,
        ];

        return view('kaskad', $data);
    }

    public function answer()
    {
        if (!empty($_GET["positionOfCom"])) {
            $data = [
                'positionOfCom' => $_GET['positionOfCom']
            ];
            return view('formAnswer', $data);
        } else return '404';
    }

    public function addAnswer()
    {
        $answer = new Answer();
        $dataA = Answer::all();
        $countOfCom = 0;
        $pos = unserialize($_GET['positionOfCom']);

        if (!$dataA->isEmpty()) {

            $count = count($pos);

            foreach ($dataA as $el) {
                if (count(unserialize($el->positionOfCom)) == $count++) {
                    $countOfCom = $countOfCom + 1;
                }
            }
            //   dd($countOfCom);
            array_push($pos, $countOfCom + 1);
            $positionOfCom = serialize($pos);
//            foreach ($dataA as $el) ;
//            $positionOfCom = $el->positionOfCom;
//            $positionOfCom++;
            $answer->add($positionOfCom);
        } else {
            array_push($pos, 1);
            $positionOfCom = serialize($pos);
            $answer->add($positionOfCom);
        }
    }
}
