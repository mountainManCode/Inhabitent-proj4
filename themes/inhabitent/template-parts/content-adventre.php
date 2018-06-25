
<header class="entry-header">

  <img src="<?php echo CFS()->get('feature_image');?>">
	
</header>


<div class="entry-content">
  <h1><?php the_title();?></h1>
  <p><?php inhabitent_posted_by(); ?></p>
  <p><?php the_content(); ?></p>

  <div class="single-post-social-media">
    <span><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>like</a></span>
    <span><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>tweet</a></span>
    <span><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i>pin</a></span>
	</div>

</div>