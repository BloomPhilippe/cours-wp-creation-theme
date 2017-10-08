# Le functions.php

Le [functions.php](../functions.php) est considéré comme un controller global, un helper de vue, un service, etc... Il porte de multiples casquettes!

- Il permet de créer des classes, des fonctions et des variables utilisables dans vos templates.

- Il permet d'ajouter des éléments pour l'administration tels que des menus, des widgets, des onglets dans le back-office...

- Il permet d'ajouter des fichiers Javascript et CSS.

- Il permet d'utiliser les hooks et les filtres WordPress, de modifier les fonctions de base WordPress etc...

## Conseils

**IL est préférable de ne pas avoir de logique dans un template!** 

**Si vous avez du code dupliqué dans plusieurs template, ne serait-il pas plus logique de créer un fonction ?** 

**Par soucis de facilité de lecture et de propreté du code, n'hésitez à effectuer des includes** 



## Exemple d'utilisation

Tous les exemples ci-dessous se trouve dans d'autre chapitre avec un complément d'explication.


- Signaler à WordPress que vous avec des menus

```php
register_nav_menus(array(
    'main-menu' => __('Menu primaire', 'menu-primaire')
));
```

- Ajouter des fichiers Javascript et CSS

```php
    function base_theme_enqueue_styles()
    {
 
        wp_enqueue_script('mainJs', get_stylesheet_directory_uri().'/js/main.js', array('boostrap-js'), false, true);

        wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.min.css');
    }

    add_action('wp_enqueue_scripts', 'base_theme_enqueue_styles');
```

- Ajouter dans le back-office la possibilité d'ajouter une image à vos pages

```php
add_theme_support( 'post-thumbnails' );
```

- Ajouter des nouveaux types de contenu (article, page, etc...)

```php
add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'formation',
        array(
            'labels' => array(
                'name' => __( 'Formations' ),
                'singular_name' => __( 'Formation' )
            ),
            'public' => true,
            'has_archive' => true,
        )
    );
}
```

- Signaler à WordPress à que votre thème possède des widget

```php
function wp_base_theme_widgets_init() {

    register_sidebar( array(
        'name'          => __( 'Bloc de texte', 'wp-theme-base-translate' ),
        'id'            => 'text-bloc',
        'description'   => __( 'Ajout d\'un bloc texte ou autre sur le site', 'wp-theme-base-translate' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wp_base_theme_widgets_init' );
```

## Les filtres WordPress

Les filtres permettent de modifier un fonction existante dans WordPress

Exemple:

```php
add_filter( 'the_title', function( $title ) { return '<strong>' . $title . '</strong>'; } );
```

Ci-dessus, vous modifier la fonction the_title()  en y ajoutant les balises <strong></strong>.


## les hooks WordPress (add_action())

Dans WordPress, vous pouvez executer vos fonctions à un moment précis, lors d'un événements dans l'execution de WordPress ou lorsqu'une fonction en particulier est utilisée.

Exemple:

```php
function monAction(){
	
	echo 'toto';
}

add_action( 'save_post', 'monAction');
```

Lorsque WordPress va executer la fonction save_post(), ma fonction va s'executer.


## Liens utiles

- [Informations sur les fonctions, filtres, hooks dans WordPress](https://codex.wordpress.org/Plugin_API#Hooks.2C_Actions_and_Filters)

- [Les filtres WordPress](https://developer.wordpress.org/reference/functions/add_filter/)

- [Le functions.php](https://codex.wordpress.org/Functions_File_Explained)

---

[<< Précédent](template.md) | [Suivant >>](assets.md)