// Регистрация

$('#form-reg').submit(function(e) {
    e.preventDefault();
    $.ajax({
        type: $(this).attr('method'),
        url: '/register',
        headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
        data: $(this).serialize(),
        async: false,
        dataType: "json",
        success: function(result){
            if (result !== true) {
                $('#wrong-reg').text(result);
            } else {
                closePopUpReg();
                $modal = $('#modal-success-reg');
                $modal.fadeIn();
                setTimeout(function(){
                    $modal.fadeOut();
                }, 5000);
            }
        },
    });
});

// Авторизация

$('#form-auth').submit(function(e) {
    e.preventDefault();
    $.ajax({
        type: $(this).attr('method'),
        url: '/auth',
        headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
        data: $(this).serialize(),
        async: false,
        dataType: "json",
        success: function(result){
            if (result !== true) {
                $('#wrong-data').text('Неправильный логин или пароль!');
            } else {
                window.location.href = "http://127.0.0.1/profile"
            }
        },
    });
});

//Добавление в корзину

$('.form-product-to-basket').submit(function (e) {
    e.preventDefault();
    $.ajax({
        type: 'post',
        url: '/basket_product/' + $(this).attr('data-id'),
        headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
        data: $(this).serialize(),
        async: false,
        dataType: "json",
        success: function (result) {
            btn = $('.btn-add-to-basket')
            btn.replaceWith("<a href='/basket' class='btn-link' style='color: white; text-decoration: none'>Перейти в корзину</a>")
            $modal = $('#modal-success-add-to-basket')
            $modal.fadeIn()
            setTimeout(function(){
                $modal.fadeOut();
            }, 5000);
        }
    });
})

