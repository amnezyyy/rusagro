// Добавление товара

popup_add_product = $('#popup_add_product')
popup_add_product_body = $('#popup_add_product_body')

function openPopupAddProduct() {
    popup_add_product.fadeIn()
}

function closePopupAddProduct() {
    popup_add_product.fadeOut()
}

jQuery(function($){
    $(document).mouseup( function(e){
        if ( !popup_add_product_body.is(e.target)
            && popup_add_product_body.has(e.target).length === 0 ) {
            closePopupAddProduct()
        }
    });
});

$(document).on('keyup', function(e) {
    if ( e.key == "Escape" ) {
        closePopupAddProduct()
    }
});

// Изменение товара

popup_edit_product = $('.popup_edit_product')
popup_edit_product_body = $('.popup_edit_product_body')

function openPopupEditProduct(id) {
    popup_edit_product.eq(id).fadeIn()
}

function closePopupEditProduct() {
    popup_edit_product.fadeOut()
}

jQuery(function($){
    $(document).mouseup( function(e){
        if ( !popup_edit_product_body.is(e.target)
            && popup_edit_product_body.has(e.target).length === 0 ) {
            closePopupEditProduct()
        }
    });
});

$(document).on('keyup', function(e) {
    if ( e.key == "Escape" ) {
        closePopupEditProduct()
    }
});

checkbox = $('.form-check-input')

function changeValue(id) {
    if (parseInt(checkbox.eq(id).val()) === 1)
        checkbox.eq(id).val(0)
    else if (parseInt(checkbox.eq(id).val()) === 0){
        checkbox.eq(id).val(1)
    }
}
