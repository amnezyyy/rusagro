<!--Попап заказы-->

<div class="popup_order">
    <div class="popup_order_container">
        <div class="popup_order_body">
            <div style="display:flex; justify-content: space-between">
                <p class="text-top">Номер заказа - #{{$order->id}}</p>
                <i class="bx bx-x" id="close_popup" onclick="closePopupInspect()"></i>
            </div>
            <div style="display: flex;flex-flow: wrap">
                <div style="display: flex; flex-flow: column; width: auto; margin-right: 50px">
                    <p style="font-size: 15px; color: gray; margin-bottom: 0">Имя покупателя</p>
                    <p style="font-size: 25px; margin-bottom: 10px">{{\App\Libraries\Repositories\User\UserRepository::getUserByOrder($order->user_id)->name}}</p>
                </div>
                <div style="display: flex; flex-flow: column; width: auto">
                    <p style="font-size: 15px; color: gray; margin-bottom: 0">Номер телефона</p>
                    <p style="font-size: 25px; margin-bottom: 10px">{{\App\Libraries\Repositories\User\UserRepository::getUserByOrder($order->user_id)->telephone}}</p>
                </div>
            </div>
            <p style="font-size: 15px; color: gray; margin-bottom: 0">Email</p>
            <p style="font-size: 25px; margin-bottom: 10px">{{\App\Libraries\Repositories\User\UserRepository::getUserByOrder($order->user_id)->email}}</p>
            <div style="display: flex;flex-flow: wrap">
                <div style="display: flex; flex-flow: column; width: auto; margin-right: 50px">
                    <p style="font-size: 15px; color: gray; margin-bottom: 0">Статус заказа</p>
                    @if($order->status == 0)
                        <p style="font-size: 25px; margin-bottom: 10px">В обработке</p>
                    @elseif($order->status == 1)
                        <p style="font-size: 25px; margin-bottom: 10px">Доставляем</p>
                    @elseif($order->status == 2)
                        <p style="font-size: 25px; margin-bottom: 10px">Доставлен</p>
                    @endif
                </div>
                <div style="display: flex; flex-flow: column; width: auto">
                    <p style="font-size: 15px; color: gray; margin-bottom: 0">Сумма заказа</p>
                    <p style="font-size: 25px; margin-bottom: 10px">{{$order->total_count}} ₽</p>
                </div>
            </div>
            <p style="font-size: 15px; color: gray; margin-bottom: 0">Адрес доставки</p>
            <p style="font-size: 25px; margin-bottom: 10px">{{$order->address}}</p>
            <p style="font-size: 15px; color: gray; margin-bottom: 0">Комментарий к заказу</p>
            <p style="font-size: 25px; margin-bottom: 10px">{{$order->comment}}</p>
            <div style="display: flex; flex-flow: column; width: auto">
                <p style="font-size: 15px; color: gray; margin-bottom: 0">Товары в заказе</p>
                <div style="display: flex; flex-flow: column; margin-bottom: 0">
                    @php($products = \App\Libraries\Repositories\Order\OrderProductRep::getProductByOrder($order->id))
                    @foreach($products as $product)
                        @php ($product_name = \App\Libraries\Repositories\Product\ProductRep::getProductById($product->product_id)->name)
                        <p style="font-size: 25px; margin-bottom: 10px">{{$product_name}} - {{$product->count*5}} кг.</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="popup_order_edit">
    <div class="popup_order_container">
        <div class="popup_order_body_edit">
            <div style="display:flex; justify-content: space-between;">
                <p class="text-top" style="font-size: 25px">Изменить статус заказа - #{{$order->id}}</p>
                <i class="bx bx-x" id="close_popup" onclick="closePopupEdit()"></i>
            </div>
            <form data-id="{{$order->id}}" class="edit-status">
                @csrf
                <select class="select-order" name="status">
                    @if($order->status == 0)
                        <option selected value="0">В обработке</option>
                        <option value="1">Доставляем</option>
                        <option value="2">Доставлен</option>
                    @elseif($order->status == 1)
                        <option value="0">В обработке</option>
                        <option selected value="1">Доставляем</option>
                        <option value="2">Доставлен</option>
                    @elseif($order->status == 2)
                        <option value="0">В обработке</option>
                        <option value="1">Доставляем</option>
                        <option selected value="2">Доставлен</option>
                    @endif
                </select>
                <button type="submit" class="btn-edit-status">Обновить</button>
            </form>
        </div>
    </div>
</div>

<script src="{{asset('js/jquery-3.6.1.min.js')}}"></script>
<script src="{{asset('js/admin/order.js')}}"></script>
