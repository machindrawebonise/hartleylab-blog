<?php
    global $post;
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
      <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon-32x32.png">

      <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,300,700,400italic,500%7CMontserrat:400,700" rel="stylesheet" type="text/css">

       <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css" media="all"/>
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

    <?php
    $auther_id = $post->post_author;
    $user = get_userdata($auther_id);
    ?>

    <div class="main-container">
      <section class="hero-slider large-image short-header">
         <ul class="slides">
            <li>
               <div class="background-image-holder background-parallax">
                  <?php $thumb = get_the_post_thumbnail($post->ID, '' , array('class' => "background-image")); ?>
                    <?php if(strpos($thumb, 'iframe') === false) { echo $thumb; }?>

               </div>
               <div class="blgDetlImg">
                   <div class="hero-mask"></div>
               </div>
                <?php
                $terms = get_the_terms( $post->ID, 'category' );
                $i = 0;
                if(count($terms > 0))
                {
                    foreach($terms as $term) {
                        if($i == (count($terms) - 1) )
                        {
                            $term_list = $term->name;
                        }
                        else
                        {
                            $term_list = $term->name . ", ";
                        }
                    }
                }
                ?>
                <div class="container vertical-align">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="singleBlogDtls"><span><a href="#"><?php echo $term_list; ?></a></span><span class="text-white">&nbsp;|&nbsp;</span><span class="text-white postDate"><?php echo date('F d, Y', strtotime($post->post_date)); ?></span></div>
                            <h1 class="text-white"><?php the_title(); ?></h1>

                            <p class="textBy">By</p>
                            <div class="authorImg">
                                <?php echo get_avatar($user->ID, 40); ?>
                            </div>
                            <p class="text-white author">
                                <a href="" title="Author" class="text-white"><?php echo $user->display_name ; ?></a>
                            </p>

                        </div>
                    </div>
                </div>
               <!--end of container-->
            </li>
         </ul>
      </section>
        <?php if(strpos($thumb, 'iframe') !== false) { ?>
        <section class="blogVideoWrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="article-single">
                            <?php echo $thumb; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php } ?>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="article-single">
                            <?php
                            $content = apply_filters('the_content', $post->post_content);
                            //$content = wp_trim_words( $content, 50, "... <a href='". get_the_permalink($blog->ID) ."'>Read More</a>" );
                            echo $content;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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

    <script src="<?php echo get_template_directory_uri(); ?>/js/spectragram.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/smooth-scroll.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
   </body>
</html>
