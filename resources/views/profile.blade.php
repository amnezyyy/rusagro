<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
    <link rel="shortcut icon" href="{{asset('img/etc/logo.png')}}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>Личный кабинет</title>
</head>
<body>

@include('blocks/header')

<div class="user-pic">
    <div class="user-pic-container-main">
        <p style="color: white; font-size: 40px; font-weight: bolder">Добрый день, {{$user->name}}</p>
    </div>
</div>
<div class="user-container">
    <div class="user-container-main">
        <div class="user-sidebar">
                <ul class="nav">
                    <li class="sidebar-item">
                        <a href="#" class="nav-link navlink"  style="color: white" onclick="openPage('User', this, '#3a713b')" id="defaultOpen">Личный кабинет</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="nav-link navlink"  style="color: white" onclick="openPage('Orders', this, '#3a713b')">Мои заказы</a>
                    </li>
                </ul>
            </div>
        <div class="user-container-page">
            <div class="page" id="User">
                <div style="display: flex; flex-flow: wrap; justify-content: space-between; row-gap: 20px;">
                    <p style="font-size: 29px; font-weight: bolder; width: 100%; margin-bottom: 0">Персональные данные</p>
                    <div class="user-block">
                        <p style="font-size: 15px; color: gray; margin-bottom: 0">Имя</p>
                        <p style="font-size: 25px; margin-bottom: 10px">{{$user->name}}</p>
                        <p style="font-size: 15px; color: gray; margin-bottom: 0">Номер телефона</p>
                        <p style="font-size: 25px; margin-bottom: 10px">{{$user->telephone}}</p>
                        <p style="font-size: 15px; color: gray; margin-bottom: 0">Номер телефона</p>
                        <p style="font-size: 25px; margin-bottom: 10px">{{$user->email}}</p>
                        <a href="{{url('/logout')}}"><button class="btn-logout">Выйти</button></a>
                    </div>
                </div>
            </div>
            <div class="page" id="Orders">
                <div style="display: flex; flex-flow: wrap; justify-content: space-between; row-gap: 20px;">
                    <p style="font-size: 29px; font-weight: bolder; width: 100%; margin-bottom: 0">Заказы</p>
                    @foreach($orders as $order)
                        @php($products = \App\Models\OrderProduct::where('order_id', $order->id)->get())
                        <div class="user-block">
                            <p style="font-size: 15px; color: gray; margin-bottom: 0">Номер заказа</p>
                            <p style="font-size: 25px; margin-bottom: 10px">#{{$order->id}}</p>
                            <p style="font-size: 15px; color: gray; margin-bottom: 0">Товары</p>
                            @foreach($products as $product)
                                <p style="font-size: 25px; margin-bottom: 10px">{{\App\Models\Product::where('id', $product->product_id)->first()->name . ' - ' . $product->count*5 . ' кг'}}</p>
                            @endforeach
                            <p style="font-size: 15px; color: gray; margin-bottom: 0">Статус заказа</p>
                        @if($order->status == 0)
                            <p style="font-size: 25px; margin-bottom: 0; color: #d38b00"><img src="img/etc/timer_user.png"> Принят в обработку</p>
                        @elseif($order->status == 1)
                            <p style="font-size: 25px; margin-bottom: 0; color: #408a26"><img src="img/etc/delivery.png"> Доставляем</p>
                        @elseif($order->status == 2)
                            <p style="font-size: 25px; margin-bottom: 0; color: #327933"><img src="img/etc/successfully.png"> Доставлен</p>
                        @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@include('blocks/footer')

<script>

    function openPage(pageName,elmnt, color) {
    var i, page, navlink;
    page = document.getElementsByClassName("page");
    for (i = 0; i < page.length; i++) {
    page[i].style.display = "none";
    page[i].style.animation = "fade-in 1s"
    }

    navlink = document.getElementsByClassName("navlink");
    for (i = 0; i < navlink.length; i++) {
    navlink[i].style.backgroundColor = "white";
    navlink[i].style.borderRadius = "10px";
    navlink[i].style.color = "black";
    }

    document.getElementById(pageName).style.display = "block";

    elmnt.style.backgroundColor = color;
    elmnt.style.color = "white";
    elmnt.style.textDecoration = "none";
    }

    document.getElementById("defaultOpen").click();

</script>
</body>
</html>
