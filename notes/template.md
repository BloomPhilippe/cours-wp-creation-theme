# Les templates de base

Les templates sont les fichiers qui permettent d'afficher un type de contenu (articles, pages, etc...).
Ceux de base sont automatiquement repérés par WordPress.

**Ce fichier est obligatoire!**

Par default, le template utilisé pour la page d'accueil du site est [index.php](../index.php)


## [archive.php](../archive.php)

L’[archive.php](../archive.php) est le template qui permet d'afficher une liste d'élément tels que les articles, catégorie, etc...
Imaginons que dans le site, il y a une page blog avec une liste des actualités de votre site, c'est [archive.php](../archive.php) qui sera utilisé.


## [single.php](../single.php)

Le [single.php](../single.php) est le template qui permet d'afficher un article en particulier.
Imaginons que l'on navigue dans la liste d'article et que l'on clique pour voir plus de detail sur un article, le template utilisé pour afficher cette article sera [single.php](single.php).

## [page.php](../page.php)

Le [page.php](../page.php) est le template qui permet d'afficher une page en particulier.
Imaginons que l'on clique sur un lien d'une page dans le site afin de voir les détails de cette page, le template utilisé afficher cette page sera [page.php](page.php).

# La hierarchie des templates de base

La hierarchie des templates dans WordPress est très importante, elle décide quel template utiliser.

Exemple :

Pour une catégorie, le template utilisé est category-$slug.php (slug est le nom de la catégorie)

![cover](../images/wp-template-hierarchy.jpg)


# Les customs templates 

Les customs templates sont souvent créés pour une page en particulier avec une structure spécifique tels que la page contact, la page à propos, etc...
Ils sont situés dans le **dossier** templates et afin qu'ils soient repérer par WordPress, il faut ajouter l'entête ci-dessous dans chaques templates :

```php
<?php
/**
 * Template Name: Contact
 *
 */
```

L'entête est composée du nom du template, exemple Contact.
Pour tester si le template est pris en compte, il faut aller dans le back-office, 
dans le formulaire d'ajout/edition d'une page et un select apparaîtra avec la liste de vos templates 
comme sur l'image ci-dessous.

![cover](../images/select-template.png)

Si votre template n'est pas repéré par WordPress, veuillez vérifier les espaces entre "Template Name:" et "Contact" car s'il y en a de trop ou trop peu, le template n'est pas pris en compte.



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

## Décorticons note exemple ci-dessus!

### **get_header()**

Un template commence toujours par get_header().
get_header() permet d'inclure le fichier header.php

```php
<?php
get_header(); 
?>
```

### **have_posts()**

Dans WordPress, chaque fois qu'une page (ou articles) est affichée, un requète est exécutée automatiquement par WordPress.
Cette requète comprends les éléments lié à la page courante (titre, contenu, image, etc...)
Si la page est une liste d'article, la requète comprends tous les articles de cette page.
Cette requète se nomme **WP_Query()**.

have_posts() vérifie simplement si la requète WP_Query() à trouvé un résultat.
On boucle dans le while tant que have_posts() trouve du résultat.

### **the_post()**

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


### **get_footer()**

Un template fini toujours par get_footer().
get_footer() permet d'inclure le fichier footer.php

---

[<< Précédent](structure.md) | [Suivant >>](functions.md)