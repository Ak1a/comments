<!DOCTYPE html>
<html>
<head>
    <title>Comments</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Leave your comments here</h1>
    <form role="form" class="form" id="form">
        <div class="form-group">
            <label for="name">User name</label>
            <input id="name" name="name" type="text" class="form-control">
        </div>

        <div class="form-group">
            <label for="e-mail">E-mail</label>
            <input id="e-mail" name="e-mail" type="text" class="form-control">
        </div>

        <div class="form-group">
            <label for="homepage">Homepage</label>
            <input id="homepage" name="homepage" type="text" class="form-control">
        </div>

        <div class="form-group">
            <img src="{!! asset('img/captcha1.bmp') !!}" alt="captcha">
            <a class="btn btn-default glyphicon glyphicon-refresh"></a>
            <br>
            <span class="discount"></span>
            <label for="captcha">Enter what you see in the picture</label>
            <input id="captcha" name="captcha" type="text" class="form-control">
        </div>

        <div class="form-group">
            <label for="text">Comments</label>
            <textarea id="text" name="text" class="form-control">Input your massage</textarea>
        </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.min.js"></script>
<script src="{!! asset('js/custom.js') !!}">

</script>
</html>