<?php
// Template Name: Modal Example
get_header(); ?>

<div id="content" class="clearfix row">
  <div id="main" class="col-sm-8 clearfix" role="main">
    <?php while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
      <header>
        <h1 class="page-title" itemprop="headline">
          <?php the_title(); ?>
        </h1>
      </header>
      <!-- end article header -->
      
      <section class="post_content clearfix" itemprop="articleBody">
        <?php the_content(); ?>
        <?php 
			$query = new WP_Query( 
	$args = array(
		'posts_per_page' => '-1',
		'post_type' => 'course',
		'order' => 'ASC',
    ) );
	
	$query = new WP_Query($args);
	
	echo '<ul class="deadlines icons-ul">';
	
	
    while ( $query->have_posts() ) : $query->the_post();
		echo '<li><i class="icon-li icon-circle"></i>';
		echo '<a href="#myModal-';
		echo the_ID();
		echo '" data-toggle="modal">';
		echo get_the_title();
		echo '</a></li>';
	endwhile;      wp_reset_postdata();

	echo '</ul>';
		?>
      </section>
      <!-- end article section -->
      
     
    </article>
    <!-- end article -->
    
    <?php endwhile; ?>
  </div>
  <!-- end #main -->
  
  <?php get_sidebar(); // sidebar 1 ?>
</div>
<!-- end #content -->

<?php get_footer(); ?>
