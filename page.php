<?php
/*
Template Name: Page with Sidebar
*/
get_header();
?>

<section class="page-section">
    <?php
    $toppbild = get_field('toppbild');
    if ($toppbild) {
        $top_image_url = $toppbild['url'];
    }
endif;
if ($top_image_url) : ?>
    <img src="<?php echo esc_url($top_image_url); ?>" alt="Top Image" class="page-img" />
<?php endif;
?>
    
    <main id="primary" class="site-main">
        <?php
                the_post();
                get_template_part( 'template-parts/content', 'page' );

                if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'full', array( 'class' => 'full-width-image' ) );
                }
        endif;
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
