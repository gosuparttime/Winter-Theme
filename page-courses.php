<?php 
// Template Name: Course Listings
//
get_header(); ?>
<div id="content" class="clearfix row">
  <div id="main" class="col-sm-8 clearfix" role="main">
    <?php while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
     <header>
      	<hgroup>
          <h1 class="page-title" itemprop="headline">
            <?php the_title(); ?>
          </h1>
          <?php if (function_exists('the_subheading')) { the_subheading('<h3>', '</h3>'); } ?>
      	</hgroup>
      </header>
      <!-- end article header -->
      
      <section class="post_content clearfix" itemprop="articleBody">
        <?php the_content(); ?>
      </section>
      <!-- end article section -->
      
      <footer>
        <?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","winterlude-theme") . ':</span> ', ', ', '</p>'); ?>
      </footer>
      <!-- end article footer --> 
      
    </article>
    <!-- end article -->
    
    <?php endwhile; ?>
    <article id="faq-section">
        <?php 
			$c = 1; //init counter
						$d = 0;

    $query = new WP_Query( 
	$args = array(
		'posts_per_page' => '-1',
		'post_type' => 'course',
		'order' => 'ASC',
    ) );
	
	$query = new WP_Query($args);
	
	echo '<div class="panel-group" id="accordion'.$c.'">';
	
	
    while ( $query->have_posts() ) : $query->the_post();
		$d++; //init counter
		echo '<div class="panel panel-default">';
		echo '<div class="panel-heading">';
		echo '<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion'.$c.'" href="#collapse'.$d.'"><h4 class="panel-title">';
      	echo '<i class="icon-plus pull-right"></i>';
		the_title();
		echo '</h4></a></div>';
		echo '<div id="collapse'.$d.'" class="panel-collapse collapse">';
      	echo '<div class="panel-body">';
		get_template_part( 'content', 'grid' );
		echo '</div></div></div>';
	endwhile;
	echo '</div>';
	$c++;
	wp_reset_postdata();
    
	
	?>
      </article>
  </div>
  <!-- end #main -->
  
  <?php get_sidebar(); // sidebar 1 ?>
</div>
<!-- end #content -->

<?php get_footer(); ?>
