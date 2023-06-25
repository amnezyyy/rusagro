<link rel="stylesheet" href="{{asset('css/header.css')}}">
<link rel="stylesheet" href="{{asset('css/blocks/popup-auth.css')}}">
<link rel="stylesheet" href="{{asset('css/blocks/modal.css')}}">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,200"/>

<header>
    <div class="header-container">
        <div class="logo">
            <a href="{{url('/')}}"><img src="/img/etc/logo.png" style="width: 50px; border-radius: 15px;"></a>
            <div style="font-size: 20px; line-height: 1; font-weight: bolder">
                <a href="{{url('/')}}" style="text-decoration: none; display: flex; flex-flow: column; padding: 5px">
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
                <li class="header-nav-li"><a href="{{url('/category')}}" class="a-nav">Продукция</a>
                <ul class="list-container">
                    <div style="border: 1px solid rgba(128, 128, 128, 0.5); border-top: none;border-bottom-left-radius: 15px; border-bottom-right-radius: 15px">
                        @php($categories = \App\Models\Category::get())
                        @foreach($categories as $category)
                            <li class="li-blocks"><a href="{{url('/catalog/' . $category->code)}}" class="list-a">{{$category->category_name}}</a></li>
                        @endforeach
                    </div>
                </ul>
                </li>
                <li class="header-nav-li"><a href="{{url('/company')}}" class="a-nav">Компания</a></li>
                <li class="header-nav-li"><a href="{{url('/about')}}" class="a-nav">Контакты</a></li>
                @if (\Illuminate\Support\Facades\Auth::check())
                    <a href="{{url('/profile')}}"><li class="header-nav-li"><button class="btn-nav">Кабинет</button></li></a>
                    <li class="header-nav-li"><a href="{{url('/basket')}}"><button class="btn-nav-basket">&nbsp<div class="count"></div></button></a></li>
                @else
                    <li class="header-nav-li"><button class="btn-nav open_popup_singin" id="open_popup_singin" onclick="openPopUpAuth()">Войти</button></li>
                    <li class="header-nav-li"><button class="btn-nav-basket open_popup_singin" onclick="openPopUpAuth()">&nbsp</button></li>
                @endif
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
                <i class="bx bx-x" id="close_popup" onclick="closePopUpAuth()"></i>
            </div>
            <form method="post" action="{{url('/auth')}}" id="form-auth">
                @csrf
                <div class="form-floating">
                    <input type="tel" name="telephone" class="form-control" id="floatingInput" placeholder="Номер телефона" value="+7" required autocomplete="on">
                    <label for="floatingInput" id="text-control">Номер телефона</label>
                </div>
                <div class="form-floating" style="outline: none">
                    <input type="password" class="form-control password-input" name="password" placeholder="Пароль" required>
                    <a href="#" class="password-control"></a>
                    <label for="floatingInput" id="text-control">Пароль</label>
                </div>
                <div id="wrong-data" style="color: red; text-align: center; font-weight: bolder"></div>
                <button class="btn_singin" type="submit">Войти</button>
            </form>
            <p style="text-align: center; font-size: 17px; font-weight: normal">Впервые у нас? &nbsp-&nbsp <a href="#" class="open_popup_reg p-popup-link" id="open_popup_reg" style="text-decoration: none; color: #3a713b; transition: .5s" onclick="openPopUpReg()">Создать аккаунт</a></p>
        </div>
    </div>
</div>

<!--Попап регистрации-->

<div class="popup_reg" id="popup_reg">
    <div class="popup_container">
        <div class="popup_reg_body" id="popup_reg_body">
            <div style="display:flex; justify-content: space-between">
                <p class="text-top">Регистрация</p>
                <i class="bx bx-x" id="close_popup" onclick="closePopUpReg()"></i>
            </div>
            <form  method="post" action="{{url('/register')}}" id="form-reg">
                @csrf
                <div class="form-floating">
                    <input type="text" name="name" class="form-control" placeholder="Ваше имя" required>
                    <label for="floatingInput" id="text-control">Ваше имя</label>
                </div>
                <div class="form-floating">
                    <input type="tel" name="telephone" class="form-control" placeholder="Номер телефона" value="+7" required>
                    <label for="floatingInput" id="text-control">Номер телефона</label>
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" placeholder="email@email.com" required>
                    <label for="floatingInput" id="text-control">Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control password-input" placeholder="Пароль" required>
                    <a href="#" class="password-control"></a>
                    <label for="floatingPassword" id="text-control">Пароль</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password_confirmation" class="form-control" id="floatingPassword" placeholder="Подтвердите пароль" required>
                    <label for="floatingPassword" id="text-control">Подтверждение пароля</label>
                </div>
                <div id="wrong-reg" style="color: red; text-align: center; font-weight: bolder"></div>
                <button class="btn_singin" type="submit">Зарегестрироваться</button>
            </form>
            <p style="text-align: center; font-size: 17px; font-weight: normal">У Вас уже есть аккаунт? &nbsp-&nbsp <a href="#" class="redirect_open_popup_singin" id="redirect_open_popup_singin" style="text-decoration: none; color: #3a713b;" onclick="redirectPopUp()">Авторизуйтесь</a></p>
        </div>
    </div>
</div>

<div id="modal-success-reg">
    Вы успешно <br> зарегистрировались!
</div>

<script src="{{asset('js/jquery-3.6.1.min.js')}}"></script>
<script src="{{asset('js/popup-auth.js')}}"></script>
<script src="{{asset('js/header.js')}}"></script>
<script src="{{asset('js/ajax.js')}}"></script>
<script>
    $(document).ready (function(){
        var count_basket = +localStorage.getItem("count-basket")
        $('.count').text(count_basket)
    });
    $('body').on('click', '.password-control', function(){
        if ($('.password-input').attr('type') == 'password'){
            $(this).addClass('view');
            $('.password-input').attr('type', 'text');
        } else {
            $(this).removeClass('view');
            $('.password-input').attr('type', 'password');
        }
        return false;
    });
</script>



