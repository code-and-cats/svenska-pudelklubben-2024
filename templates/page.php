<?php 
get_header();

while(have_posts()) {
  the_post(); ?>
          <img class="page-img" src="<?php echo get_theme_file_uri('/img/Denise-Lundholm-Storpudel-svart-13-1-2048x1362.jpg') ?>" alt="pudel" />
      <section class="page-section">

      <main class="page-main">
        <h1 class="page-h1"><?php the_title(); ?></h1>
        <?php the_content(); ?>
</main>
<aside class="page-sidebar">
  <div class="sidebar-content">
    <h2 class="page-h2">Målsättning</h2>
<p>Svenska Pudelklubben målsättning är att:  
<ul class="page-ul">
  <li>väcka intresse för rasen och främja avel av mentalt och fysiskt sunda, bruksmässiga och exteriört fullgoda rasrena pudlar.</li>
  <li>bevara och utveckla pudelns specifika egenskaper</li>
  <li>informera om pudeln och dess användningsområden</li>
  <li>marknadsföra pudeln som den trevliga allroundhund den är samt belysa rasens positiva egenskaper.</li>
  <li>informera och sprida kunskap om pudelns beteende och skötsel</li>
</ul>

  </div>
</aside>
</section>
<?php
}
get_footer();
?>
