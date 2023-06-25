// Добавление количества

$('.form-plus').submit(function (e) {
    e.preventDefault();
    $.ajax({
        type: $(this).attr('method'),
        url: $(this).attr('action'),
        headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
        data: $(this).serialize(),
        async: false,
        dataType: "json",
        success: function (result) {
        }
    });
})

function plusCount(id, basket_id, product_id) {

    input = $('.inp-input')
    count = input.eq(id).val();
    input.eq(id).val(parseInt(count) + 1)
    $.ajax({
        type: 'post',
        url: '/plus_count_product/' + basket_id + '/' + product_id,
        headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').eq(id).attr('content')},
        data: null,
        async: false,
        dataType: "json",
        success: function () {
            price = $('.price')
            result = $('.result')
            total_basket = parseInt($('.result-total').text())
            $('.result-total').text(total_basket+ parseInt(price.eq(id).text()) + ' ₽')
            total_mass = parseInt($('.total_mass').text())
            $('.total_mass').text(total_mass+ 5 + 'кг.')
            total_result = result.eq(id)
            total_result.text(price.eq(id).text() * input.eq(id).val()  + ' ₽')
            if (input.eq(id).val() == 100){
                alert('Количество товара не может быть больше 100!', )
                location.reload()
            }
        }
    });
}

// Убавление количества

$('.form-minus').submit(function (e) {
    e.preventDefault();
    $.ajax({
        type: $(this).attr('method'),
        url: $(this).attr('action'),
        headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
        data: $(this).serialize(),
        async: false,
        dataType: "json",
        success: function (result) {
        }
    });
})

function minusCount(id, basket_id, product_id){
    input = $('.inp-input')
    count =  input.eq(id).val();
    input.eq(id).val(parseInt(count) - 1)
    $.ajax({
        type: 'post',
        url: '/minus_count_product/'+ basket_id +'/' + product_id,
        headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').eq(id).attr('content')},
        data: null,
        async: false,
        dataType: "json",
        success: function (result) {
            price = $('.price')
            result = $('.result')
            total_basket = parseInt($('.result-total').text())
            $('.result-total').text(total_basket - parseInt(price.eq(id).text()) + ' ₽')
            total_mass = parseInt($('.total_mass').text())
            $('.total_mass').text(total_mass - 5 + 'кг.')
            total_result = result.eq(id)
            total_result.text(price.eq(id).text() * input.eq(id).val() + ' ₽')
            if (input.eq(id).val() == 1){
                alert('Количество товара не может быть меньше 1!', )
                location.reload()
            }
        }
    });
}

//Удаление

$('.delete-product').submit(function (e) {
    e.preventDefault();
    $.ajax({
        type: 'post',
        url: '/delete_product/' + $(this).attr('data-basket') + '/' + $(this).attr('data-product'),
        headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
        data: $(this).serialize(),
        async: false,
        dataType: "json",
        success: function (result) {
            location.reload()
        }
    });
})
