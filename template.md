# Structure d'un template

Les templates sont les fichiers qui permettent d'afficher un type de contenu.

Voici un exemple d'une structure de base :

```
<?php
get_header(); 
?>

<?php while (have_posts()) :
    the_post();
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

<?php 
get_footer(); 
?>
```

## Décorticons note exemple ci-dessus!

1. Un template commence toujours par get_header().
get_header() permet d'inclure le fichier header.php

```
<?php
get_header(); 
?>
```




---

[<< Précédent](arborescence.md) | [Suivant >>](functions.md)