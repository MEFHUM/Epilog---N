<?php
/* The Template for displaying all single posts. */

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

						 <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h1 class="entry-title"><?php the_title(); ?></h1>
					
						
						<?php the_content(); ?>
                

				
<?php endwhile; // end of the loop. ?>
</div>
<?php get_footer(); ?>