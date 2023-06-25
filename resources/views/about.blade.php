<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/about.css')}}">
    <link rel="shortcut icon" href="{{asset('img/etc/logo.png')}}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="shortcut icon" href="../../public/img/etc/logo.png" type="image/x-icon">
    <title>Контакты</title>
</head>
<body>

@include('blocks/header')

<div class="about-pic">
    <div class="about-container-main">
        <p style="color: white; font-size: 40px; font-weight: bolder">Контакты</p>
    </div>
</div>
<div class="about-container">
    <div class="about-container-text">
        <p style="font-size: 35px; font-weight: bolder">Удобно выбирать</p>
        <p style="font-size: 18px">Уверены, что выбирать посадочный материал, культуры и сорта, лучше в спокойной обстановке, а не в суете прилавочных магазинов. У Вас есть столько времени на принятие решения, сколько Вам необходимо. Цель работы АПК РусАгроАльянс состоит в том, чтобы обеспечить садоводов качественным посадочным материалом, предоставить удобный сервис и подарить приятные впечатления во время выбора и в процессе выращивания высококачественных плодовых и декоративных культур!</p>
    </div>
    <div class="about-container-block">
        <div class="about-block">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHLAAAAAXNSR0IArs4c6QAABIZJREFUeF7t3eGu2yAMhuHl/i+6UyPlKE3SYsAG27z7MU0aI4XvqSGk69n+Kf96vV4vSZfbtm2SdrSxnQG1EKTBX4cDBNuAS72rAGgN//zigFCKyubvuwFohH8MDQQ2If/qtQuAZvggGB/++4rNACzCB8F4BE0ALMMHwVgE1QBGhA+ CcQiqAIwMHwRjEIgBzAgfBPYIRABmhg8CWwRFAB7CB4Edgp8APIUPAhsEXwF4DB8E+ggeAXgOHwS6CG4AIoQPAj0EHwAihQ8CHQR/ACKGD4J+BCkA7E+1+IRRk4YdQOR3/3nUIKg3kAoAlQAA+wxQCeQQtizl/zpkEMgQAEA2T2lbpQXAUiAzCwDZPKVtBYC00coGlhoAy0AZAQDKc5S6BQBSx1seHADKc5S6BQBSx1seHADKc5S6RWoAHAeX7QKgPEepWwAgdbzlwaX7PMAxZMp/Ofz9oOz9W7ZHwoQvCz8lAMKXh58OAOHXhf8HIMMyQPj14acAQPBtwf9tlo8/RNsIEnxf8DcAUZYBgtcJPiQAwtcN/2MP4L0CEL5++DcAnhEAYGEAhG8TfpgKAICBALwtA4RvF/5jBQCA7YR76939t4RRAWzJAMB2ft337v6LIqkAtoYAYDu/7nt3/13BVABbQ+4B7LcqfAOYmYIiAA+3hQAwy1/2Q6M8fFYABDYIRBWAKmAz+R56BYCHFCa+BjEAqsDElAwvXQUABIZJTOoaAJMm3stlqwFQBbxEp/M6mgDMRsAtoU74+yFba1ezzwZA0Jrc579rBjC7CnBEDACeESgY6KoAVAGFBCZ30Q0ABJMT7Ly8CgAQdKYw8Z+nARBtU1i6ixp1l6MGwEMViI CgFPy1GFhDUAUAgu+1vDb4URDUAYDgjqA3/KNHi2qQFoCX5UArfCsEJgC8VAEPCLQBaI/JDAAIbL+AU2s5MAWwOgKLd/95h6GBYBkAVmvot32/dfha4zEH4KkKaE2a5OBuFIDePcEQAKshGBl+L+phADwi6H33PFWCGeH3IBgKwCsCLQgzw29FMByAZwQ9EDyE34JgCgDvCGoheAq/FsE0ABEQ/JpMj6Ff9ySSc4KpACIhkNz6eWxTQjAdAAjs2fxC4AIACOYhAID93Lu5wlMlcAOAKjDGyRWBKwAgGI/AHYBjCiLcZo2Jy+YqRyVwC4BqYBP89WzDNQAQ2CNwDwAExghsu9frnT2B3lyeewpRAdgY2oT/7jUUAJYDfQjhAIBAF0FIACDQQxAWAAh0EIQGwOawH0EKAFSDdghpAICgDUEqACwJdQjeD4RSAqAayCCkBgCC3whCPA6WOS634jnCfY6WAkA1+ARwXvrT7gGe6gKV4P4zGJcCsPpdgvtPBZdXc70Wq1WDb3d8S1aAM6MVIIT4n0F67+22nrJCKJ31LF8BMleDUvjvsQPgoWBkqAaS8AFQWC2iQpCGDwDhdiEShJrwASAEEOX8oDZ8AFQC8AyhJXwANALwBqE1fAB0AvAAoSd8ACgBmHWW0Bs+AAwAjMCgEfzxOjkIMkagBUIz9PNr+g8mF0B3A7oPWQAAAABJRU5ErkJggg==" width="25" height="25">
            <p style="margin-left: 3%; font-weight: bolder; font-size: 18px">КОНТАКТЫ ДЛЯ СВЯЗИ</p>
            <p style=" font-size: 18px">+7 (474) 656 05 00 <br> dankov@rosagroal.ru</p>
        </div>
        <div class="about-block">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHLAAAAAXNSR0IArs4c6QAABJhJREFUeF7tndF2m0AMROP//2j3OI2b1AGzsBppRjt5DWCkubq74J709tH4536/3yPKu91ut4jrMF6jVWFRgR8F1QkIeQCyQt+DQh0GWQCqg38FQhUEOQDYglcHQQYA9uBVQaAHQC14NRCoAVAP/wkD8/6AFoAu4bNDQAdAt+DZlwQqALqHz2gDGgBWCZ8NAgoAVgufCYJyAFYNnwWCUgBWD58BAgNw9NVfwu8r3xOUAeDp/5+ sKghKAHD421qpgCAdAIf/fk3JhsAAJKzxZz6iNQCe/jEUMiFIM4DDHws/+9FwKQBGJ4sB1tF7PYfV76NTAKhs6Gwjle99BI62AMwG/9q8ChCia9gCAg5AduPQTetWTysA0OE/JygTAnRNbQBAN6pqSUDXBQUga1LQTdrbTHWoTx6AqvAzlwNkjdIAIBsz8giVBQGyThgAGXpENoYJgMe9oGqVBQDVkDPB/zwWDTyqXgNwNfGX8wxAYkNQ0zDLAhICVM2SBkA1wwDMduDrfMVJCCr9Q612iAHUmhAV/uM6arUbgMj0DcDfbqpNQSQDarVLGYB185f1RRGifgMQOf7gTbABEPmLnahlwAAYgHBjh18QuQlETABgBYBtghH1GwAAAV4Cgv5K9+a/YiVfBlDho74SljIAqgmREjAAfhEU8n8UZNnPBogcf0H4IQAgnwSYlwE1/X/2MngA/l1OsRmzvVCsWRIARgsgw0fWawBmxx78/v95e4iXQLJLALopZ5lAT7+kAdAbQRYIlMOHGiALAOR0HJkgI3x0fbA9QCYA6CZtgZAVPro2KABdIegSPnwJyAYAPS0d64EboKJpCBAypz5zg9sWgKgmVgQfde 9Hm9iUJeB5E5WNvGIEtfsdCXvrmBQDVC0DV5vCcB7qzd9rbWkAGIJxrLLCT10CDIAB+OxA9do6HkPNkZnTn24AA3AMVXsADME+BNnhlxjAABgA7wU2GKiY/jID2AK/CVgOAEPwDUFV+KUGeJa/+mNhZfgG4PipDH7E8gCsvBRUh09hAAMAl8zbD0j9Mujdnay2F2CYfhoDrGgBA7Chg1UswBI+lQFWsoABeLMZ6G4BpvDpDND95RBb+AYg+QnMAJxoeLelgDF8WgN03BAagBPT320vwBo+tQE6WcAAXJj+LhZgDp/eAB0sYAAmpl/dAuzhSxhAFQKF8A1AgJ32LmEAAM1VeTmkEr6UAZQ2hAYAMP0qewGl8OUMoGABAwCcfnYLqIUvaQBmCxiAhOlntYBi+LIGYINANXwDEGQsAxDUyCuXqX45pBy+vAEYNoQG4MrYBp9TZQH18FsYoNICBiB4kmcul22BDuG3MUCFBQzAzLiCzs2yQJfwWxkg0wIGADTBEZdFW6BT+O0MgH5F3C18A3BSOQbgZMMqD49eCjqG39YAiA2hAagc54ufHWWBruG3NkCkBQzAxQlkOG3WAp3Db2+ACAsYAIYxnryHqxboHv4SBrj6cmiF8A3AG7MYgEntMp4+uhSsEv5SBjizITQAjOMbdE9HFlgp/OUMMGIBAxA0acyX2bPAauEvaYC9x8IVw3/04g+DhaSf6cOtvAAAAABJRU5ErkJggg==" width="25" height="25">
            <p style="margin-left: 3%; font-weight: bolder; font-size: 18px">НАШ АДРЕС</p>
            <p style=" font-size: 18px">Липецкая область, Данковский район, село Яхонтово</p>
        </div>
        <div class="about-block">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHLAAAAAXNSR0IArs4c6QAABLBJREFUeF7tnduS6yAMBE/+/6NzKsk6F19AAiSEZvY1tsuo24OMk/XtX7K/+/1+txzS7Xa7WR7f+9jLD8YaeA3I6kIsJ8Bs4NmEWEKA6NCvpFghHUILsCr4vRCRRQgpQBbwK4gQSoCs4COLEEIAFPARRZgqACr4SCJMEYDgz+8bZjSL7gIQfnklwVsCNwEIvraE9Pu5lwguAhC +Dv62tYcE5gIQfht8LwnMBCD4PvBedwomAhD+WPiWaTBcAMK3gW8lwVABCN8WvoUEwwQgfB/4oyUYIgDh+8IfKUG3AIQ/B/4oCboEIPy58EdI0CwA4ceA3ysBBYjFsflsWpeNmwTg1d/MyXTHFgnUAhC+KcPug2slUAlA+N18XA6gkQBagK1Q2cQ2ESBTka4KhDDGw1NGSSYhFQZprA/2oikAqShIYxUJgFaQR1GQxlxNAKRibNMh0piLAmQqxDPuhP/cAWncFOCkC6YAyeZB7QOTbAKU0u8yAZCKsA8BpLGfCpCxAMg9QCkBKQBAD6ASIOvVzwR4abC/EzokAAXItRB0WPvf3Qr/CJAZPhPgo8J3ClAAoB7grBegABTgVYHs8c8p4Nf0bRp4JwAF+BQIqRYUAHAK+E5DCkABMOZ/9gBH0x99wDMBEOY8CkABYL8QcjLLvZeFmQCgPcCWiDeU+OcUcJ4DFAA4AZ4XBRPgaABUTaAGC/qt4KsmkAlwURmoiwJqsEyAg/LsAdgE2r5qtTT/eH+G+ssg9gB/FaAAJ8vB7AF4G2j6tm3vmC/GHZtANoESIaFSEWqwTAAmABPgtwJcBwBfDaQAhUhAmB6hBNB8J2DzIrsEFEDQFGSWAE6AlhR47JNVAk gBKMEn9mAFoAQvCaAFoAQU4HUVCFcIv/vFLD0BfAJsUFElgPphSO2OD00CuN8G1gRAmw4owIURKElAAQqRgCDBW4DMK12S2L/aJrMEkP8jqEWGrBJQAIUNGSWgAAoBMt4dHARgH1A3IksSwP6r2Dri+hYZJKAAdc7FLVaX4FIATgNyM1aVAPp9AXK8si1XlKAqAFNABn/Fp4hnwkK9M0iHVr71KkkgFoApIIe/ShJcSQr13kA9Vt0e2iTw/FaRWgCmgA5+SxJ4CVASE+rdwW1I9XtJkyC8AEwBPXxNEngIUJOxmAAUoF2A2gMkD/i1c3h+Lhmi18lKzmXFbfZXoVc9a1c/BVjRJsU5DxOAU4Gi6kE2lcAXJ8A2Jq/oClLDZU9DCp8CLIu4fOJmAnAqiG+MBr46ATgVxBZAC79ZACZBPBFa4FOAeBybz8hdAKZAM6vhO7bC70oA9gPDOTYdsAf+EAGYBE3chuzUC3+YAJRgCE/VQUbAHyoAJVDx69p4FPzhAlCCLq6inUfCNxGAEog4Nm00Gr6ZAJSgiW9xJwv4pgLwNnGMBFbgt7MTfSOodyh8jNxWQWv4LgnAJIgL31UAiiATweOq/z4TlylgP3ROCecyeMOfkgDfQ6cIr2rMAO/aBNbCD1WEmeBDCYDWH0QAH1KA7CJEAh9agGwiRAS/hACrixAZ/FICrHTnsAL06esAtbsCzeez7yBWA76v7ZSFIA3glm2tpFgd9lkt/wO/kBxObkZ/8AAAAABJRU5ErkJggg==" width="25" height="25">
            <p style="margin-left: 3%; font-weight: bolder; font-size: 18px">ГРАФИК РАБОТЫ</p>
            <p style=" font-size: 18px">Пн - Пт: 6:00 - 18:00 (Мск)<br>Сб - Вс : Выходной</p>
        </div>
    </div>
    <div class="about-container-text">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Afef1b3d15df300189458e7744ac9833b66faad6d8173b1e1b7dc626624d833ae&amp;source=constructor" width="100%" height="500" frameborder="0" style="box-shadow: 0 0 2px rgba(0,0,0,0.5); margin-top: 50px; transition: .5s all ease" id="map"></iframe>
    </div>
</div>


@include('blocks/footer')

</body>
</html>
