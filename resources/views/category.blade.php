<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/category.css')}}">
    <link rel="shortcut icon" href="{{asset('img/etc/logo.png')}}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>Каталог продукции - ООО АПК РусАгроАльянс</title>
</head>
<body>

@include('blocks/header')

<div class="product-place-container">
    <p style="text-align: left; font-size: 40px; font-weight: bolder; width: 1350px; margin-bottom: 50px; color: white">Каталог продукции</p>
    <div class="product-class-container">
        @foreach ($categories as $key => $category)
            @if ($key %  2 == 0)
                <a href="{{url('/catalog/' . $category->code)}}" class="a-container" style="background: url({{asset($category->bg_img)}}); background-size: cover; animation: fade-in-left 1.5s">
                    <p>{{$category->category_name}}</p>
                </a>
            @else
                <a href="{{url('/catalog/' . $category->code)}}" class="a-container" style="background: url({{asset($category->bg_img)}}); background-size: cover; animation: fade-in-right 1.5s">
                    <p>{{$category->category_name}}</p>
                </a>
            @endif
        @endforeach
    </div>
</div>

@include('blocks/footer')

</body>
</html>
