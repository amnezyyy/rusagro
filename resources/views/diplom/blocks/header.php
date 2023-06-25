<?php session_start();?>

<link rel="stylesheet" href="/assets/css/header.css">
<link rel="stylesheet" href="/assets/css/blocks/popup-auth.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<header>
    <div class="header-container">
        <div class="logo">
            <a href="/index.php"><img src="/img/etc/logo.png" style="width: 50px; border-radius: 15px;"></a>
            <div style="font-size: 20px; line-height: 1; font-weight: bolder">
                <a href="/index.php" style="text-decoration: none; display: flex; flex-flow: column; padding: 5px">
                    <p class="logo-text-top" style="color: #3a713b; margin-bottom: 0; margin-top: 0">АПК</p>
                    <div style="display: flex">
                        <p class="logo-text-bottom" style="color: #3a713b">РУС</p>
                        <p class="logo-text-bottom" style="color: #4bb44d">АГРО</p>
                        <p class="logo-text-bottom" style="color: #3a713b">АЛЬЯНС</p>
                    </div>
                </a>
            </div>
        </div>
        <nav style="align-items: center">
            <i class='bx bx-menu bx-flip-horizontal' id="menu-icon"></i>
            <ul class="nav-list">
                <li class="header-nav-li"><a href="/category_place.php" class="a-nav">Продукция</a>
                <ul class="list-container">
                    <div style="border: 1px solid rgba(128, 128, 128, 0.5); border-top: none;border-bottom-left-radius: 15px; border-bottom-right-radius: 15px">
                        <li class="li-blocks"><a href="/catalog_class.php?class=1" class="list-a">Семена</a></li>
                        <li class="li-blocks"><a href="/catalog_class.php?class=2" class="list-a">Злаковые</a></li>
                        <li class="li-blocks"><a href="/catalog_class.php?class=3" class="list-a">Бобовые</a></li>
                        <li class="li-blocks"><a href="/catalog_class.php?class=4" class="list-a">Масличные</a></li>
                    </div>
                </ul>
                </li>
                <li class="header-nav-li"><a href="/company.php" class="a-nav">Компания</a></li>
                <li class="header-nav-li"><a href="/about.php" class="a-nav">Контакты</a></li>
                <?php
                if ($_SESSION['user']['id'] != NULL){
                    echo '
                    <a href="/user_profile.php"><li class="header-nav-li"><button class="btn-nav">Кабинет</button></li></a>';
                } else {
                    echo '
                    <li class="header-nav-li"><button class="btn-nav open_popup_singin" id="open_popup_singin" ONCLICK="openPopUpAuth()">Войти</button></li>';
                };
                if ($_SESSION['user']['id'] != NULL){
                    echo '
                    <li class="header-nav-li"><a href="/basket.blade.php"><button class="btn-nav-basket">&nbsp<div class="count" id="count-product-header"></div></button></a></li>';
                } else {
                    echo '
                    <li class="header-nav-li"><button class="btn-nav-basket open_popup_singin" ONCLICK="openPopUpAuth()">&nbsp</button></a></li>';
                }?>
            </ul>
        </nav>
    </div>
</header>

<!--Попап входа-->

<div class="popup_singin" id="popup_singin">
    <div class="popup_container">
        <div class="popup_singin_body" id="popup_singin_body">
            <div style="display:flex; justify-content: space-between">
                <p class="text-top">Войти</p>
                <i class="bx bx-x" id="close_popup" ONCLICK="closePopUpAuth()"></i>
            </div>
            <form id="form-auth">
                <div class="form-floating">
                    <input type="tel" name="telephone_num" class="form-control" id="floatingInput" placeholder="Номер телефона" value="+7 " required>
                    <label for="floatingInput" id="text-control">Номер телефона</label>
                </div>
                <div class="form-floating" style="outline: none">
                    <input type="password" class="form-control" id="floatingInput" name="password" placeholder="Пароль" required>
                    <label for="floatingInput" id="text-control">Пароль</label>
                </div>
                <div id="wrong-data" style="color: red; text-align: center;"></div>
                <button class="btn_singin" type="submit">Войти</button>
            </form>
            <p style="text-align: center; font-size: 17px; font-weight: normal">Впервые у нас? &nbsp-&nbsp <a href="#" class="open_popup_reg p-popup-link" id="open_popup_reg" style="text-decoration: none; color: #3a713b; transition: .5s" ONCLICK="openPopUpReg()">Создать аккаунт</a></p>
        </div>
    </div>
</div>

<!--Попап регистрации-->

<div class="popup_reg" id="popup_reg">
    <div class="popup_container">
        <div class="popup_reg_body" id="popup_reg_body">
            <div style="display:flex; justify-content: space-between">
                <p class="text-top">Регистрация</p>
                <i class="bx bx-x" id="close_popup" ONCLICK="closePopUpReg()"></i>
            </div>
            <form id="form-reg">
                <div class="form-floating">
                    <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Ваше имя" required >
                    <label for="floatingInput" id="text-control">Ваше имя</label>
                </div>
                <div class="form-floating">
                    <input type="tel" name="telephone_num" class="form-control" id="floatingInput" placeholder="Номер телефона" value="+7 " required>
                    <label for="floatingInput" id="text-control">Номер телефона</label>
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="email@email.com" required>
                    <label for="floatingInput" id="text-control">Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Пароль" required>
                    <label for="floatingPassword" id="text-control">Пароль</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password_confirm" class="form-control" id="floatingPassword" placeholder="Подтвердите пароль" required>
                    <label for="floatingPassword" id="text-control">Подтверждения пароля</label>
                </div>
                <div id="wrong-password" style="color: red; text-align: center;"></div>
                <button class="btn_singin" type="submit">Зарегестрироваться</button>
            </form>
            <p style="text-align: center; font-size: 17px; font-weight: normal">У Вас уже есть аккаунт? &nbsp-&nbsp <a href="#" class="redirect_open_popup_singin" id="redirect_open_popup_singin" style="text-decoration: none; color: #3a713b;" ONCLICK="redirectPopUp()">Авторизуйтесь</a></p>
        </div>
    </div>
</div>

<script src="../assets/js/jquery-3.6.1.min.js"></script>
<script src="/assets/js/ajax.js"></script>
<script src="/assets/js/popup-auth.js"></script>
<script src="/assets/js/header-menu.js"></script>
<!--<script src="../assets/js/basket-count-products.js"></script>-->



