$( document ).ready(function() {
    const inputs = $('.gl-input');
    inputs.focusout(function() {
        const input = $(this);
        input.val().length > 0 ? input.addClass("valid") : input.removeClass("valid");
    })
    //home form


});