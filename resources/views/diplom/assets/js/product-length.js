$(document).ready ( function(){
    let also_product= document.getElementsByClassName('also-product');
    let i;
    for (i = 5; i < also_product.length; i++) {
        also_product[i].style.display = "none";
    }
});

