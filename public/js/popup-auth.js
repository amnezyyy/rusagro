//Авторизация

popup_singin = $('.popup_singin')

function openPopUpAuth(){
    popup_singin.fadeIn()
}

function closePopUpAuth() {
    popup_singin.fadeOut()
}

popup_singin_body = $('.popup_singin_body')

jQuery(function($){
    $(document).mouseup( function(e){
        if ( !popup_singin_body.is(e.target)
            && popup_singin_body.has(e.target).length === 0 ) {
            closePopUpAuth()
        }
    });
});

//Регистрация

popup_reg = $('.popup_reg')
popup_reg_body = $('.popup_reg_body')

function openPopUpReg(){
    closePopUpAuth()
    popup_reg.fadeIn()
}

function closePopUpReg() {
    popup_reg.fadeOut()
}

function redirectPopUp(){
    closePopUpReg();
    openPopUpAuth();
}

jQuery(function($){
    $(document).mouseup( function(e){
        if ( !popup_reg_body.is(e.target)
            && popup_reg_body.has(e.target).length === 0 ) {
            closePopUpReg()
        }
    });
});

$(document).on('keyup', function(e) {
    if ( e.key == "Escape" ) {
        closePopUpAuth()
        closePopUpReg()
    }
});

