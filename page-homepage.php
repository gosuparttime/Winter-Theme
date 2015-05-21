<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>
<div id="content" class="clearfix row">
  <div id="main" class="col-sm-9 col-xs-12 clearfix" role="main">
    <?php while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
      <header><hgroup>
        <h1>
          <?php the_title(); ?>
        </h1>
        <?php if (function_exists('the_subheading')) { the_subheading('<h3>', '</h3>'); } ?>
        </hgroup>
      </header>
      <section class="row-fluid post_content lead">
        <?php the_content(); ?>
      </section>
      <!-- end article header --> 
    </article>
    <!-- end article -->
    <?php endwhile; ?>
  </div>
  <!-- end #main -->
  <? $sidebar = get_field('show_sidebar');
  	if ($sidebar){
		get_sidebar('sidebar2'); 
	}// sidebar 1 ?>
</div>
<!-- end #content -->
<?php get_footer(); ?>
