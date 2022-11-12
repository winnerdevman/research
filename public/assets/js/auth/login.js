$(document).ready(function(){
    const validator = $('.form-validate-jquery').validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-invalid-label',
        successClass: 'validation-valid-label',
        validClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        success: function(label) {
            label.addClass('validation-valid-label').text('Success.'); // remove to hide Success message
        },

        // Different components require proper error label placement
        errorPlacement: function(error, element) {
            // Input with icons and Select2
            if (element.hasClass('select2-hidden-accessible')) {
                error.appendTo(element.parent());
            }

            // Input group, form checks and custom controls
            else if (element.parents().hasClass('form-control-feedback') || element.parents().hasClass('form-check') || element.parents().hasClass('input-group')) {
                error.appendTo(element.parent().parent());
            }

            // Other elements
            else {
                error.insertAfter(element);
            }
        },
        rules: {
            userpasswd: {
                required: true
            },
            username: {
                email: true,
                required: true
            }
        },
        messages: {
            userpasswd: {
                required: 'User Password is empty!'
            },
            username: {
                required: 'User Name is empty!',
                email: "Email is invalidation"
            }
        },
        submitHandler: function(ev){
            $.ajax({
                url: "/auth/login_request",
                data: {
                    username: $("#username").val(),
                    password: $("#userpasswd").val()
                },
                type: "post",
                dataType: "json",
                success: function(data){
                    
                }
            });
            return false;
        }
    });
});