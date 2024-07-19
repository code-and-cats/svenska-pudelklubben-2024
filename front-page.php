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

			/* Aktuellt post type Loop 
			$homepageAktuellt = new WP_Query(array(
				'posts_per_page' => 6,
				'post_type' => 'aktuellt'
			));
			while($homepageAktuellt->have_posts()) {
				$homepageAktuellt->the_post(); */
        ?>
        <section class="aktuellt-wrapper">
     <article class="article-card">
     <div class="article-content">
       <h2 class="article-heading">Aktiviteter</h2>
       <p class="article-text">
        Utställning, kurs, eller pudelpromenad? Alla våra aktiviteter hittar du i vår kalender.
       </p>
       <a href="#">
       <button>Läs mer</button></a>
       </div>
     </article>
     <article class="article-card">
      <div class="article-content">
       <h2 class="article-heading">Skaffa pudel</h2>
       <p class="article-text">
        Vi har både valphänvisning och omplaceringar inom klubbens regi.
       </p>
       <a href="#">
       <button>Läs mer</button></a>
</div>
     </article>
     <article class="article-card">
     <div class="article-content">
       <h2 class="article-heading">Bli medlem</h2>
       <p class="article-text">
        Som medlem får du tillgång till alla våra aktiviteter och många bra medlemsförmåner hos våra sponsorer.
       </p>
       <a href="#">
       <button>Läs mer</button></a>
       </div>
     </article>
   </section>
   <section class="sponsor-wrapper">
    <div><img class="sponsor-logo" src="<?php echo get_theme_file_uri('/img/svedea-forsakring-logotyp.png') ?>;"></div>
    <div></div>
    <div></div>
    <div></div>
</section>

	</main>

<?php

get_footer(); ?>
