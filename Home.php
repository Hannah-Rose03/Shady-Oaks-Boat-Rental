<?php
require 'head.php';
?>
<body>
  <div class="homediv">
    <h2>
      Join the fun on the Lake of the Arbuckles in one of our<br>
      PONTOON BOATS, KAYAKS, CANOES, or STAND-UP PADDLEBOARDS<br>
    </h2>
    <p>
      <b>Located in Sulphur, Oklahoma<br>
      For Reservations please fill out a <a href="Reservations.php" target="_blank"><font color="black">Reservation Form!</font></a><br>
      For Questions call: &nbsp;580-622-6102<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; cell:&nbsp; 405-207-3030<br></b>
    </p>
      <div class="slideshowdiv">
        <div class="mySlides fade">
          <img src="Images/pontoon3.jpg">
        </div>
        <div class="mySlides fade">
          <img src="Images/pontoon.jpg">
        </div>
        <div class="mySlides fade">
          <img src="Images/pic5.jpg">
        </div>
        <div class="mySlides fade">
          <img src="Images/Image1.jpg">
        </div>
        <div class="mySlides fade">
          <img src="Images/Image2.jpg">
        </div>
        <div class="mySlides fade">
          <img src="Images/Image6.jpg">
        </div>
      </div>
      <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>

      <script>
      var slideIndex = 0;
      showSlides();

      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
      }
      </script>
  </div>
</body>
