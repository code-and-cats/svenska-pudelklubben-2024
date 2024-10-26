<?php
/*
Template Name: Aktuellt with Sidebar
*/
get_header();
?>

<section class="page-section">
<?php
    // Get the custom field value
    $toppbild = get_field('toppbild');
    
    // Determine the top image URL
    if ($toppbild) {
        $top_image_url = $toppbild['url'];
    } else {
        // Fallback to featured image if ACF field is not set
        $top_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
    }
    ?>
 <?php if ($top_image_url) : ?>
        <img src="<?php echo esc_url($top_image_url); ?>" alt="Top Image" class="page-img" />
    <?php endif; ?>
    <main id="primary" class="page-main">
        <?php

           get_template_part( 'template-parts/content', 'page' );
            if ( has_post_thumbnail() ) {
                the_post_thumbnail( 'full', array( 'class' => 'full-width-image' ) );
            }
        ?>
    </main>
    <aside class="page-sidebar">
        <div class="sidebar-content">
            <?php echo get_post_meta( get_the_ID(), 'custom_sidebar_content', true ); ?>
        </div>
    </aside>
</section>

<?php
get_footer();
?>
