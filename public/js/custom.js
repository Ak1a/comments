/**
 * Created by Дмитрий on 18.05.2017.
 */
$(document).ready(function () {
    var name = $('#name');
    var mail = $('#e_mail');
    var homepage = $('#homepage');
    var captcha = $('#captcha');
    var text = $('#text');
    // error variables
    var errorName = $(".errorName");
    var errorEmail = $(".errorEmeil");
    var errorHomepage = $(".errorHomepage");
    var errorCaptcha = $(".errorCaptcha");
    var errorText = $(".errorText");





    $(document).ready(function () {
        $(form).keydown(function (event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
    });

    $(".preview").click(function () {
        validation();
    });

    function validation() {
        if (/^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$/.test(name.val())) {

            name.removeClass("error");
            errorName.css("display", "none");
            if (/^([a-z0-9_.-]+)@(([a-z0-9-]+\.)+[a-z]{2,6})$/.test(mail.val())) {

                mail.removeClass("error");
                errorEmail.css("display", "none");
                errorName.css("display", "none");

                if (/^([a-zA-Z0-9]([a-zA-Z0-9\-]{0,61}[a-zA-Z0-9])?\.)+[a-zA-Z]{2,6}\$/.test(homepage.val()) || homepage.val() === "") {

                    homepage.removeClass("error");
                    errorHomepage.css("display", "none");

                    if (/^[a-zA-Z0-9]+$/.test(captcha.val())) {

                        captcha.removeClass("error");
                        errorCaptcha.css("display", "none");

                        if (/^(?!<$)(?!>$)(.*)$/.test(text.val())) {

                            text.removeClass("error");
                            errorText.css("display", "none");
                            Preview();

                        } else {
                            text.addClass("error");
                            errorText.css("display", "block");
                        }
                    } else {
                        captcha.addClass("error");
                        errorCaptcha.css("display", "block");
                    }
                }
                else {
                    homepage.addClass("error");
                    errorHomepage.css("display", "block");
                }
            }
            else {
                mail.addClass("error");
                errorEmail.css("display", "block");
            }
        }
        else {
            name.addClass("error");
            errorName.css("display", "block");

        }
    }

    function Preview() {
        var nameValue = name.val();
        var textValue = text.val();

        $(".commetns").html("<div class='panel panel-default'>" +
            "<div class='panel-heading'>" + nameValue + "</div>" +
            "<div class='panel-body'>" + textValue + "</div>" +
            "</div>" +
            "<a class='accept btn btn-success'>Accept</a> " +
            "<a class='cancel btn btn-danger'>Cancel</a>");

        $(".accept").click(function () {


            var msg = $('.form').serialize();
            $.ajax({
                url: 'addComments',
                data: msg,
                success: function (data) {
                    $('.results').html(data);
                }
            });
        });
    }
});



