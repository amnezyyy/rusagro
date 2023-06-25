<link rel="stylesheet" href="{{asset('css/admin/product.css')}}">
<link rel="stylesheet" href="{{asset('css/admin/popup/popup_product.css')}}">

<div class="product-page-container">
    <button class="btn-add-product open_popup_add_product" onclick="openPopupAddProduct()">Добавить товар</button>
    <div class="product-container">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Код</th>
                <th>Название товара</th>
                <th>Категория</th>
                <th class="hide">Цена</th>
                <th class="hide">Видимость</th>
                <th>Действия</th>
            </tr>
            @foreach($prods as $key => $prod)
                <tr>
                    <td>#{{$prod->id}}</td>
                    <td>{{$prod->code}}</td>
                    <td>{{$prod->name}}</td>
                    <td>{{\App\Models\Category::where('id', $prod->category)->first()->category_name}}</td>
                    <td>{{$prod->price}} ₽</td>
                    @if($prod->visible == 1)
                        <td>Виден</td>
                    @else
                        <td>Скрыт</td>
                    @endif
                    <td>
                        <div style="display: flex; column-gap: 10px">
                            <button class="btn-product-admin edit" onclick="openPopupEditProduct({{$key}})"><i class='bx bx-edit'></i></button>
                            <button class="btn-product-admin delete" onclick="openPopupDeleteNews({{$key}})"><i class='bx bx-trash'></i></button>
                        </div>
                    </td>
                </tr>
                @include('blocks.admin.modals.product_modals')
            @endforeach
        </table>
    </div>
</div>

<script src="{{asset('js/jquery-3.6.1.min.js')}}"></script>
<script src="{{asset('js/admin/product.js')}}"></script>

{{--    <!--Удаление товара -->--}}

{{--<?php foreach ($products as $key => $product) {--}}
{{--    echo '--}}
{{--<div class="popup_delete_product">--}}
{{--    <div class="popup_delete_product_container">--}}
{{--        <div class="popup_delete_body_product">--}}
{{--            <p style="font-size: 20px; margin: 25px 25px 15px 25px">Вы действительно хотите удалить этот товар?</p>--}}
{{--            <div style="display: flex; width: 100%">--}}
{{--                <form action="/vendor/admin/delete_product.php" method="post" style="width: 50%; display: flex;">--}}
{{--                    <input name="id" style="display: none" value="'. $product[0] . '">--}}
{{--                    <button class="btn-yes">Да</button>--}}
{{--                </form>--}}
{{--                <button class="btn-no popup_close_delete" ONCLICK="closePopUpDeleteProduct(' . $key . ')">Нет</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>';}?>--}}

