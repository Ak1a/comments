<!DOCTYPE html>
<html>
<head>
    <title>Comments</title>
    <link href="{!! asset('css/main.css') !!}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <style>
        .error {
            border: 3px solid #C1121C;
        }

        .errorEmeil, .errorName, .errorHomepage, .errorCaptcha, .errorText {
            color: #C1121C;
            display: none;
        }

        li {
            list-style-type: none; /* Убираем маркеры */
        }
    </style>

</head>
<body>
<div class="container">

    @yield('content')
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
    $('.typeOfBrowser').val(navigator.userAgent);
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