<?php
/*
 * Template Name: Södra startsida
 * Template Post Type: Södra
 */
get_header();
?>
<div class="main-content">
<div class="hero-wrapper" style="background-image: url(<?php echo get_theme_file_uri('/img/JessicaNilsson-SPvit-1.jpg') ?>);">
      <div class="hero-container">
        <h1 class="white-avd-main-heading">Södra</h1>
        <h1 class="white-avd-main-heading">avdelningen</h1>
        <a href="https://www.pudelklubben.se/om-klubben/bli-medlem/"><button class="whitebtn">Bli medlem</button></a>
      </div>
    </div>
	<main id="primary" class="avd-front-page-main">
				
		<!-- Static content  -->
		<section class="sodra-aktuellt-wrapper">
			<article class="avd-article-card">
				<h2 class="article-heading">Aktiviteter</h2>
				<p class="article-text">Pudelpromenad, utställning eller kurs? Här hittar du våra aktiviteter i södra avdelningen! </p>
				<a href="https://www.pudelklubben.se/aktivitetsavdelning/aktivitet-sodra/"><button>Våra aktiviteter</button></a>
			</article>
		</section>

		<?php
			/* Aktuellt post type Loop */
			$homepageAktuellt = new WP_Query(array(
				'posts_per_page' => 5,
				'post_type' => 'södra'
			));

			$post_counter = 0;
			while($homepageAktuellt->have_posts()) {
				$homepageAktuellt->the_post();
				$post_counter++;

				// Skip displaying the first post in the loop
				if ($post_counter == 1) {
					continue;
				}
		?>
			<section class="sodra-aktuellt-wrapper">
				<article class="avd-article-card">
					<h2 class="article-heading"><?php the_title();?></h2>
					<p class="article-text">
						<?php echo wp_trim_words(get_the_content(), 18); ?>
					</p>
					<a href="<?php the_permalink();?>">
						<button>Läs mer</button>
					</a>
				</article>
			</section>
		<?php }
		// Reset post data after custom query
		wp_reset_postdata();
		?>

	</main>

<?php
get_footer();
?>
</div>
