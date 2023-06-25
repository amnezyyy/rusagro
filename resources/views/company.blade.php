<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/company.css')}}">
    <link rel="shortcut icon" href="{{asset('img/etc/logo.png')}}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>О Компания</title>
</head>
<body>

@include('blocks/header')

<div class="company-pic">
    <div class="company-main-text-pic">
        <p style="color: white; font-size: 40px; font-weight: bolder">О компании</p>
    </div>
</div>

<div class="company-container">
    <div class="company-container-block">
        <div style="font-size: 18px; margin-bottom: 15px">
            <p style="margin-bottom: 15px">Агропромышленная компания РусАгроАльянс, созданная в апреле 2005 года на базисе хозяйств Данковского района, является крупным сельскохозяйственным предприятием, производящим продукцию растениеводства.</p>
            <p style="margin-bottom: 15px">На сегодняшний день компания располагает квалифицированным персоналом, новейшим сельскохозяйственным оборудованием, 42 000 гектар пашни в Данковском районе, Липецкой области где выращивает - пшеницу, пивоваренный ячмень, гречиху, сою, рапс, подсолнечник, кукурузу. В Ростовской области, Дубовского района на площади 22 000 гектар пашни запушен проект по введению севооборота пшеницы, ячменя, нута, подсолнечника и сорго.</p>
            <p style="margin-bottom: 15px">Мы работаем с крупными брендами, малым и средним бизнесом. Список наших партнеров и клиентов растет с каждым днем.</p>
        </div>
        <p style="font-size: 35px; font-weight: bolder">Наши партнеры</p>
        <div class="company-container-partners">
            <a class="a-partners" href="http://grun.ru/">
                <img src="https://hh.ru/employer-logo/780738.jpeg" class="img-partners">
            </a>
            <a class="a-partners" href="https://www.rusagrotrans.ru/">
                <img src="https://s.rbk.ru/v1_companies_s3/resized/1200xH/media/trademarks/6da1a2f2-f747-4a8b-b478-7374e6303cfc.jpg" class="img-partners">
            </a>
            <a class="a-partners" href="https://www.phosagro.ru/">
                <img src="https://www.volkhov-raion.ru/images/%D1%84%D0%BE%D1%81%D0%B0%D0%B3%D1%80%D0%BE.jpg" class="img-partners">
            </a>
            <a class="a-partners" href="https://betaren.ru/">
                <img src="https://betaren.ru/local/templates/betaren/img/raster/company-logo.png" class="img-partners">
            </a>
            <a class="a-partners" href="http://www.avgust.com/">
                <img src="https://www.fertilizerdaily.ru/wp-content/uploads/2019/06/avgust-logo.png" class="img-partners">
            </a>
            <a class="a-partners" href="https://www.deere.com/en/">
                <img src="https://www.bygghobby.no/users/byggoghobby_mystore_no/images/38016_Livet_Er_Best_Med_John_Deere_Klistremerke_1.jpg" class="img-partners">
            </a>
            <a class="a-partners" href="https://metalmont.it/en/">
                <img src="https://www.go.confindustria.it/kp/uploads/loghi_aziende/Logo%20Metalmont-colori.jpg" class="img-partners">
            </a>
            <a class="a-partners" href="http://grcorp.ru/">
                <img src="https://www.granum.ru/images/demo_img/Granum_new_logo.png" class="img-partners">
            </a>
        </div>
        <p style="font-size: 35px; font-weight: bolder;">Руководители компании</p>
    <div class="company-container-leaders">
        <div class="company-leaders">
            <img src="https://spa22.ru/wp-content/uploads/2021/01/bochkari_direktor-1-1.jpg" style="height: 225px; width: 225px; border-radius: 150px">
            <p style="margin-top: 15px; font-weight: bolder; font-size: 20px; margin-bottom: 0">Атаманюк Александр Николаевич</p>
            <p style="font-size: 18px; color: grey; margin-bottom: 0">Генеральный директор</p>
        </div>
        <div class="company-leaders">
            <img src="https://www.ramenskoye.ru/images/2021/12/06/Drozdov_AP.jpg" style="height: 225px; width: 225px; border-radius: 150px">
            <p style="margin-top: 15px; font-weight: bolder; font-size: 20px; margin-bottom: 0">Ханеева Юлия Игоревна</p>
            <p style="font-size: 18px; color: grey;margin-bottom: 0;">Специалист по продажам зерновых</p>
        </div>
        <div class="company-leaders">
            <img src="https://rt-online.ru/wp-content/uploads/2022/11/KOGOGIN2.jpg" style="height: 225px; width: 225px; border-radius: 150px">
            <p style="margin-top: 15px; font-weight: bolder; font-size: 20px; margin-bottom: 0">Сергей Анатольевич Когогин</p>
            <p style="font-size: 18px; color: grey; margin-bottom: 0">Исполнительный директор</p>
        </div>
    </div>
</div>
</div>

@include('blocks/footer')

</body>
</html>
