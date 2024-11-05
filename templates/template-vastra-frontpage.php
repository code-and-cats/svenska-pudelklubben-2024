<?php
/*
 * Template Name: Västra Frontpage Template
 * Template Post Type: Västra
 */
get_header();
?>
<div class="main-content">
<div class="hero-wrapper" style="background-image: url(<?php echo get_theme_file_uri('/img/M-scaled.jpg') ?>);">
      <div class="hero-container">
        <h1 class="avdelning-main-heading">Västra</h1>
        <h1 class="avdelning-main-heading">avdelningen</h1>
        <button>Bli medlem</button>
      </div>
    </div>
	<main id="primary" class="avd-front-page-main">
				
				<?php

			/* Aktuellt post type Loop */
			$homepageAktuellt = new WP_Query(array(
				'posts_per_page' => 6,
				'post_type' => 'västra'
			));
			while($homepageAktuellt->have_posts()) {
				$homepageAktuellt->the_post();
        ?>
        <section class="vastra-aktuellt-wrapper">
     <article class="avd-article-card">
       <h2 class="article-heading"><?php the_title();?></h2>
       <p class="article-text">
<?php echo wp_trim_words(get_the_content(), 18); ?>
       </p>
       <a href="<?php the_permalink();?>">
       <button>Läs mer</button></a>
     </article>
   </section>
<?php }
		?>

	</main>

<?php

get_footer(); ?>
</div>