$(document).ready(function () {
    $('.button-contact-save').click(function () {
        let index = $(this).data('value');
        $('form.contact-from-'+index).submit();
    });
});
