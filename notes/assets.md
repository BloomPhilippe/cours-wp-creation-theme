# Les assets 

Les assets sont les fichiers CSS et Javascript liés à votre thème.

Dans WordPress, il y a deux manières d'inclure des fichiers CSS ou Javascript.

- Via functions.php
- Via les templates


## CSS

### [Via le header.php](../header.php)


```html
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/main.css"> 
```

la function get_stylesheet_directory_uri() revoie l'url de votre theme.

Exemple :

L'url du site est **http://localhost/test.com** et le nom du dossier du theme activé est **wp-base-theme**

get_stylesheet_directory_uri() renvoie http://localhost/test.com/wp-content/themes/wp-base-theme


### [Via le functions](../functions.php)

Pour cette méthode, il est obligatoire d'utiliser wp_head() dans header.php et wp_footer() dans footer.php.

```php
 if ( ! function_exists( 'nom_de_votre_theme_enqueue_styles' ) ) {
       function nom_de_votre_theme_enqueue_styles() {          
            wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/css/main.css');      
       } 
            
       add_action( 'wp_enqueue_scripts', 'nom_de_votre_theme_enqueue_styles' );  
 }

```

## JavaScript

### [Via le footer.php](../footer.php)


```html
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main2.js"></script>
```

la function get_stylesheet_directory_uri() revoie l'url de votre theme.

Exemple :

L'url du site est **http://localhost/test.com** et le nom du dossier du theme activé est **wp-base-theme**

get_stylesheet_directory_uri() renvoie http://localhost/test.com/wp-content/themes/wp-base-theme


### [Via le functions](../functions.php)

Pour cette méthode, il est obligatoire d'utiliser wp_head() dans header.php et wp_footer() dans footer.php.

```php
 if ( ! function_exists( 'nom_de_votre_theme_enqueue_scripts' ) ) {
       function nom_de_votre_theme_enqueue_scripts() {          
            wp_enqueue_script('mainJs', get_stylesheet_directory_uri().'/js/main.js', array('boostrap-js'), false, false);      
       } 
            
       add_action( 'wp_enqueue_scripts', 'nom_de_votre_theme_enqueue_scripts' );  
 }

```

---

[<< Précédent](functions.md) | [Suivant >>](menu.md)