<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

	<div id="content" class="narrowcolumn" role="main">
<?php get_search_form(); ?>
	<?php query_posts($query_string . '&orderby=title&order=ASC'); ?>
	<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$posts_per_page = 300;
	$args = array(
		'posts_per_page' => $posts_per_page,
		's' => $s,
		'paged' => $paged
	);
	query_posts( $args );

	if (have_posts()) :
	$page_count = $paged * $posts_per_page;
	?>
		<h2 class="pagetitle">yazara ait tüm yazılar / arama sonuçları</h2>




		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?>>
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Bağlantı <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			</div>

		<?php endwhile; ?>


	<?php else : ?>

		<h2 class="center">belki bu sayfada değilsin. ne çıkar? seni arıyorum ya…</h2>
		<p class="center"> aradığınız ne yazık ki çok uzaklara gitmiş veya buralara hiç uğramamış. başkasını aramanızı elbette istemeyiz. ama başka bir yerde aramanızı tavsiye edebiliriz. </p>

	<?php endif; ?>

	</div>

<?php get_footer(); ?>
