jQuery(document).ready(function($){
    // Скрываем форму и показываем видео при успешной отправке формы
    document.addEventListener( 'wpcf7mailsent', function( event ) {
        if (event.detail.contactFormId === Number(formID.id)) {
            setTimeout(() => {
                jQuery('.wrap_form').addClass('sent');
            }, 1000);
        }
    }, false);
});