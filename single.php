<?php
/*
* Template Name: Sida med sidoinformation
*/
get_header();
?>
<div class="main-content">
<section class="page-section">
    <?php
    $toppbild = get_field('toppbild');
    if ($toppbild) {
        $top_image_url = $toppbild['url'];
    }
    
    if (!empty($top_image_url)) : ?>
        <img src="<?php echo esc_url($top_image_url); ?>" alt="Top Image" class="page-img" />
    <?php endif; ?>
    
    <main id="primary" class="site-main">
        <?php
        the_post();
        get_template_part('template-parts/content', 'page');

        if (has_post_thumbnail()) {
            the_post_thumbnail('full', array('class' => 'full-width-image'));
        }
        ?>
    </main>

    <?php if ( ! is_singular( 'product' ) ) : ?>
    <aside class="page-sidebar">
        <div class="sidebar-content">
            <?php echo get_post_meta(get_the_ID(), 'custom_sidebar_content', true); ?>
        </div>
    </aside>
    <?php endif; ?>
</section>

<?php
get_footer();
?>
</div>
