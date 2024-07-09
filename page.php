<?php
get_header();
?>

	<main id="primary" class="site-main">

		<?php

			the_post();

			get_template_part( 'template-parts/content', 'page' );
		?>
	</main>

<?php
get_footer();
?>
