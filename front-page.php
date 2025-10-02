<?php
get_header();
?>
<div class="main-content">
<div class="hero-wrapper" style="background-image: url(<?php echo get_theme_file_uri('/img/pudelpromenad.jpg') ?>);">
      <div class="hero-container">
        <h1 class="main-heading">Pudeln</h1>
          <h1 class="secondary-heading">variationernas ras</h1>
          <div class="hero-text-wrapper">
        <p><a href="https://www.pudelklubben.se/om-klubben/bli-medlem/" class="hero-text">Bli medlem</a></p>
</div>
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
       <p>
       <a href="https://www.pudelklubben.se/aktiviteter/">
       <button>Aktiviteter</button></a></p>
       <p>
       <a href="https://www.facebook.com/spksvenskapudelklubben/events">
       <button class="aktiviteter-fb">Aktiviteter på Facebook</button></a>
</p>
       </div>
     </article>
          <article class="article-card">
     <div class="article-content">
       <h2 class="article-heading">Bli medlem</h2>
       <p class="article-text">
     Vill du veta mer om pudeln, lära känna andra pudelintresserade eller hitta på roliga saker med din pudel? Välkommen!
       </p>
       <a href="https://www.pudelklubben.se/om-klubben/bli-medlem/">
       <button>Bli medlem</button></a>
       </div>
     </article>
     <article class="article-card">
      <div class="article-content">
       <h2 class="article-heading">Lycka och jubel - att äga en pudel!</h2>
       <p class="article-text">
       Är du nyfiken på pudeln som ras? Vårt informationsblad är nu uppdaterat.
       </p>
       <a href="https://www.pudelklubben.se/wp-content/uploads/2025/09/Lycka-och-jubel-att-aga-en-pudel.pdf">
       <button>Informationsbladet som PDF</button></a>

     </article>
</div>
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
    <div><a href="https://www.svedea.se/hundforsakring/hundagare/hundklubbar/svenska-pudelklubben?fbclid=IwAR33GfXUp-3UuKC1_uRRGaUbv5tCE9VlYVxVPxMpkTQP1xw7aWwRZLNI4Ug"><img class="sponsor-logo" src="<?php echo get_theme_file_uri('/img/svedea-forsakring-logotyp.png') ?>;" alt="Svedea logo"></a></div>
    <div><a href="https://www.4dogs.se/"><img class="sponsor-logo" src="<?php echo get_theme_file_uri('/img/4Dogs-logga-genomskinlig-med-svart-text-2048x485.jpg') ?>;" alt="4dogs logo"></a></div>
    <div><a href="https://www.delmardogs.se/"><img class="sponsor-logo" src="<?php echo get_theme_file_uri('/img/4.jpg') ?>;" alt="Always your friend logo"></a></div>
    <div><a href="https://www.lyckliga.nu/"><img class="sponsor-logo" src="<?php echo get_theme_file_uri('/img/Lyckliga-Faret-Logga-2048x1034.jpg') ?>;" alt="Lyckliga fåret logo"></a></div>
    <div><a href="https://happydog.se/"><img class="sponsor-logo" src="<?php echo get_theme_file_uri('/img/happydog.jpg') ?>;" alt="Happy dog logo"></a></div>
</section>


	</main>
      

<?php

get_footer(); ?>
</div>
