<?php
/**
 * The template for displaying Category Archive pages.
 */

get_header(); ?>

				<h1 class="page-title"><?php
					printf( __( 'Yazarın Tüm Yazıları: %s', 'twentyten' ), '' . single_cat_title( '', false ) . '' );
				?></h1>
				
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '' . $category_description . '';

				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				get_template_part( 'loop', 'category' );
				?>
				

<?php get_footer(); ?>