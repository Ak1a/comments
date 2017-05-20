<!DOCTYPE html>
<html>
<head>
    <title>Comments</title>
    <link href="{!! asset('css/main.css') !!}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <style>
        .error{
            border: 3px solid #C1121C;
        }
        .errorEmeil, .errorName, .errorHomepage,.errorCaptcha, .errorText{
            color: #C1121C;
            display: none;
        }

    </style>

</head>
<body>
<div class="container">
    <h1>Leave your comments here</h1>
    <form role="form" class="form" id="form">
        <div class="form-group name_group">
            <label for="name">User name</label>
            <input id="name" name="name" type="text" class="form-control">
            <label class="errorName">User name entered incorrectly</label>
        </div>

        <div class="form-group email_group">
            <label for="e_mail">E-mail</label>
            <input id="e_mail" name="e-mail" type="text" class="form-control">
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
        <a class="preview btn btn-default">Preview</a>
    </form>
    <br>
    <div class="commetns"></div>
    <div class="results"></div>
    <br>
    <br>
</div>
</body>
<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="{!! asset('node_modules/jquery-validation/dist/jquery.validate.js') !!}"></script>
<script src="{!! asset('js/custom.js') !!}"></script>
<script>
    $(".glyphicon-refresh").click(function () {
        var min = 1;
        var max = 4;
        var rand = Math.floor(Math.random() * (max - min + 1)) + min;
        var captcha = "[alt=captcha]";
        switch (rand) {
            case 1:
                $(captcha).attr({"src": "{!! asset('img/captcha1.bmp') !!}"});
                break;

            case 2:
                $(captcha).attr({"src": "{!! asset('img/captcha2.bmp') !!}"});
                break;

            case 3:
                $(captcha).attr({"src": "{!! asset('img/captcha3.bmp') !!}"});
                break;

            case 4:
                $(captcha).attr({"src": "{!! asset('img/captcha4.bmp') !!}"});
                break;
        }
    });
</script>
</html>