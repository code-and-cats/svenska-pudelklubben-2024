<?php
get_header();
?>
<div class="hero-wrapper" style="background-image: url(<?php echo get_theme_file_uri('/img/Vit-Mellanpudel-Valp-Matilda-Einebrant-8.jpg') ?>);">
      <div class="hero-container">
        <h1 class="main-heading">Pudeln</h1>
          <h1 class="secondary-heading">variationernas ras</h1>
        <h2 class="tagline">4 storlekar | 5 färger</h2>
        <button>Bli medlem</button>
      </div>
    </div>
	<main id="primary" class="front-page-main">
				
				<?php

			/* Aktuellt post type Loop */
			$homepageAktuellt = new WP_Query(array(
				'posts_per_page' => 6,
				'post_type' => 'aktuellt'
			));
			while($homepageAktuellt->have_posts()) {
				$homepageAktuellt->the_post();
        ?>
        <section class="aktuellt-wrapper">
     <article class="article-card">
       <h2><?php the_title();?></h2>
       <p>
<?php echo wp_trim_words(get_the_content(), 18); ?>
       </p>
       <a href="<?php the_permalink();?>">
       <button class="btn">Läs mer</button></a>
     </article>
   </section>
<?php }
		?>

	</main>

<?php
get_footer(); ?>
