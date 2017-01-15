# Les widgets

Les widgets sont des blocs de tout types à placer dans vos templates.
Ils peuvent être un bloc de texte, un bloc de menu, un bloc listant les dernières actualités, etc...

De base, votre theme ne possède pas l'onglet Widget

![cover](https://github.com/BloomPhilippe/wp-base-theme/blob/master/images/widget-0.png)

## Signaler à WordPress vos widgets
 
Dans le fichier [functions.php](functions.php), inserer le code ci-dessous :

```
function wp_base_theme_widgets_init() {
    for ($i = 1; $i <= 10; $i++) {
        register_sidebar( array(
            'name'          => __( 'Bloc de texte '.$i, 'wp-theme-base-translate' ),
            'id'            => 'text-bloc-'.$i,
            'description'   => __( 'Ajout d\'un bloc texte ou autre sur le site', 'wp-theme-base-translate' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );
    }
}
add_action( 'widgets_init', 'wp_base_theme_widgets_init' );
```

Ce code va signaler à WordPress 10 bloc de texte et dans le back-office, vous constatez qu'il y a un nouvel onglet widgets.
Dans ce nouvel onglet, il y vos bloc de texte.

![cover](https://github.com/BloomPhilippe/wp-base-theme/blob/master/images/widget-2.png)




---

[<< Précédent](traduction.md)