$( document ).ready(function() {
    const inputs = $('.gl-input');
    inputs.focusout(function() {
        const input = $(this);
        input.val().length > 0 ? input.addClass("valid") : input.removeClass("valid");
    })
    //home form
    //mask-phone
    $('.mask-phone').mask('0(000) 000-0000');
    const formHome = $('.screen-form');
    const submit = formHome.find('button')
    if(submit.length > 0){
        submit.click(function() {
            const phone = formHome.find('.mask-phone')
            if(phone.val().length === 0) {
                phone.addClass('error')
                return false
            }
        });
    }
    formHome.find('.mask-phone').focusout(function() {
        const input = $(this);
        if(input.val().length > 0) {
            input.removeClass("error");
        }
    })
});