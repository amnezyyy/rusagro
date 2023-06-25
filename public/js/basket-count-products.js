$(document).ready( function () {

    var basket_count_container = document.getElementsByClassName('basket-one-product').length;

    $('#count-product').text(basket_count_container);
    $('#count-product-header').text(basket_count_container);

})