<?php
 /*
  * Template qui permet d'afficher un article ou un autre type de contenu
  */
get_header(); ?>

<?php while (have_posts()) :
    the_post();
    ?>
    <div class="container">
        <div class="jumbotron">
            <h1><?php echo  get_the_title(); ?> est le titre d'un type de contenu</h1>
            <p class="lead">
                <?php
                echo get_the_content();
                ?>
            </p>
        </div>
    </div>
    <?php
endwhile; ?>
<?php get_footer(); ?>
