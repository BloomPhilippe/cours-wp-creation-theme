# Le functions.php

Le [functions.php](functions.php) est considéré comme un controller global, un helper de vue, un service, etc... Il porte de multiples casquettes!

- Il permet de créer des classes, des fonctions et des variables utilisables dans vos templates.

- Il permet d'ajouter des éléments pour l'administration tels que des menus, des widgets, des onglets dans le back-office...

- Il permet d'ajouter des fichiers Javascript et CSS.

- Il permet d'utiliser les hooks et les filtres WordPress, de modifier les fonctions de base WordPress etc...

**IL est préférable de ne pas avoir de logique dans un template!** 

## Exemple d'utilisation

- Signaler à WordPress que vous avec des menus

```
register_nav_menus(array(
    'main-menu' => __('Menu primaire', 'menu-primaire')
));
```

- Ajouter des fichiers Javascript et CSS

```
    function base_theme_enqueue_styles()
    {
 
        wp_enqueue_script('mainJs', get_stylesheet_directory_uri().'/js/main.js', array('boostrap-js'), false, true);

        wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.min.css');
    }

    add_action('wp_enqueue_scripts', 'base_theme_enqueue_styles');
```

- Ajouter dans le back-office la possibilité d'ajouter une image à vos pages

```
add_theme_support( 'post-thumbnails' );
```
---

[<< Précédent](template.md) | [Suivant >>](assets.md)