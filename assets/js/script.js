function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("services-products-slideshow-slides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
  }
  var slideIndex = 2;
  showSlides(slideIndex);
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function display_menu() {
    var x = document.getElementById("mobile-menu");
    if (x.style.display === "block") {
      x.style.display="none";
    } else {
    x.style.display = "block";
    }
  }
