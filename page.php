<?php
/*
Template Name: Page with Sidebar
*/
get_header();
?>

<section class="page-section">
<img class="page-img" src="<?php echo get_theme_file_uri('/img/Denise-Lundholm-Storpudel-svart-13-1-2048x1362.jpg') ?>" alt="pudel" />
    <main id="primary" class="page-main">
        <?php
            the_post();
            // Display the image
            if ( has_post_thumbnail() ) {
                the_post_thumbnail( 'full', array( 'class' => 'full-width-image' ) );
            }
            get_template_part( 'template-parts/content', 'page' );
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
