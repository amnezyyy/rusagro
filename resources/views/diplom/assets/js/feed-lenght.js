$(document).ready ( function(){
    let feed = document.getElementsByClassName('feed');
    let i;
    for (i = 4; i < feed.length; i++) {
        feed[i].style.display = "none";
    }
});

