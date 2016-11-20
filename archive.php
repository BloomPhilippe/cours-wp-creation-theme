<?php
 /*
  * Template qui permet d'afficher les listes de type de contenu ( post, pages,...)
  *
  * Lien pour une catégorie = /category/slug-category
  */
get_header();?>
<div class="album text-muted">
    <div class="container">
        <div class="row album text-muted">
            <?php
            if (have_posts()):
            while (have_posts()) : the_post();
                ?>
                <div class="col-md-3 card">
                    <img data-src="holder.js/100px280/thumb" alt="100%x280" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22356%22%20height%3D%22280%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20356%20280%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158819f6d00%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158819f6d00%22%3E%3Crect%20width%3D%22356%22%20height%3D%22280%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22131.2890625%22%20y%3D%22148.1%22%3E356x280%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="height: 280px; width: 100%; display: block;">
                    <p class="card-text text-center"><?php the_title(); ?></p>
                    <p class="card-text"><?php echo wp_trim_words( get_the_content(), 40, '<br><a href="'.get_permalink().'">Voir détails</a>' ); ?></p>
                </div>
                <?php
            endwhile;
            ?>
                <div class="clearfix"></div>
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item">
                            <?php previous_posts_link( '<span aria-hidden="true">&laquo;</span>' ); ?>
                        </li>
                        <li class="page-item">
                            <?php next_posts_link( '<span aria-hidden="true">&raquo;</span>' ); ?>
                        </li>
                    </ul>
                </nav>
                <div class="clearfix"></div>
                <?php
                the_posts_pagination( array(
                    'mid_size' => 2,
                    'prev_text' => __( '<span aria-hidden="true">&laquo;</span>', 'textdomain' ),
                    'next_text' => __( '<span aria-hidden="true">&raquo;</span>', 'textdomain' ),
                    'screen_reader_text' => ' ',
                ) );
                ?>
                <?php
            else:
                ?>
                <h3>Aucun élément trouvé!</h3>
            <?php
            endif;
            ?>
        </div>

    </div>
</div>
<?php get_footer(); ?>
