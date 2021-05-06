var popup1 = document.getElementById("myPopup1");

var btnOpenFirstPopup = document.getElementById("myBtn1");

var closePopup1 = document.getElementsByClassName("close__popup1")[0];

btnOpenFirstPopup.onclick = function() {
    popup1.style.display = "block";
    document.getElementsByTagName("body")[0].style.overflow = 'hidden';
}

closePopup1.onclick = function() {
    popup1.style.display = "none";
    document.getElementsByTagName("body")[0].style.overflow = 'scroll';
}
window.onclick = function(event) {
    if (event.target == popup1) {
        popup1.style.display = "none";
        document.getElementsByTagName("body")[0].style.overflow = 'scroll';
    }
}