<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/catalog_class.css">
    <link rel="stylesheet" href="assets/css/blocks/sidebar-product.css">
    <link rel="shortcut icon" href="img/etc/logo.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <?php require 'vendor/autoload.php';
    $conn = new \App\DatabaseConnection();
    $class = $_GET['class'];
    $products = (new \App\ProductRepository($conn)) -> getProductByClass($class);
    $class = (new \App\ClassRepository($conn)) -> getClassById($class);
    $class_name = $class[0][1];
    echo '
    <title>' . $class_name . ' - АПК РусАгроАльянс</title>';?>
</head>
<body>

<?php require "blocks/header.php";
    echo '
    <div class="catalog-pic">
        <div class="catalog-container-main">
            <p style="color: white; font-size: 40px; font-weight: bolder">' . $class_name . '</p>
        </div>
    </div>
    <div class="catalog-container">
        <div class="catalog-main">
            <div class="product-container-sidebar">
                <div class="product-sidebar">
                    <div style="width: 100%; font-size: 20px; font-weight: bolder;border-bottom: 2px solid #ededed; text-align: left; margin-bottom: 15px; height: auto">
                        <p style="color: #3d3d3f">Каталог</p>
                    </div>
                    <ul class="nav">
                        <li class="sidebar-item">
                            <a href="catalog_class.php?class=1" class="item">Семена</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="catalog_class.php?class=2" class="item">Злаковые и зерновые</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="catalog_class.php?class=3" class="item">Бобовые</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="catalog_class.php?class=4" class="item">Масличные</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="catalog-container-product">
            ';
foreach ($products as $product) {
    echo '
            <div class="product">
                <a class="product-head" href="product.blade.php?id='. $product[0] . '">
                    <img src="'. $product[5] . '" class="img-prod">
                    <p style="font-size: 20px; font-weight: bolder">'. $product[1] . '</p>
                </a>
                <a class="product-middle" href="product.blade.php?id='. $product[0] . '">
                    <div style="height: 100%; width: 100%; display: flex; justify-content: space-between">
                       <div style="width: 45%; height: 100%; display: flex; flex-flow: wrap">
                            <p style="font-size: 20px; color: #3a713b; font-weight: bolder">'. $product[4] . ' ₽</p>
                            <p style="font-size: 20px; line-height: 0; width: 100%">Цена за 5 кг.</p>
                       </div>
                       <div style="width: 30%; height: 100%;display: flex; flex-wrap: wrap">
                            <p style="font-size: 20px">Фасовка:</p>
                            <p style="font-size: 20px; line-height: 0">5 кг.</p>
                       </div>
                    </div>
                </a>
                <div class="product-end">
                    <div class="product-input">
                        <div style="border: 1px solid #dcdcdc; display: flex; border-radius: 15px">
                            <button class="btn-input-left">-</button>
                            <input value="1" class="inp-input" id="inp-input" readonly data-max-count="30">
                            <button class="btn-input-right">+</button>
                        </div>
                    </div>
                    <div class="product-card">
                        <p style="font-size: 18px; line-height: 2.8">шт.</p>
                        <form method="" action="">
                            <button class="btn-card">Купить</button>
                        </form>
                    </div>
                </div>
            </div>
    ';}?>
        </div>
    </div>
</div>

<?php require "blocks/footer.php"; ?>

<script src="assets/js/product-input.js"></script>

</body>
</html>
