<?php
/*
* Template Name: Sida utan sidoinformation
*/
get_header();
?>
<div class="main-content">
<section class="full-page-section">
<?php
    $toppbild = get_field('toppbild');
    if ($toppbild) {
        $top_image_url = $toppbild['url'];
    }
    
    if (!empty($top_image_url)) : ?>
        <img src="<?php echo esc_url($top_image_url); ?>" alt="Top Image" class="page-img" />
    <?php endif; ?>
    
    <main id="primary" class="full-page-main">
        <?php
            the_post();
            get_template_part( 'template-parts/content', 'page' );
            if ( has_post_thumbnail() ) {
                the_post_thumbnail( 'full', array( 'class' => 'full-width-image' ) );
            }
        ?>
    </main>
  
</section>

<?php
get_footer();
?>
</div>
