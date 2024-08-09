<?php
get_header();
?>
<div class="hero-wrapper" style="background-image: url(<?php echo get_theme_file_uri('/img/Vit-Mellanpudel-Valp-Matilda-Einebrant-8.jpg') ?>);">
      <div class="hero-container">
        <h1 class="main-heading">Pudeln</h1>
          <h1 class="secondary-heading">variationernas ras</h1>
        <a href="https://www.pudeltest.online/om-klubben/bli-medlem/"><button>Bli medlem</button></a>
      </div>
    </div>
	<main id="primary" class="front-page-main">
				
        <section class="aktuellt-wrapper">
     <article class="article-card">
     <div class="article-content">
       <h2 class="article-heading">Aktiviteter</h2>
       <p class="article-text">
        Utställning, kurs eller pudelpromenad? Alla våra aktiviteter hittar du i vår kalender.
       </p>
       <a href="https://www.pudeltest.online/aktiviteter/">
       <button>Aktiviteter</button></a>
       </div>
     </article>
     <article class="article-card">
      <div class="article-content">
       <h2 class="article-heading">Skaffa pudel</h2>
       <p class="article-text">
        Vi har både valphänvisning och omplaceringar inom klubbens regi.
       </p>
       <a href="https://www.pudeltest.online/valpkullar/">
       <button>Hitta pudel</button></a>
</div>
     </article>
     <article class="article-card">
     <div class="article-content">
       <h2 class="article-heading">Bli medlem</h2>
       <p class="article-text">
        Som medlem får du tillgång till alla våra aktiviteter och många bra medlemsförmåner hos våra sponsorer.
       </p>
       <a href="https://www.pudeltest.online/om-klubben/bli-medlem/">
       <button>Bli medlem</button></a>
       </div>
     </article>
     <?php

/* Aktuellt loop for tablet only */
$homepageAktuellt = new WP_Query(array(
  'posts_per_page' => 1,
  'post_type' => 'aktuellt'
));
while($homepageAktuellt->have_posts()) {
  $homepageAktuellt->the_post(); 
  ?>
 <article class="article-card tablet-only">
                <div class="article-content">
                <h2 class="article-heading"><?php the_title();?></h2>
       <p class="article-text">
<?php echo wp_trim_words(get_the_content(), 18); ?>
       </p>
       <a href="<?php the_permalink();?>">
       <button>Läs mer</button></a>
                </div>
            </article>
        <?php
        }
        wp_reset_postdata();
        ?>
   </section>
   <section class="sponsor-wrapper">
    <h3 class="sponsor-heading">Våra sponsorer</h3>
    <div><a href="https://www.svedea.se/hundforsakring/hundagare/hundklubbar/svenska-pudelklubben?fbclid=IwAR33GfXUp-3UuKC1_uRRGaUbv5tCE9VlYVxVPxMpkTQP1xw7aWwRZLNI4Ug"><img class="sponsor-logo" src="<?php echo get_theme_file_uri('/img/svedea-forsakring-logotyp.png') ?>;"></a></div>
    <div><img class="sponsor-logo" src="<?php echo get_theme_file_uri('/img/dr-clauders-sverige-960x480-560x280.jpg') ?>;"></div>
    <div><img class="sponsor-logo" src="<?php echo get_theme_file_uri('/img/4Dogs-logga-genomskinlig-med-svart-text-2048x485.jpg') ?>;"></div>
    <div><img class="sponsor-logo" src="<?php echo get_theme_file_uri('/img/alwaysyoufriend-2048x2048.png') ?>;"></div>
    <div><img class="sponsor-logo" src="<?php echo get_theme_file_uri('/img/Lyckliga-Faret-Logga-2048x1034.jpg') ?>;"></div>
</section>


	</main>

<?php

get_footer(); ?>
