<?php
/**
 * Template part for displaying single posts.
 *
 * @package Inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="entry-header">
	<?php if ( has_post_thumbnail() ) : ?>
		<?php the_post_thumbnail( 'large' ); ?>
	<?php endif; ?>

	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	<div class="entry-meta">
		<?php inhabitent_posted_on(); ?> / <?php inhabitent_comment_count(); ?> / <?php inhabitent_posted_by(); ?>
	</div><!-- .entry-meta -->
</header><!-- .entry-header -->

<div class="entry-content">
	<?php the_content(); ?>
	<!-- <?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
			'after'  => '</div>',
		) );
	?> -->
</div><!-- .entry-content -->

<footer class="entry-footer">
	<div class="footer-cat-tags">
		<?php inhabitent_entry_footer(); ?>
	</div>
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
</footer><!-- .entry-footer -->
</article><!-- #post-## -->