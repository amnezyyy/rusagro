<link rel="stylesheet" href="{{asset('css/footer.css')}}">

<footer>
    <div class="footer-container">
        <div class="footer-container-4">
            <p style="font-weight: bolder">КАТАЛОГ</p>
            <div class="footer-li">
                <ul style="width: auto">
                    <li class="li-a"><a href="{{url('/category')}}" class="footer-link">Вся продукция</a></li>
                    @php($categories = \App\Models\Category::get())
                    @foreach($categories as $category)
                        <li class="li-a"><a href="{{url('/catalog/' . $category->code)}}" class="footer-link">{{$category->category_name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="footer-container-4">
            <p style="font-weight: bolder">КОМПАНИЯ</p>
            <div class="footer-li">
                <ul style="width: auto">
                    <li class="li-a"><a href="{{url('/')}}" class="footer-link">Главная</a></li>
                    <li class="li-a"><a href="{{url('/company')}}" class="footer-link">О компании</a></li>
                    <li class="li-a"><a href="{{url('/about')}}" class="footer-link">Контакты</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-container-4">
            <p style="font-weight: bolder">ПОКУПАТЕЛЯМ</p>
            <div class="footer-li">
                <ul style="width: auto">
                    <li class="li-a"><a href="{{url('/profile')}}" class="footer-link">Личный кабинет</a></li>
                    <li class="li-a"><a href="{{url('/basket')}}" class="footer-link">Корзина</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-container-4">
            <p style="font-weight: bolder">КОНТАКТЫ</p>
            <div class="footer-li">
                <ul style="width: auto">
                    <li class="li-a"><p class="footer-link-p">Липецкая область, Данковский район, село Яхонтово</p></li>
                    <li class="li-a"><p class="footer-link-p"> +7 (474) 656 05 00 </p></li>
                    <li class="li-a"><p class="footer-link-p"> dankov@rosagroal.ru</p></li>
                    <li class="li-a" style="margin-top: 10px">
                        <a href="#" style="margin-right: 10px" class="img-footer"><img src="/img/etc/footer-telegram.png"></a>
                        <a href="#" style="margin-right: 10px" class="img-footer"><img src="/img/etc/whatsapp-footer.png"></a>
                        <a href="#" class="img-footer"><img src="/img/etc/footer-vk.png" width="44"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
