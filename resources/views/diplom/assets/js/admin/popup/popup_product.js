//Добавление товара

let popup_add_product = document.querySelector('.popup_add_product'); // Фон попап окна
let popup_add_product_body = document.querySelector('.popup_add_product_body'); // Само окно

function openPopUpAddProduct(){
    popup_add_product.classList.add('active'); // Добавляем класс 'active' для фона
    popup_add_product_body.classList.add('active'); // И для самого окна
}

function closePopUpAddProduct() {
    popup_add_product.classList.remove('active'); // Убираем активный класс с фона
    popup_add_product_body.classList.remove('active'); // И с окна
}

jQuery(function($){
    $(document).mouseup( function(e){ // событие клика по веб-документу
        var div = $( ".popup_add_product_body" ); // тут указываем ID элемента
        if ( !div.is(e.target) // если клик был не по нашему блоку
            && div.has(e.target).length === 0 ) { // и не по его дочерним элементам
            closePopUpAddProduct();
        }
    });
});

$(document).on('keyup', function(e) {
    if ( e.key == "Escape" ) {
        closePopUpAddProduct()
    }
});

//Изменение товара

let popup_edit_product = document.getElementsByClassName('popup_edit_product'); // Фон попап окна
let popup_edit_product_body = document.getElementsByClassName('popup_edit_product_body'); // Само окно\

function openPopUpEditProduct(id){
    popup_edit_product[id].classList.add('active'); // Добавляем класс 'active' для фона
    popup_edit_product_body[id].classList.add('active'); // И для самого окна
}

function closePopUpEditProduct(id) {
    popup_edit_product[id].classList.remove('active'); // Убираем активный класс с фона
    popup_edit_product_body[id].classList.remove('active'); // И с окна
}

// Удаление товара

let popup_delete_product = document.getElementsByClassName('popup_delete_product'); // Фон попап окна
let popup_delete_body_product = document.getElementsByClassName('popup_delete_body_product'); // Само окно\

function openPopUpDeleteProduct(id){
    popup_delete_product[id].classList.add('active'); // Добавляем класс 'active' для фона
    popup_delete_body_product[id].classList.add('active'); // И для самого окна
}

function closePopUpDeleteProduct(id) {
    popup_delete_product[id].classList.remove('active'); // Убираем активный класс с фона
    popup_delete_body_product[id].classList.remove('active'); // И с окна
}