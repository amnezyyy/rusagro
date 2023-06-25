//Заказ

let popup_order = document.querySelector('.popup_order'); // Фон попап окна
let popup_order_body = document.querySelector('.popup_order_body'); // Само окно

function openPopUpOrder(){
    popup_order.classList.add('active'); // Добавляем класс 'active' для фона
    popup_order_body.classList.add('active'); // И для самого окна
}

function closePopUpOrder() {
    popup_order.classList.remove('active'); // Убираем активный класс с фона
    popup_order_body.classList.remove('active'); // И с окна
}

jQuery(function($){
    $(document).mouseup( function(e){ // событие клика по веб-документу
        var div = $( ".popup_order_body" ); // тут указываем ID элемента
        if ( !div.is(e.target) // если клик был не по нашему блоку
            && div.has(e.target).length === 0 ) { // и не по его дочерним элементам
            closePopUpOrder()
        }
    });
});

$(document).on('keyup', function(e) {
    if ( e.key == "Escape" ) {
        closePopUpOrder()
    }
});
