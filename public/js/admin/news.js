// Добавление новости

popup_add_news = $('#popup_add_news')
popup_add_news_body = $('#popup_add_news_body')

function openPopupAddNews() {
    popup_add_news.fadeIn()
}

function closePopupAddNews() {
    popup_add_news.fadeOut()
}

jQuery(function($){
    $(document).mouseup( function(e){
        if ( !popup_add_news_body.is(e.target)
            && popup_add_news_body.has(e.target).length === 0 ) {
            closePopupAddNews()
        }
    });
});

$(document).on('keyup', function(e) {
    if ( e.key == "Escape" ) {
        closePopupAddNews()
    }
});


// Изменение новости

popup_edit_news = $('.popup_edit_news')
popup_edit_news_body = $('.popup_edit_news_body')

function openPopupEditNews(id) {
    popup_edit_news.eq(id).fadeIn()
}

function closePopupEditNews() {
    popup_edit_news.fadeOut()
}

jQuery(function($){
    $(document).mouseup( function(e){
        if ( !popup_edit_news_body.is(e.target)
            && popup_edit_news_body.has(e.target).length === 0 ) {
            closePopupEditNews()
        }
    });
});

$(document).on('keyup', function(e) {
    if ( e.key == "Escape" ) {
        closePopupEditNews()
    }
});

$('.form-edit-news').submit(function(e) {
    var news_id = $(this).attr('data-id')
    e.preventDefault();
    $.ajax({
        type: 'post',
        url: '/admin/news_edit/' + news_id,
        headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
        data: $(this).serialize(),
        async: false,
        dataType: "json",
        success: function(result){
            location.reload()
        }
    });
});

//Удаление новости

popup_delete_news = $('.popup_delete_news')
popup_delete_body_news = $('.popup_delete_body_news')

function openPopupDeleteNews(id) {
    popup_delete_news.eq(id).fadeIn()
}

function closePopupDeleteNews() {
    popup_delete_news.fadeOut()
}

jQuery(function($){
    $(document).mouseup( function(e){
        if ( !popup_delete_body_news.is(e.target)
            && popup_delete_body_news.has(e.target).length === 0 ) {
            closePopupDeleteNews()
        }
    });
});

$(document).on('keyup', function(e) {
    if ( e.key == "Escape" ) {
        closePopupDeleteNews()
    }
});

$('.form-delete-news').submit(function(e) {
    var news_id = $(this).attr('data-id')
    e.preventDefault();
    $.ajax({
        type: 'post',
        url: '/admin/delete_news/' + news_id,
        headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
        data: $(this).serialize(),
        async: false,
        dataType: "json",
        success: function(result){
            location.reload()
        }
    });
});
