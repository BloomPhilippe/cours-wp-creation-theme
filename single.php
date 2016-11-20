<?php get_header(); ?>

<?php
while ( have_posts() ) : the_post();
    $title = get_the_title();
    $content = get_the_content();
    $picture_src = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
    $picture = $picture_src[0];
    $term = get_the_category();
    $link_term = get_category_link($term[0]->term_id);
?>


<?php
endwhile;
?>

<?php get_footer(); ?>
