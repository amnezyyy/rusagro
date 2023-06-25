//Авторизация

let popup_singin = document.querySelector('.popup_singin'); // Фон попап окна
let popup_singin_body = document.querySelector('.popup_singin_body'); // Само окно

function openPopUpAuth(){
    popup_singin.classList.add('active'); // Добавляем класс 'active' для фона
    popup_singin_body.classList.add('active'); // И для самого окна
}

function closePopUpAuth() {
    popup_singin.classList.remove('active'); // Убираем активный класс с фона
    popup_singin_body.classList.remove('active'); // И с окна
}

jQuery(function($){
    $(document).mouseup( function(e){ // событие клика по веб-документу
        var div = $( ".popup_singin_body" ); // тут указываем ID элемента
        if ( !div.is(e.target) // если клик был не по нашему блоку
            && div.has(e.target).length === 0 ) { // и не по его дочерним элементам
            closePopUpAuth()
        }
    });
});

$(document).on('keyup', function(e) {
    if ( e.key == "Escape" ) {
        closePopUpAuth()
    }
});

//Регистрация

let popup_reg = document.querySelector('.popup_reg'); // Фон попап окна
let popup_reg_body = document.querySelector('.popup_reg_body'); // Само окно

function openPopUpReg(){
    popup_reg.classList.add('active'); // Добавляем класс 'active' для фона
    popup_reg_body.classList.add('active'); // И для самого окна
    closePopUpAuth();
}

function closePopUpReg() {
    popup_reg.classList.remove('active'); // Убираем активный класс с фона
    popup_reg_body.classList.remove('active'); // И с окна
}

function redirectPopUp(){
    closePopUpReg();
    openPopUpAuth();
}

jQuery(function($){
    $(document).mouseup( function(e){ // событие клика по веб-документу
        var div = $( ".popup_reg_body" ); // тут указываем ID элеме нта
        if ( !div.is(e.target) // если клик был не по нашему блоку
            && div.has(e.target).length === 0 ) { // и не по его дочерним элементам
            closePopUpReg()
        }
    });
});

$(document).on('keyup', function(e) {
    if ( e.key == "Escape" ) {
        closePopUpReg()
    }
});


