<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

<h2>Shop Stuff</h2>
<?php
   $terms = get_terms( array(
       'taxonomy' => 'product-type',
       'hide_empty' => 0,
   ) );
   if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
?>
   <div class="product-type-blocks">

      <?php foreach ( $terms as $term ) : ?>

         <div class="product-type-block-wrapper">
            <p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?></a></p>
         </div>

      <?php endforeach; ?>
   </div>
<?php endif; ?>

<ul class="products-archive-list">
	<?php
		$args = array( 'post_type'=>'product','posts_per_page'=>16);
		$posts = get_posts( $args ); // returns an array of posts
	?>
	<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
		<li>
			<div class="products-archive-image-wrapper">
			<a href="<?php echo the_permalink()?>"><?php the_post_thumbnail('medium');?></a>
			</div>
			<div class="products-archive-text-wrapper">
				<span><?php the_title();?></span><span class="dots">
				<?php echo CFS()->get('price');?></span>
			</div>
		</li>
	<?php endforeach; wp_reset_postdata(); ?>
</ul>

</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_sidebar(); ?>
	<?php get_footer(); ?>
