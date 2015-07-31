/**
 * @author      : Aji G. P <aji.gumelar@eduostia.com>
 * @created     : 7/30/15
 */

(function($) {
    "use strict";

    // Options for Message
    //----------------------------------------------
    var options = {
        'btn-loading': '<i class="fa fa-spinner fa-pulse"></i>',
        'btn-success': '<i class="fa fa-check"></i>',
        'btn-error': '<i class="fa fa-remove"></i>',
        'msg-success': 'All Good! Redirecting...',
        'msg-error': 'Wrong login credentials!',
        'useAJAX': false
    };

    // Login Form
    //----------------------------------------------
    // Validation
    $("#login-form").validate({
        rules: {
            lg_username: "required",
            lg_password: "required"
        },
        errorClass: "form-invalid"
    });

    // Form Submission
    $("#login-form").submit(function() {
        remove_loading($(this));

        if(options['useAJAX'] == true)
        {
            if($(this).valid()) {


                var username = $(this).find('#lg_username').val(),
                    password = $(this).find('#lg_password').val(),
                    token = $(this).find('#csrf_token').val();

                $.ajax({

                    url : 'login',
                    method : 'post',
                    data : {username : 'estst', _token : token, password : password}
                })

            }

            return false;
        }
    });

    // Loading
    //----------------------------------------------
    function remove_loading($form)
    {
        $form.find('[type=submit]').removeClass('error success');
        $form.find('.login-form-main-message').removeClass('show error success').html('');
    }

    function form_loading($form)
    {
        $form.find('[type=submit]').addClass('clicked').html(options['btn-loading']);
    }

    function form_success($form)
    {
        $form.find('[type=submit]').addClass('success').html(options['btn-success']);
        $form.find('.login-form-main-message').addClass('show success').html(options['msg-success']);
    }

    function form_failed($form)
    {
        $form.find('[type=submit]').addClass('error').html(options['btn-error']);
        $form.find('.login-form-main-message').addClass('show error').html(options['msg-error']);
    }

    // Dummy Submit Form (Remove this)
    //----------------------------------------------
    // This is just a dummy form submission. You should use your AJAX function or remove this function if you are not using AJAX.
    function dummy_submit_form($form)
    {
        if($form.valid())
        {
            form_loading($form);

            $.ajax({
                url : 'login',
                method : 'post'
            });

            setTimeout(function() {
                form_success($form);
            }, 2000);
        }
    }

})(jQuery);