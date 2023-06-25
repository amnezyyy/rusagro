<?php session_start()?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/user_profile.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/etc/logo.png" type="image/x-icon">
        <title>Личный кабинет</title>
</head>
<body>

<?php require "blocks/header.php";
require_once "vendor/autoload.php";
    $id = $_SESSION['user']['id'];
    $user_data = $_SESSION['user'];
    $conn = new \App\DatabaseConnection();
    $user = (new \App\UserRepository($conn)) -> getUserById($id);
        echo '
<div class="user-pic">
    <div class="user-pic-container-main">
        <p style="color: white; font-size: 40px; font-weight: bolder">Добрый день, '. $user_data['name'] .' </p>
    </div>
</div>';?>
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
                            <?php echo '
                            <p style="font-size: 15px; color: gray; margin-bottom: 0">Имя</p>
                            <p style="font-size: 25px; margin-bottom: 10px">'. $user_data['name'] .'</p>
                            <p style="font-size: 15px; color: gray; margin-bottom: 0">Номер телефона</p>
                            <p style="font-size: 25px; margin-bottom: 10px">'. $user_data['telephone_num'] .'</p>
                            <p style="font-size: 15px; color: gray; margin-bottom: 0">Email</p>
                            <p style="font-size: 25px; margin-bottom: 10px">'. $user_data['email'] .'</p>';?>
                        <form action="vendor/logout.php">
                            <button class="btn-logout">Выйти</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="page" id="Orders">
                <div style="display: flex; flex-flow: wrap; justify-content: space-between; row-gap: 20px;">
                    <p style="font-size: 29px; font-weight: bolder; width: 100%; margin-bottom: 0">Заказы</p>
                    <div class="user-block">
                        <p style="font-size: 15px; color: gray; margin-bottom: 0">Номер заказа</p>
                        <p style="font-size: 25px; margin-bottom: 10px">#132</p>
                        <p style="font-size: 15px; color: gray; margin-bottom: 0">Товары</p>
                        <p style="font-size: 25px; margin-bottom: 10px">Гречка</p>
                        <p style="font-size: 15px; color: gray; margin-bottom: 0">Статус заказа</p>
                        <p style="font-size: 25px; margin-bottom: 0; color: #d38b00"><img src="img/etc/timer_user.png"> Принят в обработку</p>
                    </div>
                    <div class="user-block">
                        <p style="font-size: 15px; color: gray; margin-bottom: 0">Номер заказа</p>
                        <p style="font-size: 25px; margin-bottom: 10px">#132</p>
                        <p style="font-size: 15px; color: gray; margin-bottom: 0">Товары</p>
                        <p style="font-size: 25px; margin-bottom: 10px">Гречка</p>
                        <p style="font-size: 15px; color: gray; margin-bottom: 0">Статус заказа</p>
                        <p style="font-size: 25px; margin-bottom: 0; color: #327933"><img src="img/etc/successfully.png"> Доставлен</p>
                    </div>
                    <div class="user-block">
                        <p style="font-size: 15px; color: gray; margin-bottom: 0">Номер заказа</p>
                        <p style="font-size: 25px; margin-bottom: 10px">#132</p>
                        <p style="font-size: 15px; color: gray; margin-bottom: 0">Товары</p>
                        <p style="font-size: 25px; margin-bottom: 10px">Гречка</p>
                        <p style="font-size: 15px; color: gray; margin-bottom: 0">Статус заказа</p>
                        <p style="font-size: 25px; margin-bottom: 0; color: #408a26"><img src="img/etc/delivery.png">&nbsp Доставляем</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="assets/js/user-profile.js"></script>


<?php require "blocks/footer.php"; ?>

</body>
</html>
