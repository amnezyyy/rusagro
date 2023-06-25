// $(document).ready( function () {
//     let inp_input = parseInt(document.getElementById('inp-input').value);
//
//     $('#result-total').text(product_count * inp_input);
//
// // Убавляем кол-во по клику
//     $('.product-input .btn-input-left').click(function () {
//         let $input = $(this).parent().find('.inp-input');
//         let count = parseInt($input.val()) - 1;
//         count = count < 1 ? 1 : count;
//         $input.val(count);
//         $('#result').text(product_count * count);
//     });
//
// // Прибавляем кол-во по клику
//     $('.product-input .btn-input-right').click(function () {
//         let $input = $(this).parent().find('.inp-input');
//         let count = parseInt($input.val()) + 1;
//         count = count > parseInt($input.data('max-count')) ? parseInt($input.data('max-count')) : count;
//         $input.val(parseInt(count));
//         $('#result').text(product_count * count);
//     });
//
// // Убираем все лишнее и невозможное при изменении поля
//     $('.product-input .inp-input').bind("change keyup input click", function () {
//         if (this.value.match(/[^0-9]/g)) {
//             this.value = this.value.replace(/[^0-9]/g, '');
//         }
//
//         if (this.value > parseInt($(this).data('max-count'))) {
//             this.value = parseInt($(this).data('max-count'));
//         }
//     });
// })
//
