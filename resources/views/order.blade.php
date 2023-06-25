<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/order.css')}}">
    <link rel="stylesheet" href="{{asset('css/blocks/modal.css')}}">
    <link rel="shortcut icon" href="{{asset('img/etc/logo.png')}}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Оформление заказа</title>
</head>
<body>

@include('blocks/header')

<div class="order-pic">
    <div class="order-container-main-pic">
        <p style="color: white; font-size: 40px; font-weight: bolder">Оформление заказа</p>
    </div>
</div>
<div class="order-container">
    <div class="order-container-main">
        <div class="order-container-left">
            <p style="font-size: 30px; font-weight: bolder; width: 100%; margin-bottom: 25px">Личные данные</p>
            <div class="order-user-inf">
                <div class="text-container">
                    <p style="font-size: 15px; color: gray; margin-bottom: 0">Имя</p>
                    <p style="font-size: 25px">{{$user->name}}</p>
                </div>
                <div class="text-container">
                    <p style="font-size: 15px; color: gray; margin-bottom: 0">Номер телефона</p>
                    <p style="font-size: 25px">{{$user->telephone}}</p>
                </div>
                <div class="text-container">
                    <p style="font-size: 15px; color: gray; margin-bottom: 0">Email</p>
                    <p style="font-size: 25px">{{$user->email}}</p>
                </div>
                <form class="form-adress">
                    @csrf
                    <div class="inp-loc">
                        <p style="font-size: 15px; color: gray; margin-bottom: 10px">Адрес доставки</p>
                        <div class="form-floating">
                            <input type="text" name="region" class="form-control" id="floatingInput" placeholder="Регион" required>
                            <label for="floatingInput">Регион</label>
                        </div>
                    </div>
                    <div class="inp-loc">
                        <p class="invisible">&nbsp</p>
                        <div class="form-floating" style="width: 100%;">
                            <input type="text" name="city" class="form-control" id="floatingInput" placeholder="Город" required>
                            <label for="floatingInput">Город</label>
                        </div>
                    </div>
                    <div class="inp-loc">
                        <div class="form-floating">
                            <input type="text" name="street" class="form-control" id="floatingInput" placeholder="Название улицы" required>
                            <label for="floatingInput">Название улицы</label>
                        </div>
                    </div>
                    <div class="inp-loc">
                        <div class="form-floating">
                            <input type="text" name="home" class="form-control" id="floatingInput" placeholder="Номер дома" required>
                            <label for="floatingInput">Номер дома</label>
                        </div>
                    </div>
                    <div class="inp-loc" style="width: 100%;">
                        <div class="form-floating">
                            <input type="text" name="comment" class="form-control" id="floatingInput" placeholder="Комментарий к заказу" required>
                            <label for="floatingInput">Комментарий к заказу</label>
                        </div>
                    </div>
                    <div class="order-form-end">
                        <p style="font-size: 15px; color: gray; width: 100%; margin-top: 10px; margin-bottom: 0">* Оплата производится после передачи заказа</p>
                        <button class="btn-order" type="submit">Оформить заказ</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="order-container-right">
            <p style="font-size: 30px; font-weight: bolder; width: 100%; margin-bottom: 25px">Состав заказа</p>
            <div class="order-product">
                @php ($count_price = 0)
                @php ($count_mass = 0)
                @foreach($basketProducts as $basketProduct)
                    @php ($products = \App\Models\Product::where('id', $basketProduct->product_id)->get())
                    @foreach($products as $product)
                        <div class="product-ship">
                            <div class="product-ship-1">
                                <p style="font-size: 25px; margin-bottom: 0">{{$product->name}}</p>
                                <p style="font-size: 15px; color: gray; margin-bottom: 0">Количество - {{$basketProduct->count * 5}} кг.</p>
                            </div>
                            <div class="product-ship-2">
                                <p style="font-size: 25px;">{{$product->price * $basketProduct->count}} ₽</p>
                            </div>
                        </div>
                        @php($count_price += $product->price * $basketProduct->count)
                        @php($count_mass += $basketProduct->count * 5)
                        @endforeach
                    @endforeach
                <div class="product-ship-total">
                    <div class="product-ship-1">
                        <p style="font-size: 20px; margin-bottom: 10px">Вес заказа:</p>
                        <p style="font-size: 25px; font-weight: bold">Итого:</p>
                    </div>
                    <div class="product-ship-2" >
                        <p style="font-size: 20px; margin-bottom: 10px">{{$count_mass}} кг.</p>
                        <p style="font-size: 25px; font-weight: bold" id="count">{{$count_price}} ₽</p>
                    </div>
                </div>
                <p style="font-size: 15px; color: gray; margin-top: 0; margin-bottom: 0; width: 100%">* После оформения заказа в течение 2 рабочих дней Вам позвонит менеджет и уточнит делати заказа</p>
            </div>
        </div>
    </div>
</div>

@include('blocks/footer')

<div class="modal-add-order">
    <div class="modal-add-order-body">
        <p class="text-top">Заказ получен</p>
        <div style="display: flex; justify-content: space-between">
            <div style="display: flex; flex-flow: column; text-align: left; width: 69%">
                <p style="font-size: 15px; color: gray; margin-bottom: 0">Товары в заказе</p>
                <div style="display: flex; flex-flow: column; margin-bottom: 0">
                    @foreach($basketProducts as $basketProduct)
                        @php ($products = \App\Models\Product::where('id', $basketProduct->product_id)->get())
                        @foreach($products as $product)
                            <p style="font-size: 25px; margin-bottom: 10px">{{$product->name}} - {{$basketProduct->count * 5}} кг</p>
                        @endforeach
                    @endforeach
                </div>
            </div>
            <div style="display: flex;flex-flow: wrap; text-align: left; width: 29%">
                <div style="display: flex; flex-flow: column; width: auto">
                    <p style="font-size: 15px; color: gray; margin-bottom: 0">Сумма заказа</p>
                    <p style="font-size: 25px; margin-bottom: 10px">{{$count_price}} ₽</p>
                </div>
            </div>
        </div>
        <a href="{{url('/profile')}}"><button class="btn-add-order">Перейти в личный кабинет</button></a>
    </div>
</div>

<script src="{{asset('js/jquery-3.6.1.min.js')}}"></script>
<script>
    $('.form-adress').submit(function (e) {
        count = parseInt($('#count').text())
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: '/add_order/'+ count,
            headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
            data: $(this).serialize(),
            async: false,
            dataType: "json",
            success: function (result) {
                $modal = $('.modal-add-order')
                $modal.fadeIn()
            }
        });
    })
</script>

</body>
</html>
