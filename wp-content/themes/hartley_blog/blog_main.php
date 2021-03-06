<?php

if($_GET['cat_id'] == '')
{
	$tax_array = array();
}
else
{
	$tax_array = array(
			array(
					'taxonomy' => 'category',
					'field' => 'id',
					'terms' => $_GET['cat_id'], // Where term_id of Term 1 is "1".
					'include_children' => false
			)
	);
}
$args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'posts_per_page' => 10,
	'order'    => 'DESC',
	'tax_query' => $tax_array
);

$blog_posts = query_posts($args);
?>

<div id="grid-gallery" class="blogWrapper grid-gallery">
	<div class="container grid-wrap">
    <ul class="row grid">
		<?php
			if(count($blog_posts) > 0)
			{
				foreach($blog_posts as $blog)
				{
		?>
					<li class="grid-sizer"></li><!-- for Masonry column width -->
						<li class="col-md-4 col-sm-6 postWrap">
							<div class="postList">
						<div class="topArea">
							<?php echo get_the_post_thumbnail($blog->ID, 'blog-thumb'); ?>
						</div>
						<div class="btmArea">
							<div class="blogCategory">
								<?php
									$terms = get_the_terms( $blog->ID, 'category' );
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
							<span class="category"><a href="#"><?php echo $term_list; ?></a></span>
							</div>
						  <a href="<?php echo get_the_permalink($blog->ID); ?>" class="blogTitle"><?php echo $blog->post_title; ?></a>
						  <p class="postDate"><?php echo date('F d, Y', strtotime($blog->post_date)); ?></p>
						  <p class="blogEntry">
							<?php
								$content = $blog->post_content;
								$content = wp_trim_words( $content, 50, "");
								echo $content;
							?>
						  </p>
							<a class="text-link" href="<?php echo get_the_permalink($blog->ID); ?>">Read the Rest<i class="icon ti ti-arrow-right arrow_right"></i></a>
						  <div class="blogMeta clearfix">
								<span class="author">
									<?php
										$auther_id = $blog->post_author;
										$user = get_userdata($auther_id);
									?>
									By&nbsp;<a href="" title="Author" rel="author"><?php echo $user->display_name ; ?></a>
								</span>
						  </div>
						</div>
					  </div>
				  </li>
			<?php } ?>
		<?php } else { ?>
		<li>Blog posts are not available at the moment!!!</li>
		<?php } ?>
	</ul>
  </div>
</div>
