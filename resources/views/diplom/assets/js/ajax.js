// Авторизация

$('#form-auth').submit(function(){
    $.post(
        '/vendor/auth.php', // адрес обработчика
        $("#form-auth").serialize(), // отправляемые данные

        function(msg) { // получен ответ сервера
            if (msg == 1){
                window.location.href = "/user_profile.php";
            } else {
                $('#wrong-data').html(msg);
            }
        },

    );
    return false;
});

// Регистрация

$('#form-reg').submit(function(){
    $.post(
        '/vendor/reg.php', // адрес обработчика
        $("#form-reg").serialize(), // отправляемые данные

        function(msg) { // получен ответ сервера
            if (msg == 1){
                window.location.href ='/index.php'
            } else {
                $('#wrong-password').html(msg);
            }
        }
    );
    return false;
});

// Товар в корзину

$('#product-to-basket').submit(function(){
    $.post(
        '/vendor/product_to_basket.php', // адрес обработчика
        $("#product-to-basket").serialize(), // отправляемые данные

        function(msg) { // получен ответ сервера
            $('#successfully-added').html(msg);
        }
    );
    return false;
});

// Удаление одного товара

$('#delete-one-product').submit(function(){
    $.post(
        '/vendor/delete_one_product.php', // адрес обработчика
        $("#delete-one-product").serialize(), // отправляемые данные

        function(msg) { // получен ответ сервера
            window.location.href = "/basket.blade.php";
        }
    );
    return false;
});

// Очистить корзину

$('#clear-basket').submit(function(){
    $.post(
        '/vendor/delete-basket.php', // адрес обработчика
        $("#clear-basket").serialize(), // отправляемые данные

        function(msg) { // получен ответ сервера
            window.location.href ="/basket.blade.php";
        }
    );
    return false;
});
