<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

<div class="parallax-container slider"><!-- Slide prioncipal -->
     <ul class="slides">
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cursos/<?php global $post; echo $post->post_name; ?>.png"> <!-- random image -->
        <div class="caption center-align"></div>
      </li>
      
      </li>
    </ul>
</div><!-- FIM Slide prioncipal -->

 <div class="row">
        <div class="col l9" style="min-height:500px;">
          
              <?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				endwhile;
			?>
               
               
			

        </div>
        <div class="col l3" style="margin-top:-21px;">
            <div id="asid">
              
     
<?php     get_sidebar(); ?>
            
               
  
    </div>
     </div>
	 </div>

<?php
 //
get_footer();

	