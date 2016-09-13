$(document).ready(function () {
    $('#signup-form').validate({
        rules: {
            firstname: {
                required: true
            },
            lastname: {
                required: true
            },
            username: {
                required: true
            },
            email: {
                email: true,
                required: true
            },
            dob: {
                required: true
            },
            lastname: {
                required: true
            },
            pasword: {
                minlength: 2,
                required: true
            },
            address: {
                required: true
            },
            phone_number: {
                required: true
            }
        },
        highlight: function (element) {
            $(element).closest('.input-group').removeClass('success').addClass('error');
        },
        success: function (element) {
            element.closest('.input-group').removeClass('error').addClass('success');
        }
    });
});