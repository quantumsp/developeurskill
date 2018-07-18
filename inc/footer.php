<section class="os-animation" data-os-animation="zoomInDown" data-os-animation-delay=".3s">
<footer>
  <div id="footer-inner">
  <section class="one-third" id="footer-third">
    <h3>Contact</h3>
    <p class="footercontact">The Gym<br>
      <b class="phone">555-525-5005</b><br><br>
      500 Washington Road<br>
      Seattle, WA 98101<br>
    </p>
  </section>
  <section class="one-third" id="footer-third">
    <h3>Social</h3>
    <br>
    <ul class="social">
      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
      <li><a href="#"><i class="fa fa-youtube"></i></a></li>
    </ul>
  </section>
  <section class="one-third" id="footer-third-last">
    <h3>Pages</h3>
    <br>
    <h5>
      <a href="#">home</a> -
      <a href="#">facility</a> -
      <a href="#">pricing</a> -
      <a href="#">contact</a>
    </h5>
  </section>
  </div>
</footer>
<footer class="second">
   <p>&copy; The Gym, 2018. </p>
</footer>
</section>
</section>
<br>
<!-- <footer class="site-footer">
  <center><h3>&copy; 2017-2018 Powered by <a href="@minosh_2017">iBeaity iDées</a>
  </h3></center>
</footer> -->
<script src="js/jquery.bxslider.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $( document ).ready(function() {
      $("#basket").hover(function() {
        if($('.basket').is(':hidden')) {
          $(".basket").stop(true, true).fadeIn('slow');
        } else {
          $(".basket").stop(true, true).fadeOut('slow');
        }
      });
    });

    $('.slider1').bxSlider({
      mode: 'fade',
      captions: false,
      auto:true,
      pager:false,
      controls:false,
    });
    $('.slider2').bxSlider({
      pager:false,
      captions: true,
      maxSlides: 3,
      minSlides: 1,
      slideWidth: 230,
      slideMargin: 10
    });
    $('.slider3').bxSlider({
      mode: 'fade',
      captions: false,
      auto:true,
      pager:false,
      controls:false,
    });
</script>

  </body>
</html>
