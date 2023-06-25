<!--Добавить товар-->

<div class="popup_add_product" id="popup_add_product">
    <div class="popup_add_product_container">
        <div class="popup_add_product_body" id="popup_add_product_body">
            <div style="display:flex; justify-content: space-between">
                <p class="text-top">Добавить товар</p>
                <i class="bx bx-x" id="close_popup" onclick="closePopupAddProduct()"></i>
            </div>
            <form action="{{url('/admin/add_product')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-floating">
                    <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Название товара" required>
                    <label for="floatingInput" id="text-control">Название товара</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="code" class="form-control" id="floatingInput" placeholder="Код товара" required>
                    <label for="floatingInput" id="text-control">Код товара</label>
                </div>
                <select class="choose-class-product form-select" required name="category">
                    <option value="1">Семена</option>
                    <option value="2">Злаковые и зерновые</option>
                    <option value="3">Бобовые</option>
                    <option value="4">Масличные</option>
                </select>
                <div class="form-floating">
                    <input type="file" name="img" class="form-control" id="floatingInput" placeholder="Изображение" required>
                    <label for="floatingInput" id="text-control">Изображение</label>
                </div>
                <div class="form-floating">
                    <textarea type="text" name="des" class="form-control" id="floatingInput" placeholder="Описание" required style="height: 200px; resize: none"></textarea>
                    <label for="floatingInput" id="text-control">Описание</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="price" class="form-control" id="floatingInput" placeholder="Цена за 5 кг." required>
                    <label for="floatingInput" id="text-control">Цена за 5 кг.</label>
                </div>
                <div style="display: flex;flex-flow: nowrap;justify-content: end;margin-bottom: 0">
                    <button class="popup-add-product" type="submit">Добавить</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Изменить товар-->

<div class="popup_edit_product">
    <div class="popup_edit_product_container">
        <div class="popup_edit_product_body">
            <div style="display:flex; justify-content: space-between">
                <p class="text-top">Изменить товар</p>
                <i class="bx bx-x" id="close_popup"  onclick="closePopupEditProduct()"></i>
            </div>
            <form method="post" action="{{url('/admin/product_edit/' . $prod->id)}}">
                @csrf
                <div class="form-floating">
                    <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Название товара" required value="{{$prod->name}}">
                    <label for="floatingInput" id="text-control">Название товара</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="code" class="form-control" id="floatingInput" placeholder="Код товара" required value="{{$prod->code}}">
                    <label for="floatingInput" id="text-control">Код товара</label>
                </div>
                <div class="form-floating">
                    <textarea name="des" class="form-control" id="floatingInput" placeholder="Описание товара" required style="height: 200px; resize: none">{{$prod->des}}</textarea>
                    <label for="floatingInput" id="text-control">Описание товара</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="price" class="form-control" id="floatingInput" placeholder="Цена за 5 кг." required value="{{$prod->price}}">
                    <label for="floatingInput" id="text-control">Цена за 5 кг.</label>
                </div>
                <div style="display: flex;flex-flow: nowrap;justify-content: space-between;margin-bottom: 0; align-items: center">
                    <div style="display: flex; column-gap: 15px">
                        <input type="checkbox" class="form-check-input" name="visible" id="visible" @if($prod->visible == 1) checked="checked" @endif value="{{$prod->visible}}" onclick="changeValue({{$key}})">
                        <label for="visible">Видимость</label>
                    </div>
                    <button class="popup-edit-product">Изменить</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>

</script>
