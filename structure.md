# Structure d'un thème WordPress

## Un thème WordPress est composé de plusieurs fichier.

### [style.css](style.css)

Le style.css possède les informations liées au thème tels que l’auteur, la version,
le nom du thème, l’URL du thème, etc. Dans ce fichier CSS, il n’y aura aucun style
et il ne sera pas utilisé pour la mise en forme du site.

Dans le fichier style.css, les valeurs important sont :

Theme Name est égale au nom de votre thème pour l'affichage dans le back-office

Template est égale au nom du dossier où se trouve votre thème.

### [screenshot.png](screenshot.png)

Le screenshot.png est la couverture du thème lors de l’affichage dans la gestion
des thèmes. Ce fichier n’est pas obligatoire mais c’est toujours mieux qu’il soit
présent pour le différencier des autres thèmes installés.

### [functions.php](functions.php)

Le functions.php est le controller de votre thème, il se compose des fonctions custom
que vous créez, d’objets que vous allez modifier, de requêtes, etc.

Il permet d’alléger vos vues (templates) en y retirant la logique de
programmation.

### [header.php](header.php)

L'[header.php](header.php) contient le header de votre site, les balises html, body et head.
On peut y placer également les balises style, script, etc...

Dans ce fichier, il est important de ne pas oublier la function wp_head() qui permet d'inclure les fichiers CSS, JS et les meta tags propre à WordPress ou aux plugins installés.
Cette function ce place juste avant la fin de la balise </head>

```
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>
```


### [footer.php](footer.php)

L'[footer.php](footer.php) contient les closures de vos balises body et html. Il peut également contenir vos script, votre footer, etc...

Dans ce fichier, il est important de ne pas oublier la function wp_footer() qui permet d'inclure les fichiers JS propre à WordPress ou aux plugins installés.

Cette function ce place juste avant la fin de la balise body

```
<?php wp_footer();?>
</body>
</html>
```

Cette function inclut également la barre d'administration, lorsqu'on est connecté au WordPress et que l'on navigue sur le site, cette barre est située au dessus de la page.


![cover](https://github.com/BloomPhilippe/wp-base-theme/blob/master/images/barre-admin.png)


### Inclure [header.php](header.php) et [footer.php](footer.php)

Afin d'inclure le fichier [header.php](header.php) dans vos templates, il suffit d'ajouter la function get_header() au début de votre template.

```
<?php get_header(); ?>
```

Afin d'inclure le fichier [footer.php](footer.php) dans vos templates, il suffit d'ajouter la function get_footer() à la fin de votre template.

```
<?php get_footer(); ?>
```


## Les templates de base

Les templates de base sont automatiquement repérés par WordPress.
Ils sont liés à plusieurs types de contenu, pages, catégories ou etc...

### [index.php](index.php)

L’index.php est le template de base dans WordPress, cependant vous pouvez en
créer d’autres en fonction de votre structure de page.

Par default, le template utilisé pour la page d'accueil du site est [index.php](index.php)


### [archive.php](archive.php)

L’[archive.php](archive.php) est le template qui permet d'afficher une liste d'élément tels que les articles, catégorie, etc...
Imaginons que dans le site, il y a une page blog avec une liste des actualités de votre site, c'est [archive.php](archive.php) qui sera utilisé.


### [single.php](single.php)

Le [single.php](single.php) est le template qui permet d'afficher un article en particulier.
Imaginons que l'on navigue dans la liste d'article et que l'on clique pour voir plus de detail sur un article, le template utilisé pour afficher cette article sera [single.php](single.php).

### [page.php](page.php)

Le [page.php](page.php) est le template qui permet d'afficher une page en particulier.
Imaginons que l'on clique sur un lien d'une page dans le site afin de voir les détails de cette page, le template utilisé afficher cette page sera [page.php](page.php).

## La hierarchie des templates de base

La hierarchie des templates dans WordPress est très importante, elle décide quel template utiliser.

Exemple :

Pour une catégorie, le template utilisé est category-$slug.php (slug est le nom de la catégorie)

![cover](https://github.com/BloomPhilippe/wp-base-theme/blob/master/images/wp-template-hierarchy.jpg)


## Les customs templates 

Les customs templates sont souvent créés pour une page en particulier tels que la page contact, la page à propos, etc...
Ils sont situés dans le **dossier** templates et afin qu'ils soient repérer par WordPress, il faut ajouter l'entête ci-dessous dans chaques templates :

```
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

![cover](https://github.com/BloomPhilippe/wp-base-theme/blob/master/images/select-template.png)