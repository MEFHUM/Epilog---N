<?php

/* Template Name: Archvies
/* Template to display archives. */

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div class="post">
	
		<h1 class="entry-title"><?php the_title(); ?></h1>
		
		<?php the_content(); ?>
		
		<h2>Tarihe Göre:</h2>
		
		<?php arl_kottke_archives(); ?>
		
		<h2>Konuya Göre:</h2>
		
		<ul class="taxonomy"><?php wp_list_categories('title_li=');?></ul>
		
		<h2>Bir de arama kutusunu deneyin...</h2>
		
		<?php get_search_form(); ?>
		
	</div><!--.post-->

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>