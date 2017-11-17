<?php
/**
 * The front-page file.
 *TempLate Name: Front Page
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="custom-hero-banner">
				<img src="<?php echo get_template_directory_uri() . '/images/inhabitent-logo-full.svg' ?>" class="logo" alt="Inhabitent logo" />
			</section>

			<section class="front-page-wrapper">
		
				<?php if ( have_posts() ) : ?>

				<?php if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
				<?php endif; ?>

				<?php /* Start the Loop */ ?>

				<?php while ( have_posts() ) : the_post(); ?>
				
					<?php get_template_part( 'template-parts/content' ); ?>

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

				<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?> 

				<section class="product-info container">
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
                        <img src="<?php echo get_template_directory_uri() . '/images/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>" />
                        <p><?php echo $term->description; ?></p>
                        <p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?> Stuff</a></p>
                     </div>

                  <?php endforeach; ?>
               </div>
            <?php endif; ?>
        </section>

				<article class="front-page-journal">
					<h2>Inhabitent Journal</h2>
					<div class="front-page-journal-wrapper">
					<?php
					global $post;
						$args = array( 'posts_per_page' => 3, 'orderby' => 'date', 'order'=> 'DEC'  );
						$postslist = get_posts( $args );
					foreach ( $postslist as $post ) :
						setup_postdata( $post ); ?> 
						
						<section class="front-page-journal-entry">
							<div class="front-page-journal-image">
								<?php echo get_the_post_thumbnail( $page->ID, 'large' ); ?>
							</div>
							<section class="front-page-journal-entry-text">
								<div>
									<?php the_date(); ?> /
									<?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
								</div>
								<div>
									<a href="<?php the_permalink(); ?>">
										<h3 class="journal-header"><?php the_title(); ?></h3>
									</a>
								</div>
									<a href="<?php the_permalink(); ?>">
										<button class="front-page-journal-button" >Read Entry</button>
									</a>
							</section>
						</section>

					<?php
					endforeach; 
					wp_reset_postdata();
					?>
					</div>
				</article>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
