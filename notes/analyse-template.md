# Structure d'un template

Les templates sont les fichiers qui permettent d'afficher un type de contenu.

Voici un exemple d'une structure de base :

```php
<?php
get_header(); 
?>

<?php while (have_posts()) :
    the_post();
    ?>
    <div>
        <h1><?php echo  get_the_title(); ?> est la page d'index</h1>
        <p>
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

# Décorticons notre exemple ci-dessus!

## **get_header()**

Un template commence toujours par get_header().
get_header() permet d'inclure le fichier header.php

```php
<?php
get_header(); 
?>
```

## **have_posts()**

Dans WordPress, chaque fois qu'une page (ou articles) est affichée, un requète est exécutée automatiquement par WordPress.
Cette requète comprends les éléments lié à la page courante (titre, contenu, image, etc...)
Si la page est une liste d'article, la requète comprends tous les articles de cette page.
Cette requète se nomme **WP_Query()**.

have_posts() vérifie simplement si la requète WP_Query() à trouvé un résultat.
On boucle dans le while tant que have_posts() trouve du résultat.

## **the_post()**

Quand vous êtes dans la boucle while, the_post() va créer un objet post avec les informations courantes lié à la boucle.
Exemple :

Imaginons que la boucle while passe deux fois, the_post() va créer un objet avec les informations du deuxième élément que se trouve dans le résultat de la requète.

Si vous désirez afficher les informations de l'objet courant (titre, contenu, image, etc...), 
vous disposez de plusieurs fonctions très utiles :

- get_the_ID() retourne l'id
- get_the_title() retourne le titre
- get_the_content() retourne le contenu texte
- get_permalink() retourne l'URL pour voir l'article ou la page seule
- get_the_post_thumbnail(get_the_ID(), $taille) retourne une balise img avec comme source votre image à la une.
$taille est égale à la taille à afficher (thumbnail, medium, large, full)

Pour plus de fonction, allez sur [Codex WordPress](https://codex.wordpress.org/fr:Fonctions_de_r%C3%A9f%C3%A9rence)


## **get_footer()**

Un template fini toujours par get_footer().
get_footer() permet d'inclure le fichier footer.php



---

[:back:](template.md) | [:soon:](template-custom.md)