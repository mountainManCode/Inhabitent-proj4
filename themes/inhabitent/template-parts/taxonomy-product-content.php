<?php
/**
 * Template part for displaying posts.
 *
 * @package Inhabitent_Theme
 */

?>

<section class="products-archive-list">
<?php
  $args = array( 'post_type'=>'product','posts_per_page'=>16);
  $posts = get_posts( $args ); // returns an array of posts
?>
<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
  <div class="product-wrapper">
    <div class="products-archive-image-wrapper">
    <a href="<?php echo the_permalink()?>"><?php the_post_thumbnail('large');?></a>
    </div>
    <div class="products-archive-text-wrapper">
      <h3 class="entry-title">
        <?php the_title();?>
      </h3>
      <span class="price">
        <?php echo CFS()->get('price');?>
      </span>
    </div>
  </div>
<?php endforeach; wp_reset_postdata(); ?>
</section>