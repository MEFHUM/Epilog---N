<?php
/**
 * The template for displaying 404 pages (Not Found).
 */

get_header(); ?>



				<h1 class="page-title"><?php _e( 'Belki bu sayfada değilsin. Ne çıkar? Seni arıyorum ya...', 'twentyten' ); ?></h1>
				<p><?php _e( 'Aradığınız ne yazık ki henüz burada değil. Başkasını aramanızı elbette istemeyiz. Ama başka bir yerde aramanızı tavsiye edebiliriz.', 'twentyten' ); ?></p>
				<?php get_search_form(); ?>

	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>