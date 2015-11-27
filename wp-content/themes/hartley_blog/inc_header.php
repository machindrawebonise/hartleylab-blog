<div class="nav-container">
	<nav class="nav-1">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<a href="index.php" class="home-link">
						<img alt="Logo" class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-square-light.png">
					</a>
					<ul class="menu">
						<?php
						$menuParameters = array(
								'container'       => false,
								'echo'            => false,
								'items_wrap'      => '%3$s',
								'depth'           => 0,
								'theme_location' => 'main-menu',
						);

						echo wp_nav_menu( $menuParameters );
						?>
					</ul>
				</div>
			</div><!--end of row-->
		</div><!--end of container-->

			<div class="mobile-toggle">
				<div class="bar-1"></div>
				<div class="bar-2"></div>
			</div>
		</nav>
	</div>
