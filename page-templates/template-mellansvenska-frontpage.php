<?php
/*
 * Template Name: Mellansvenska startsida
 * Template Post Type: mellansvenska
 */
get_header();
?>
<div class="main-content">
<div class="hero-wrapper" style="background-image: url(<?php echo get_theme_file_uri('/img/20230222-Erika-Jansson-scaled.jpg') ?>);">
      <div class="hero-container">
        <h1 class="avdelning-main-heading">Mellansvenska</h1>
        <h1 class="avdelning-main-heading">avdelningen</h1>
        <a href="https://www.pudelklubben.se/om-klubben/bli-medlem/"><button>Bli medlem</button></a>
      </div>
    </div>
	<main id="primary" class="avd-front-page-main">
    	<!-- Static content  -->
		
      <section class="mellansvenska-aktuellt-wrapper">
			<article class="avd-article-card">
				<h2 class="article-heading">Aktiviteter</h2>
				<p class="article-text">Pudelpromenad, utställning eller kurs? Här hittar du våra aktiviteter i mellansvenska avdelningen! </p>
				<a href="https://www.pudelklubben.se/aktivitetsavdelning/aktivitet-mellansvenska/"><button>Våra aktiviteter</button></a>
			</article>
		</section>
				
				<?php

			/* Aktuellt post type Loop */
			$homepageAktuellt = new WP_Query(array(
				'posts_per_page' => 5,
				'post_type' => 'mellansvenska'
			));
			while($homepageAktuellt->have_posts()) {
				$homepageAktuellt->the_post();
        ?>
        <section class="mellansvenska-aktuellt-wrapper">
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