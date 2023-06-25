<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/basket.css')}}">
    <link rel="shortcut icon" href="{{asset('img/etc/logo.png')}}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Корзина</title>
</head>
<body>

@include('blocks.header')

<div class="basket-pic">
    <div class="basket-container-main-pic">
        <p style="color: white; font-size: 40px; font-weight: bolder">Корзина</p>
    </div>
</div>
<div class="basket-container">
    <div class="basket-container-main">
        <div class="basket-product">
            @php ($result = 0) @php ($count = 0)
            @foreach($basketProducts as $key => $basketProduct)
                @php ($products = \App\Models\Product::where('id', $basketProduct->product_id)->get())
                @foreach($products as $product)
            <div class="basket-one-product">
                <div  class="one-product-start">
                    <div class="one-product-1">
                        <img src="{{asset('/storage/' . $product->img)}}" class="img-basket-product">
                    </div>
                    <div class="one-product-2">
                        <p style="font-size: 15px; margin-bottom: 0; color: gray">Название</p>
                        <p style="font-size: 20px; font-weight: bolder">{{$product->name}}, фасовка - 5 кг.</p>
                    </div>
                </div>
                <div class="one-product-end">
                    <div class="one-product-3">
                        <p style="font-size: 15px; margin-bottom: 0; color: gray">цена за 5 кг.</p>
                        <div style="display: flex; font-size: 20px; margin-bottom: 0; font-weight: bolder">
                            <div class="price" id="price{{$key}}">{{$product->price}}</div>
                            <p>&nbsp₽</p>
                        </div>
                    </div>
                    <div class="one-product-4">
                        <div class="product-input">
                            <div style="border: 1px solid #dcdcdc; display: flex; border-radius: 15px">
                                <form class="form-minus">
                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                    <button class="btn-input-left" onclick="minusCount({{$key}}, {{$basketProduct->basket_id}} , {{$product->id}} )" type="submit">-</button>
                                </form>
                                <input value="{{$basketProduct->count}}" class="inp-input" id="inp-input{{$key}}" readonly data-max-count="100">
                                <form class="form-plus">
                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                    <button class="btn-input-right" onclick="plusCount({{$key}}, {{$basketProduct->basket_id}} , {{$product->id}} )" type="submit">+</button>
                                </form>
                            </div>
                        </div>
                        <p style="font-size: 15px; margin-bottom: 0;color: gray">шт.</p>
                    </div>
                    <div class="one-product-5" style="display: flex;">
                        <p style="font-size: 15px; margin-bottom: 0; color: gray">Итого:</p>
                        <div style="display: flex;font-size: 20px; margin-bottom: 0; font-weight: bolder">
                            <div class="result" id="result{{$key}}">{{$product->price * $basketProduct->count}} ₽</div>
                        </div>
                    </div>
                    <div class="one-product-6">
                        <form class="delete-product" data-basket="{{$basketProduct->basket_id}}" data-product="{{$product->id}}">
                            @csrf
                            <button class="delete-product" type="submit"></button>
                        </form>
                    </div>
                </div>
            </div>
                @php($count += $basketProduct->count)
                    @php($result += $product->price * $basketProduct->count)
                @endforeach
            @endforeach
        </div>
        <div class="basket-total">
            <div class="basket-total-top">
                <div class="basket-total-1">
                    <p style="font-size: 25px; font-weight: bolder; margin-bottom: 0">Итого: </p>
                    <p style="color: gray; font-size: 15px; margin-bottom: 0">Общий вес: </p>
                </div>
                <div class="basket-total-2">
                    <div style="font-size: 25px; font-weight: bolder; margin-bottom: 0" class="result-total">{{$result}} ₽</div>
                    <p style="color: gray; font-size: 15px; margin-bottom: 0" class="total_mass">{{$count*5}} кг.</p>
                </div>
            </div>
            <div class="basket-total-3">
                @php ($basket_confirm = isset($basketProducts[0]['basket_id']))
                @if($basket_confirm == NULL)
                    <button class="btn-basket">Корзина пуста!</button>
                @else
                    <a href="{{url('/order')}}"><button class="btn-basket">Оформить заказ</button></a>
                @endif
            </div>
        </div>
    </div>
</div>

@include('blocks.footer')

<script src="{{asset('js/jquery-3.6.1.min.js')}}"></script>
<script src="{{asset('js/ajax-basket.js')}}"></script>

<script>
    $(document).ready (function(){
        count_proudct = $('.basket-one-product').length
        localStorage.setItem("count-basket", count_proudct);
    });
</script>

</body>
</html>

