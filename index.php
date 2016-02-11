<?php include 'header.php'; ?>
<!-- Header Area -->
<div id="top" class="header">
  <div class="vert-text">
    <img class="img-rounded" alt="Company Logo" src="./img/renato-soares-logo.svg"/>
    <h2><em>Renato Soares</em> <small>_> Programador</small></h2>
    <hr>
    <h4></h4>
    <br>
    <ul class="list-inline">
      <li><a href="http://github.com/renatosoares"><i class="fa fa-github fa-3x">&nbsp;</i></a></li>
      <li><a href="http://br.linkedin.com/in/renatosoarespro"><i class="fa fa-linkedin fa-3x">&nbsp;</i></a></li>
      <li><a href="http://twitter.com/renatosoarespro"><i class="fa fa-twitter fa-3x">&nbsp;</i></a></li>
      <li><a href="http://plus.google.com/+RenatoSoarespro"><i class="fa fa-google-plus fa-3x">&nbsp;</i></a></li>
      <li><a href="http://www.pinterest.com/renatosoarespro/"><i class="fa fa-pinterest fa-3x">&nbsp;</i></a></li>
    </ul>
    <a href="data-sheet.php" class="btn btn-default btn-lg portfolioButton"><small>PORTFÓLIO</small></a>
  </div>
</div>


<?php include 'footer.php'; ?>
<!-- Slideshow Background  -->
	<script>
		$.vegas('slideshow', {
			delay:5000,
			backgrounds:[
			{ src:'./img/arduino.jpg', fade:2000 },
			{ src:'./img/banner02.jpg', fade:2000 },
			{ src:'./img/maos_pro.png', fade:2000 }


			]
		})('overlay', {
			src:'./img/overlay.png'
		});

	</script>
<!-- /Slideshow Background -->

<!-- Mixitup : Grid -->
    <script>
		$(function(){
    $('#Grid').mixitup();
      });
    </script>
<!-- /Mixitup : Grid -->

    <!-- Custom JavaScript for Smooth Scrolling - Put in a custom JavaScript file to clean this up -->
    <script>
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
            || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
    </script>
<!-- Navbar -->
<script type="text/javascript">
$(document).ready(function() {
        $('#nav').scrollToFixed();
  });
    </script>
<!-- /Navbar-->
