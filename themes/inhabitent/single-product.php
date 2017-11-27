<?php
/**
 * Template part for displaying single posts.
 *
 * @package Inhabitent_Theme
 */

 get_header(); ?>

<?php if(have_posts()): ?>

<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
	</header><!-- .entry-header -->
	
	<section class="product-info-wrapper">
		<div class="product-title">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
		<div class="product-price">
			<?php echo CFS()->get('price');?>
		</div>

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
		<div class="social-buttons">
			<button type="button" class="blk-border-button">
				<a href="www.facebook.com"><i class="fa fa-facebook"></i>Like</a>
			</button>	
			<button type="button" class="blk-border-button">
				<a href="www.twitter.com"><i class="fa fa-twitter"></i>Tweet</a>
			</button>	
			<button type="button" class="blk-border-button">
				<a href="www.pinterest.com"><i class="fa fa-pinterest"></i>Pin</a>
			</button>	
		</div>
	</section>
</article><!-- #post-## -->

<?php endwhile; ?>
				<?php endif; ?>

<footer class="entry-footer">
	<?php get_footer(); ?>
</footer><!-- .entry-footer -->
