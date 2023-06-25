function openPage(pageName,elmnt, color) {
    var i, page, navlink;
    page = document.getElementsByClassName("page");
    for (i = 0; i < page.length; i++) {
        page[i].style.display = "none";
        page[i].style.animation = "fade-in 1s"
    }

    navlink = document.getElementsByClassName("navlink");
    for (i = 0; i < navlink.length; i++) {
        navlink[i].style.backgroundColor = "white";
        navlink[i].style.borderRadius = "10px";
        navlink[i].style.color = "black";
    }

    document.getElementById(pageName).style.display = "block";

    elmnt.style.backgroundColor = color;
    elmnt.style.color = "white";
    elmnt.style.textDecoration = "none";
}

document.getElementById("defaultOpen").click();