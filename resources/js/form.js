import jQuery from 'jquery';
window.$ = window.jQuery = jQuery;

$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    const $formWrap = $('#lead-form-wrap')
    const $toggle = $('.js-toggle-form')
    const $form = $('#lead-form')
    const $name = $('#lead-name')
    const $email = $('#lead-email')
    const $message = $('#lead-message')
    const $successMessage = $('#lead-message-success')
    const $formSpinner = $('#form-spinner')
    let isInProgress = false


    $toggle.on('click', function () {
        $formWrap.toggleClass('hidden')
        $('body').toggleClass('overflow-hidden')
    })

    $name.on('change', function () {
        $(this).removeClass('error')
    })

    $email.on('change', function () {
        $(this).removeClass('error')
    })


    $form.on('submit', function () {
        console.log('submit')

        let isValid = true

        if ($name.val().length === 0) {
            $name.addClass('error')
            isValid = false
        }

        if (!validEmail($email.val())) {
            $email.addClass('error')
            isValid = false
        }

        if ($message.val().length === 0) {
            $message.addClass('error')
            isValid = false
        }
        

        if (!isValid || isInProgress) return false

        console.log('inInProgress', isInProgress)


        $.ajax({
            type: 'POST',
            url: '/leads',
            data: JSON.stringify({
                name: $name.val(),
                email: $email.val(),
                message: $message.val()
            }),
            contentType: 'application/json',
            beforeSend: function (jqXHR, settings) {
                isInProgress = true
                $formSpinner.toggleClass('hidden')
            },
        }).done(function (data) {
            $form.remove()
            $successMessage.removeClass('hidden')
            isInProgress = false
            $formSpinner.toggleClass('hidden')
            ym(42479599, 'reachGoal', 'form_submit')
        }).fail(function (err) {
            alert('Ошибка');
            $formSpinner.toggleClass('hidden')
        });

        return false
    })
});


function validEmail(email) {
    var emailReg = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return emailReg.test(email);
}
