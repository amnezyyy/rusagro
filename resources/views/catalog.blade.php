<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/catalog.css')}}">
    <link rel="stylesheet" href="{{asset('css/blocks/sidebar-product.css')}}">
    <link rel="shortcut icon" href="{{asset('img/etc/logo.png')}}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>{{\App\Models\Category::where('id',$products[0]->category)->first()->category_name}} - АПК РусАгроАльянс</title>
</head>
<body>

@include('blocks.header')

<div class="catalog-pic">
    <div class="catalog-container-main">
        <p style="color: white; font-size: 40px; font-weight: bolder">{{\App\Models\Category::where('id',$products[0]->category)->first()->category_name}}</p>
    </div>
</div>
<div class="catalog-container">
    <div class="catalog-main">
        <div class="product-container-sidebar">
            <div class="product-sidebar">
                <div style="width: 100%; font-size: 20px; font-weight: bolder;border-bottom: 2px solid #ededed; text-align: left; margin-bottom: 15px; height: auto">
                    <p style="color: #3d3d3f">Каталог</p>
                </div>
                <ul class="nav">
                    @php($categories = \App\Models\Category::get())
                    @foreach($categories as $category)
                        <li class="sidebar-item">
                            <a href="{{url('/catalog/' . $category->code)}}" class="item">{{$category->category_name}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="catalog-container-product">
            @foreach ($products as $product)
                @if($product->visible == 1)
                    <div class="product">
                        <a class="product-head" href="{{url('/catalog/' . \App\Models\Category::where('id',$products[0]->category)->first()->code . '/' . $product->code)}}">
                            <img src="{{asset('/storage/' . $product->img)}}" class="img-prod">
                            <p style="font-size: 20px; font-weight: bolder">{{$product->name}}</p>
                        </a>
                        <a class="product-middle" href="{{url('/catalog/' . \App\Models\Category::where('id',$products[0]->category)->first()->code . '/' . $product->code)}}">
                            <div style="height: 100%; width: 100%; display: flex; justify-content: space-between">
                               <div style="width: 45%; height: 100%; display: flex; flex-flow: wrap">
                                    <p style="font-size: 20px; color: #3a713b; font-weight: bolder">{{$product->price}} ₽</p>
                                    <p style="font-size: 20px; line-height: 0; width: 100%">Цена за 5 кг.</p>
                               </div>
                               <div style="width: 30%; height: 100%;display: flex; flex-wrap: wrap">
                                    <p style="font-size: 20px">Фасовка:</p>
                                    <p style="font-size: 20px; line-height: 0">5 кг.</p>
                               </div>
                            </div>
                        </a>
                        <div class="product-end">
                            <button class="btn-card">Добавить в корзину</button>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>

@include('blocks.footer')

</body>
</html>
