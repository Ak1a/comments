/**
 * Created by Дмитрий on 18.05.2017.
 */
$(document).ready(function () {
    var rand;
    var name = $('#name');
    var mail = $('#e-mail');
    var homepage = $('#homepage');
    var text = $('#text');

    $(".glyphicon-refresh").click(function () {
        var min = 1;
        var max = 4;
        rand = Math.floor(Math.random() * (max - min + 1)) + min;
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

    $(".preview").click(function () {
        var nameValue = name.val();
        var textValue = text.val();

        $(".commetns").html("<div class='panel panel-default'>" +
            "<div class='panel-heading'>"+nameValue+"</div>" +
            "<div class='panel-body'>"+textValue+"</div>" +
            "</div>" +
            "<a class='accept btn btn-success'>Accept</a> " +
            "<a class='cancel btn btn-danger'>Cancel</a>");

        $(".accept").click(function () {

            $("#form").validate();


            var msg = $('.form').serialize();
            $.ajax({
                url: 'addComments',
                data: msg,
                success: function (data) {
                    $('.results').html("Цена: " + data);
                }
            });
        })
    });


});