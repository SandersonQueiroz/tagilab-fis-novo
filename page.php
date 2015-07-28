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
 <div class="col l12">
        <div class="col l9 margem" style="min-height:500px;">
          
              <?php
			  $titulo =get_the_title();
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );
 
					 
				endwhile;
			?>
               
               
			

        </div>
        <div class="col l3" style="margin-top:-21px;">
            <div id="asid">
              <?php 
			   //local para widigets 
			   if ( dynamic_sidebar('search') ) : else : endif;
			   //verifica se existe postagem
        $recent = new WP_Query("category_name=".$titulo."&showposts=5");  
              if (empty($recent->have_posts())){}
              else{
              ?>
              
     <div class="card">
        <div class="card-content blue darken-1">
         <span class="card-title white-text text-darken-4" style=" margin-left: 40px;">
         <i class="fis-fis-unicolor" style="font-size: 50px;position: absolute;margin-top: -5px;left: 0;"> </i>Últimas Notícias</span>
        </div>  
     <ul class="collection"> 
        
       <?php 
         
        while($recent->have_posts()) : $recent->the_post();
        ?> 
            <li class="collection-item avatar selected" style="height: auto;">
            <?php the_post_thumbnail('thumbnail', array('class' => 'circle')); ?>
            <span class="email-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></span>
        <p class="truncate grey-text ultra-small">   <a href="<?php the_permalink(); ?>"> <?php echo get_the_date(); ?></a></p>
          
                  </li>  
             <?php endwhile; ?>
            </ul>


      </div>
<?php }; 
   if ( dynamic_sidebar('sidebar_pages') ) : else : endif;  
?>
            
               
  
    </div>
   </div>
 </div>
 </div>

<?php
 //
get_footer();

	