<?php
/*
 * Template Name: Blog Page Template
 * Description: A Hartleylab Blog Listing Page Template.
 */
?>

<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta property="og:title" content="Hartley is a family of digital thinkers &amp; makers!" />
      <meta property="og:image" content="http://www.hartleylab.com/team/team2.jpg" />
      <meta property="og:description" content="Hartley Lab is a professionally managed Agile Product Development Company servicing clients all over the world. Hartley Lab was formed by people with over 12 years’ experience in Product development and project management with a clear goal to Make IT Simple" />
      <title>Hartley Lab - Make I.T. Simple</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">

      <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,300,700,400italic,500%7CMontserrat:400,700" rel="stylesheet" type="text/css">

      <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css" media="all"/>

      <script src="<?php echo get_template_directory_uri(); ?>/grid/js/modernizr.custom.js"></script>
   <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63388754-2', 'auto');
  ga('send', 'pageview');

</script>
</head>
   <body>

    <?php require_once('inc_header.php'); ?>


    <div class="main-container">
      <section class="hero-slider large-image short-header">
         <ul class="slides">
            <li>
               <div class="background-image-holder background-parallax">
                  <img alt="Slide Background" class="background-image" src="<?php echo get_template_directory_uri(); ?>/team/team.jpg">
               </div>
               <div class="container vertical-align">
                  <div class="row">
                     <div class="col-sm-12 text-center">
                        <h2 class="text-white">
                        	Hartley is a family of digital thinkers &amp; makers!
                        </h2>
                        <h1 class="text-white">Meet our team of Hartlers</h1>
                     </div>
                  </div>
               </div>
               <!--end of container-->
            </li>
         </ul>
      </section>

      <?php require_once('blog_header.php'); ?>
     	<?php require_once('blog_main.php'); ?>

      <footer class="footer-6">
	      <div class="container">
		      <div class="row">
			      <div class="col-sm-12">
				      <div class="footer-lower">
				      	<span>&copy; Copyright <?php echo date('Y'); ?> Hartley Lab, All Rights Reserved.</span>
				      </div>
			      </div>
		      </div><!--end of row-->
	      </div><!--end of container-->
      </footer>
    </div>

		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>

        <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>

        <script src="<?php echo get_template_directory_uri(); ?>/js/skrollr.min.js"></script>

        <script src="<?php echo get_template_directory_uri(); ?>/js/flexslider.min.js"></script>

        <script src="<?php echo get_template_directory_uri(); ?>/js/lightbox.min.js"></script>

        <script src="<?php echo get_template_directory_uri(); ?>/js/twitterfetcher.min.js"></script>

        <script src="<?php echo get_template_directory_uri(); ?>/js/spectragram.min.js"></script>

        <script src="<?php echo get_template_directory_uri(); ?>/js/smooth-scroll.min.js"></script>

        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.plugin.min.js"></script>

        <script src="<?php echo get_template_directory_uri(); ?>/js/countdown.min.js"></script>

        <script src="<?php echo get_template_directory_uri(); ?>/js/placeholders.min.js"></script>

    	<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
    	<script src="<?php echo get_template_directory_uri(); ?>/grid/js/imagesloaded.pkgd.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/grid/js/masonry.pkgd.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/grid/js/classie.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/grid/js/cbpGridGallery.js"></script>
		<script>
			new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
		</script>
   </body>
</html>
