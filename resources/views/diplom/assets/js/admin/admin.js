function openPage(pageName, elmnt, color) {
    let i, page, navlink;
    page = document.getElementsByClassName("page");
    for (i = 0; i < page.length; i++) {
        page[i].style.display = "none";
    }

    navlink = document.getElementsByClassName("navlink");
    for (i = 0; i < navlink.length; i++) {
        navlink[i].style.backgroundColor = "white";
        navlink[i].style.color = "black";
    }

    document.getElementById(pageName).style.display = "flex";

    elmnt.style.backgroundColor = color;
    elmnt.style.color = "white";
    elmnt.style.textDecoration = "none";
}

document.getElementById("defaultOpen").click();