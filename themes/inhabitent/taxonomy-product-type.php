<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

	<?php if ( have_posts() ) : ?>

		<header class="page-header">
				<h1 class="page-title">
					<?php single_term_title(); ?>
				</h1>
				<?php the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
		</header><!-- .page-header -->

		<?php /* Start the Loop */ ?>
		<section class="products-archive-list">
		<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/taxonomy-product-content' );
				?>

		<?php endwhile; ?>
			</section>
		<?php the_posts_navigation(); ?>

	<?php else : ?>

		<?php get_template_part( 'template-parts/taxonomy-product-content', 'none' ); ?>

	<?php endif; ?>

	</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_footer(); ?>