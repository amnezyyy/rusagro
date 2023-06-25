//Добавление новости

let popup_add_news = document.querySelector('.popup_add_news'); // Фон попап окна
let popup_add_news_body = document.querySelector('.popup_add_news_body'); // Само окно

function openPopUpAddNews(){
    popup_add_news.classList.add('active'); // Добавляем класс 'active' для фона
    popup_add_news_body.classList.add('active'); // И для самого окна
}

function closePopUpAddNews() {
    popup_add_news.classList.remove('active'); // Убираем активный класс с фона
    popup_add_news_body.classList.remove('active'); // И с окна
}

jQuery(function($){
    $(document).mouseup( function(e){ // событие клика по веб-документу
        var div = $( ".popup_add_news_body" ); // тут указываем ID элемента
        if ( !div.is(e.target) // если клик был не по нашему блоку
            && div.has(e.target).length === 0 ) { // и не по его дочерним элементам
            closePopUpAddNews()
        }
    });
});

$(document).on('keyup', function(e) {
    if ( e.key == "Escape" ) {
        closePopUpAddNews()
    }
});

// Изменение новости

let popup_edit_news = document.getElementsByClassName('popup_edit_news'); // Фон попап окна
let popup_edit_news_body = document.getElementsByClassName('popup_edit_news_body'); // Само окно

function openPopUpEditNews(id){
    popup_edit_news[id].classList.add('active'); // Добавляем класс 'active' для фона
    popup_edit_news_body[id].classList.add('active'); // И для самого окна
}

function closePopUpEditNews(id) {
    popup_edit_news[id].classList.remove('active'); // Убираем активный класс с фона
    popup_edit_news_body[id].classList.remove('active'); // И с окна
}

//Удаление новости

let popup_delete = document.getElementsByClassName('popup_delete'); // Фон попап окна
let popup_delete_body = document.getElementsByClassName('popup_delete_body'); // Само окно

function openPopUpDeleteNews(id){
    popup_delete[id].classList.add('active'); // Добавляем класс 'active' для фона
    popup_delete_body[id].classList.add('active'); // И для самого окна
}

function closePopUpDeleteNews(id) {
    popup_delete[id].classList.remove('active'); // Убираем активный класс с фона
    popup_delete_body[id].classList.remove('active'); // И с окна
}



