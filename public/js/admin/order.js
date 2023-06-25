popup_order = $('.popup_order')
popup_order_body = $('.popup_order_body')

function openPopupInspect(id) {
    popup_order.eq(id).fadeIn()
}

function closePopupInspect() {
    popup_order.fadeOut()
}

jQuery(function($){
    $(document).mouseup( function(e){
        if ( !popup_order_body.is(e.target)
            && popup_order_body.has(e.target).length === 0 ) {
            closePopupInspect()
        }
    });
});

$(document).on('keyup', function(e) {
    if ( e.key == "Escape" ) {
        closePopupInspect()
    }
});

popup_order_edit = $('.popup_order_edit')
popup_order_body_edit = $('.popup_order_body_edit')

function openPopupEdit(id) {
    popup_order_edit.eq(id).fadeIn()
}

function closePopupEdit() {
    popup_order_edit.fadeOut()
}

jQuery(function($){
    $(document).mouseup( function(e){
        if ( !popup_order_body_edit.is(e.target)
            && popup_order_body_edit.has(e.target).length === 0 ) {
            closePopupEdit()
        }
    });
});

$(document).on('keyup', function(e) {
    if ( e.key == "Escape" ) {
        closePopupEdit()
    }
});

$('.edit-status').submit(function(e) {
    var order_id = $(this).attr('data-id')
    e.preventDefault();
    $.ajax({
        type: 'post',
        url: '/admin/order_edit/' + order_id,
        headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
        data: $(this).serialize(),
        async: false,
        dataType: "json",
        success: function(result){
            location.reload()
        }
    });
});

tr = $('.tr')

if (parseInt(tr.attr('data-css')) === 2){
    tr.find('.edit').hide()
}
