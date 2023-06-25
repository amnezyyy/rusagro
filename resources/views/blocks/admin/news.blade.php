<link rel="stylesheet" href="{{asset('css/admin/feed.css')}}">
<link rel="stylesheet" href="{{asset('css/admin/popup/popup_news.css')}}">

<div class="feed-page-container">
    <div style="display: flex; flex-flow: nowrap; margin-bottom: 25px">
        <button class="btn-add-news" onclick="openPopupAddNews()">Добавить новость</button>
    </div>
    <div style="display: flex; flex-flow: wrap; column-gap: 15px; row-gap: 15px">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Заголовок</th>
                <th>Действия</th>
            </tr>
            @foreach($news as $key => $new)
                <tr>
                    <td>#{{$new->id}}</td>
                    <td>{{$new->title_name}}</td>
                    <td>
                        <div style="display: flex; column-gap: 10px">
                            <button class="btn-feed-admin edit" onclick="openPopupEditNews({{$key}})"><i class='bx bx-edit'></i></button>
                            <button class="btn-feed-admin delete" onclick="openPopupDeleteNews({{$key}})"><i class='bx bx-trash'></i></button>
                        </div>
                    </td>
                </tr>
                @include('blocks.admin.modals.news_modals')
            @endforeach
        </table>
    </div>
</div>

<script src="{{asset('js/jquery-3.6.1.min.js')}}"></script>
<script src="{{asset('js/admin/news.js')}}"></script>


