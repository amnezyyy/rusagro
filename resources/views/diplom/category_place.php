<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/category_place.css">
    <link rel="shortcut icon" href="img/etc/logo.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>Каталог продукции - ООО АПК РусАгроАльянс</title>
</head>
<body>

<?php require "blocks/header.php"; ?>

<div class="product-place-container">
    <p style="text-align: left; font-size: 40px; font-weight: bolder; width: 1350px; margin-bottom: 50px; color: white">Каталог продукции</p>
    <div class="product-class-container">
        <div class="class-left">
            <a href="/catalog_class.php?class=1" class="a-container" style="background: url(/img/product/semena.jpg); background-size: cover">
                <p>Семена</p>
            </a>
            <a href="/catalog_class.php?class=3" class="a-container" style="background: url(/img/product/bobs.jpg); background-size: cover">
                <p>Бобовые</p>
            </a>
        </div>
        <div class="class-right">
            <a href="/catalog_class.php?class=2" class="a-container" style="background: url(/img/product/zlaks.jpg); background-size: cover">
                <p>Злаковые и <br> зерновые</p>
            </a>
            <a href="/catalog_class.php?class=4" class="a-container" style="background: url(/img/product/maslen.jpg); background-size: cover">
                <p>Масличные</p>
            </a>
        </div>
    </div>
</div>

<?php require "blocks/footer.php"; ?>

</body>
</html>

<!--<div class="class-left">-->
<!--    <div class="class-prod" style="background-image: url(img/product/semena.jpg)">-->
<!--        <p class="class-prod-text">Семена</p>-->
<!--        <div class="class-prod-end">-->
<!--            <a href="catalog_class.php?class=1" style="color: white; text-decoration: none"><button class="btn-class" >Подробнее</button></a>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="class-prod" style="background-image: url(img/product/bobs.jpg)">-->
<!--        <p class="class-prod-text">Бобовые</p>-->
<!--        <div class="class-prod-end">-->
<!--            <a href="catalog_class.php?class=3" style="color: white; text-decoration: none"><button class="btn-class">Подробнее</button></a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="class-right">-->
<!--    <div class="class-prod" style="background-image: url(img/product/zlaks.jpg)">-->
<!--        <p class="class-prod-text">Злаковые и зерновые</p>-->
<!--        <div class="class-prod-end">-->
<!--            <a href="catalog_class.php?class=2" style="color: white; text-decoration: none"><button class="btn-class">Подробнее</button></a>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="class-prod" style="background-image: url(img/product/maslen.jpg)">-->
<!--        <p class="class-prod-text">Масличные</p>-->
<!--        <div class="class-prod-end">-->
<!--            <a href="catalog_class.php?class=4" style="color: white; text-decoration: none"><button class="btn-class">Подробнее</button></a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->