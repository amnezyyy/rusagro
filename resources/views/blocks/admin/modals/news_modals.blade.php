<!--Добавление новости-->

<div class="popup_add_news" id="popup_add_news">
    <div class="add_news_popup_container">
        <div class="popup_add_news_body" id="popup_add_news_body">
            <div style="display:flex; justify-content: space-between">
                <p class="text-top">Добавить новость</p>
                <i class="bx bx-x" id="close_popup" onclick="closePopupAddNews()"></i>
            </div>
            <form action="{{url('/admin/news_create')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-floating">
                    <input type="text" name="title_name" class="form-control" id="floatingInput" placeholder="Заголовок" required>
                    <label for="floatingInput" id="text-control">Заголовок</label>
                </div>
                <div class="form-floating">
                    <textarea name="des1" class="form-control" id="floatingInput" placeholder="Анонс" required style="height: 150px; resize: none"></textarea>
                    <label for="floatingInput" id="text-control">Анонс</label>
                </div>
                <div class="form-floating">
                    <input type="file" name="img_news" class="form-control" id="floatingInput" placeholder="Изображение новости" required>
                    <label for="floatingInput" id="text-control">Изображение новости</label>
                </div>
                <div class="form-floating">
                    <textarea name="des2" class="form-control" id="floatingInput" placeholder="Основной текст" required style="height: 300px; resize: none"><p></p></textarea>
                    <label for="floatingInput" id="text-control">Основной текст</label>
                </div>
                <div style="display: flex; justify-content: end">
                    <button class="btn_add_news" >Добавить новость</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Изменение новости-->

<div class="popup_edit_news">
    <div class="popup_edit_news_container">
        <div class="popup_edit_news_body">
            <div style="display:flex; justify-content: space-between">
                <p class="text-top">Изменить новость</p>
                <i class="bx bx-x" id="close_popup" onclick="closePopupEditNews()"></i>
            </div>
            <form class="form-edit-news" data-id="{{$new->id}}">
                @csrf
                <div class="form-floating">
                    <input type="text" name="title_name" class="form-control" placeholder="Заголовок" required value="{{$new->title_name}}">
                    <label for="floatingInput" id="text-control">Заголовок</label>
                </div>
                <div class="form-floating">
                    <textarea name="des1" class="form-control"  placeholder="Анонс" required style="height: 150px; resize: none">{{$new->des1}}</textarea>
                    <label for="floatingInput" id="text-control">Анонс</label>
                </div>
                <div class="form-floating">
                    <textarea name="des2" class="form-control" placeholder="Основной текст" required style="height: 300px; resize: none">{{$new->des2}}</textarea>
                    <label for="floatingInput" id="text-control">Основной текст</label>
                </div>
                <div style="display: flex; justify-content: end">
                    <button class="btn_edit_news" type="submit">Изменить новость</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Удаление новости-->

<div class="popup_delete_news">
    <div class="popup_edit_news_container">
        <div class="popup_delete_body_news">
            <div style="margin: 25px 25px 0; display: flex; flex-direction: column; text-align: center">
                <p style="font-size: 25px; margin-bottom: 5px">Вы действительно хотите удалить новость - #{{$new->id}}?</p>
                <p style="font-size: 15px; margin-bottom: 10px">Если Вы удалите новость, она будет безвозвратно утеряна.</p>
            </div>
            <div class="delete-news">
                <button class="btn-no" onclick="closePopupDeleteNews()">Отмена</button>
                <form class="form-delete-news" data-id="{{$new->id}}">
                    @csrf
                    <button class="btn-yes" type="submit">Удалить</button>
                </form>
            </div>
        </div>
    </div>
</div>
