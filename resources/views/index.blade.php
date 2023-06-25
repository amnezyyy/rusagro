<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="shortcut icon" href="{{asset('img/etc/logo.png')}}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>ООО АПК РусАгроАльянс - Крупное сельскохозяйственное предприятие</title>
</head>
<body>

@include('blocks/header')

<div class="index-pic">
    <div class="index-pic-start">
        <div class="text-index-pic">
            <p class="p1-pic">АПК <br> РусАгроАльянс</p>
            <p class="p2-pic">Крупное сельскохозяйственное предприятие</p>
            <a href="{{url('/category')}}"><button class="btn-pic">Продукция</button></a>
        </div>
    </div>
</div>
<div class="index-container">
    <div class="index-container-main">
        <span style="font-weight: bolder; font-size: 40px; margin-bottom: 25px">Коротко о нас</span>
        <p>Агропромышленная компания РусАгроАльянс, созданная в апреле 2005 года на базисе хозяйств Данковского района, является крупным сельскохозяйственным предприятием, производящим продукцию растениеводства.</p>
        <p>На сегодняшний день компания располагает квалифицированным персоналом, новейшим сельскохозяйственным оборудованием, 42 000 гектар пашни в Данковском районе, Липецкой области где выращивает - пшеницу, пивоваренный ячмень, гречиху, сою, рапс, подсолнечник, кукурузу. В Ростовской области, Дубовского района на площади 22 000 гектар пашни запушен проект по введению севооборота пшеницы, ячменя, нута, подсолнечника и сорго.</p>
        <span style="font-size: 25px; font-weight: bolder; margin-top: 15px; margin-bottom: 15px">Почему нас выбирают</span>
        <div class="rows">
            <div class="index-container-row">
                <div class="index-row">
                    <p style="color: #4bb44d; font-size: 25px">01</p>
                    <p style="font-size: 20px">Хорошая<br> репутация</p>
                    <p style="font-weight: normal">Наша компания хорошо известна не только на территории Российской Федерации, но и на ближнем зарубежье.</p>
                </div>
                <div class="index-row">
                    <p style="color: #4bb44d; font-size: 25px">02</p>
                    <p style="font-size: 20px">Минимальная стоимость товаров</p>
                    <p style="font-weight: normal">Обращаясь к нам, вы можете купить семена от производителя, минуя посредников. Это гарантия высокого качества из первых рук и низкой цены.</p>
                </div>
            </div>
            <div class="index-container-row">
                <div class="index-row">
                    <p style="color: #4bb44d; font-size: 25px">03</p>
                    <p style="font-size: 20px">Широкий <br>ассортимент</p>
                    <p style="font-weight: normal">Отличная возможность заказать семена, которых нет в магазинах вашего город. В продаже большое количество семян!</p>
                </div>
                <div class="index-row">
                    <p style="color: #4bb44d; font-size: 25px">04</p>
                    <p style="font-size: 20px">Быстрая, удобная и недорогая доставка</p>
                    <p style="font-weight: normal">Мы отправляем семена и саженцы почтой по всей России, а так же курьерскими компаниями до двери покупателя.</p>
                </div>
            </div>
        </div>
        <div class="news-text">
            <span style="font-weight: bolder; font-size: 40px; margin-bottom: 0;">Новости</span><a href="{{url('/news')}}"><button class="btn-all-feed">Все новости</button></a>
        </div>
        <div class="feed-position">
            @include('blocks/news_container')
        </div>
    </div>
</div>

@include('blocks/footer')

<script>
    $(document).ready ( function(){
        let feed = document.getElementsByClassName('feed');
        let i;
        for (i = 4; i < feed.length; i++) {
            feed[i].style.display = "none";
        }
    });
</script>

</body>
</html>
