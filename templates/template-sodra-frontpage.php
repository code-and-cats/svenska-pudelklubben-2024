<?php
/*
 * Template Name: Södra framsida
 * Template Post Type: Södra
 */
get_header();
?>
<div class="main-content">
<div class="hero-wrapper" style="background-image: url(<?php echo get_theme_file_uri('/img/JessicaNilsson-SPvit-1.jpg') ?>);">
      <div class="hero-container">
        <h1 class="white-avd-main-heading">Södra</h1>
        <h1 class="white-avd-main-heading">avdelningen</h1>
        <button class="whitebtn">Bli medlem</button>
      </div>
    </div>
	<main id="primary" class="avd-front-page-main">
				
				<?php

			/* Aktuellt post type Loop */
			$homepageAktuellt = new WP_Query(array(
				'posts_per_page' => 6,
				'post_type' => 'södra'
			));
			while($homepageAktuellt->have_posts()) {
				$homepageAktuellt->the_post();
        ?>
        <section class="sodra-aktuellt-wrapper">
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