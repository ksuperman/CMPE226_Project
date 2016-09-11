$(document).ready(function () {
    $('#login-form').validate({
        rules: {
            username: {
                required: true
            },
            pasword: {
                minlength: 2,
                required: true
            },
        },
        highlight: function (element) {
            $(element).closest('.input-group').removeClass('success').addClass('error');
        },
        success: function (element) {
            element.closest('.input-group').removeClass('error').addClass('success');
        }
    });
});