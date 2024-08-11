<?php
/*
Template Name: Page with Sidebar
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

    // Check if there is a featured image
    $has_featured_image = has_post_thumbnail();
    ?>
    <?php if ($top_image_url) : ?>
        <div class="top-image-wrapper">
            <img src="<?php echo esc_url($top_image_url); ?>" alt="Top Image" class="top-image full-width-image" />
        </div>
    <?php endif; ?>
    
    <main id="primary" class="page-main">
        <?php
        // Start the loop
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content', 'page' );

                // Display the featured image
                if ( $has_featured_image ) {
                    the_post_thumbnail( 'full', array( 'class' => 'full-width-image' ) );
                }
            endwhile;
        endif;
        ?>
    </main>
    
    <aside class="page-sidebar <?php echo $has_featured_image ? 'has-featured-image' : ''; ?>">
        <div class="sidebar-content">
            <?php echo get_post_meta( get_the_ID(), 'custom_sidebar_content', true ); ?>
        </div>
    </aside>
</section>

<?php
get_footer();
?>
