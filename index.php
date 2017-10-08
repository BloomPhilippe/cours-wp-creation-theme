<?php
get_header();
?>

<?php while (have_posts()) :
    the_post();
    echo get_the_post_thumbnail( get_the_ID(), 'thumbnail' );
    ?>
    <div class="jumbotron">
        <h1><?php echo  get_the_title(); ?> est la page d'index</h1>
        <p class="lead">
            <?php
            echo get_the_content();
            ?>
        </p>
    </div>
    <?php
endwhile; ?>
<?php get_footer(); ?>

