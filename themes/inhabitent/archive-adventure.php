<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

	<ul class="adventures-archive-list">
		<?php
			$args = array( 'post_type'=>'adventure','posts_per_page'=>8);
			$posts = get_posts( $args ); // returns an array of posts
		?>
		<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
				<li class="adventures-archive-wrapper">
					<h3 class="adventures-archive__entry-title">
						<?php the_title();?>
					</h3>
					<p class="adventures-archive__content">
						<?php the_content();?>
					</p>
				</li>
		<?php endforeach; wp_reset_postdata(); ?>
	</ul>

</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_footer(); ?>