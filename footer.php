<footer role="contentinfo" class="row clearfix">
  <div id="inner-footer" class="col-sm-9 col-xs-8 clearfix">
    <hr />
    <nav class="clearfix hidden-xs" id="footer-nav">
          <?php winter_footer_links(); ?>
    </nav>
    <nav class="clearfix visible-xs" id="footer-nav">
          <?php winter_utility_links(); // Adjust using Menus in Wordpress Admin ?>
    </nav>
    <p class="attribution">For more information: <a href="mailto:winter@syr.edu?subject=Questions about the upcoming Winterlude classes at Syracuse University">winter@syr.edu</a></p>
    <p>&copy; <?php echo date('Y'); ?> University College at Syracuse University • 700 University Ave • Syracuse, NY 13244 • 315-443-9378</p>
  </div>
  <!-- end #inner-footer -->
  <div class="col-sm-2 col-sm-offset-1 col-xs-4" id="su-seal"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/library/images/su-seal.png" alt="Syracuse University" /></div>
</footer>
<!-- end footer -->

</div>
<!-- end #container -->
</div>
<!-- end #drifts --> 
<? if(is_front_page()){ ?>
	<!-- Modal -->
        <?
        $query = new WP_Query( 
			$args = array(
			'posts_per_page' => '-1',
			'post_type' => 'course',
			'order' => 'ASC',
    	) );
		$query = new WP_Query($args);
		while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="modal fade" id="myModal-<? the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><? the_title(); ?></h4>
              </div>
              <div class="modal-body"><? get_template_part( 'content', 'grid' ); ?></div>
              <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
        </div>
        <!-- /.modal --> 
      
      <!-- end article footer --> 
      <?
	  endwhile;
      wp_reset_postdata();
      ?>
<? } ?>    

<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->

<?php wp_footer(); // js scripts are inserted using this function ?>
</body></html>