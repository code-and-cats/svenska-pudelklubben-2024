<?php 
get_header();

while(have_posts()) {
  the_post(); ?>
<div class="hero-wrapper" style="background-image: url(<?php echo get_theme_file_uri('/img/Vit-Mellanpudel-Valp-Matilda-Einebrant-8.jpg') ?>);"></div>
<article class="article-card">
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
</article>

<?php 
}
get_footer();
?>
