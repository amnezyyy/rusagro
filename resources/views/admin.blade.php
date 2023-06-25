<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="shortcut icon" href="{{asset('img/etc/logo.png')}}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>ADMIN панель</title>
</head>
<body>

@include('blocks.header')

<div class="admin-pic">
    <div class="admin-container-main">
        <p style="color: white; font-size: 40px; font-weight: bolder">ADMIN панель</p>
    </div>
</div>
<div class="admin-container">
    <div class="admin-container-text">
        <div class="top-panel">
            <a href="#" class="a-page navlink" style="border-bottom-left-radius: 25px; border-top-left-radius: 25px" onclick="openPage('Order',this, '#3a713b')" id="defaultOpen">
                <p>Заказы</p>
            </a>
            <a href="#" class="a-page navlink" onclick="openPage('Feed',this, '#3a713b')">
                <p>Новости</p>
            </a>
            <a href="#" class="a-page navlink" style="border-bottom-right-radius: 25px; border-top-right-radius: 25px" onclick="openPage('Product',this, '#3a713b')">
                <p>Товары</p>
            </a>
        </div>
        <div class="page" id="Order">
            @include('blocks.admin.order')
        </div>
        <div class="page" id="Feed">
            @include('blocks.admin.news')
        </div>
        <div class="page" id="Product">
            @include('blocks.admin.product')
        </div>
    </div>
</div>

@include('blocks.footer')

<script src="{{asset('js/jquery-3.6.1.min.js')}}"></script>
<script>
    function openPage(pageName, elmnt, color) {
        let i, page, navlink;
        page = document.getElementsByClassName("page");
        for (i = 0; i < page.length; i++) {
            page[i].style.display = "none";
        }

        navlink = document.getElementsByClassName("navlink");
        for (i = 0; i < navlink.length; i++) {
            navlink[i].style.backgroundColor = "white";
            navlink[i].style.color = "black";
        }

        document.getElementById(pageName).style.display = "flex";

        elmnt.style.backgroundColor = color;
        elmnt.style.color = "white";
        elmnt.style.textDecoration = "none";
    }

    document.getElementById("defaultOpen").click();
</script>

</body>
</html>
