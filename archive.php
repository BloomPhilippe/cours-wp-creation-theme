<?php
get_header();
?>

<?php while (have_posts()) :
    the_post();
    ?>
    <div>
        <h1><?php echo  get_the_title(); ?> est la liste d'article filtrée :</h1>
        <ul>
            <li>Liste d'article filtrée par catégorie</li>
            <li>Liste d'article filtrée par auteur</li>
            <li>Liste d'article filtrée par date</li>
        </ul>
        <p>
            <?php
            echo get_the_content();
            ?>
        </p>
    </div>
    <?php
endwhile; ?>

<?php
the_posts_pagination( array(
    'mid_size' => 2,
    'prev_text' => __( '<span aria-hidden="true">&laquo;</span>', 'textdomain' ),
    'next_text' => __( '<span aria-hidden="true">&raquo;</span>', 'textdomain' ),
    'screen_reader_text' => ' ',
) );
?>
<?php get_footer(); ?>

