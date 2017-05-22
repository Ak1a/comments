@extends('index')

@section('content')
    <h1>Leave your comments here</h1>
    <form role="form" class="form" id="form" action="addComments" method="get">
        <div class="form-group name_group">
            <label for="name">User name</label>
            <input id="name" name="name" type="text" class="form-control">
            <label class="errorName">User name entered incorrectly</label>
        </div>

        <div class="form-group email_group">
            <label for="e_mail">E-mail</label>
            <input id="e_mail" name="e_mail" type="text" class="form-control">
            <label class="errorEmeil">E-mail entered incorrectly</label>
        </div>

        <div class="form-group homepage_group">
            <label for="homepage">Homepage</label>
            <input id="homepage" name="homepage" type="text" class="form-control">
            <label class="errorHomepage">URL is not correct</label>
        </div>

        <div class="form-group">
            <img src="{!! asset('img/captcha1.bmp') !!}" alt="captcha">
            <a class="btn btn-default glyphicon glyphicon-refresh"></a>
            <br>
            <label for="captcha">Enter what you see in the picture</label>
            <input id="captcha" name="captcha" type="text" class="form-control">
            <label class="errorCaptcha">Allowed to enter only letters and numbers</label>
        </div>

        <div class="form-group">
            <label for="text">Comments</label>
            <textarea id="text" name="text" class="form-control">Input your massage</textarea>
            <label class="errorText">Allowed to enter only letters and numbers</label>
        </div>
        <input type="hidden" name="typeOfCom" value="main">
        <input type="hidden" name="typeOfBrowser" class="typeOfBrowser" value="{!! $browser !!}">
        <input type="hidden" name="IP" class="IP" value="{!! $ip !!}">
        <input type="hidden" name="capthcaChek" class="capthcaChek" value="captcha1">
        <a class="preview btn btn-default">Preview</a>
        <input type="submit">
    </form>
@stop