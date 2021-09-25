
// Nav Script
function myFunction() {
    var x = document.getElementById("myTopnav");
    var body = document.getElementsByTagName("body")[0];
    var overlay = document.getElementById("overlay");
    x.classList.toggle("responsive")
    body.classList.toggle("overflow-hidden")
    overlay.classList.toggle("isVisible")
}


// Stick Header
window.onscroll = function() {stickheader()};

var header = document.getElementById("myTopnav");

var sticky = header.offsetTop;

function stickheader() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

