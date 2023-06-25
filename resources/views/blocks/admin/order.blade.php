<link rel="stylesheet" href="{{asset('css/admin/order.css')}}">
<link rel="stylesheet" href="{{asset('css/admin/popup/popup_order.css')}}">

<div class="order-page-container">
    <table class="table">
        <tr>
            <th>ID Заказа</th>
            <th>Имя покупателя</th>
            <th class="hide">Номер телефона</th>
            <th class="hide-1 hide">Статус</th>
            <th>Действия</th>
        </tr>
        @foreach($orders as $key => $order)
            @if($order->status == 2)
            <tr style="color: rgba(128,128,128,1)" data-css="2" class="tr">
                @endif
                <td>#{{$order->id}}</td>
                <td>{{$order->user->name}}</td>
                <td class="hide">{{$order->user->telephone}}</td>
                @if($order->status == 0)
                    <td class="hide-1 hide">В обработке</td>
                @elseif($order->status == 1)
                    <td class="hide-1 hide">Доставляем</td>
                @elseif($order->status == 2)
                    <td class="hide-1 hide">Доставлен</td>
                @endif
                <td>
                    <div style="display: flex; column-gap: 10px">
                        <button class="btn-order-admin look" onclick="openPopupInspect({{$key}})"><i class='bx bx-search-alt-2'></i></button>
                        <button class="btn-order-admin edit" onclick="openPopupEdit({{$key}})"><i class='bx bx-edit'></i></button>
                    </div>
                </td>
            </tr>
            @include('blocks.admin.modals.order_modals')
        @endforeach
    </table>
</div>





