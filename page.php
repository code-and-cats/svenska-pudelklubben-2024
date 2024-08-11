<?php
/*
Template Name: Page with Sidebar
*/
get_header();
?>

<section class="page-section">
    <?php
    // Check if there is a featured image
    $has_featured_image = has_post_thumbnail();
    
    // If there's a featured image, display it
    if ($has_featured_image) : ?>
        <div class="top-image-wrapper">
            <?php the_post_thumbnail( 'full', array( 'class' => 'top-image full-width-image' ) ); ?>
        </div>
    <?php endif; ?>
    
    <main id="primary" class="site-main">
        <?php
        // Start the loop
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content', 'page' );
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
