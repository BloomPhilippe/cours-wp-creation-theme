# Traduire un template


1. Ajouter un domaine de texte

```
function pdw_theme_setup(){
    load_theme_textdomain( 'slug-de-mes-traductions', get_template_directory() . '/languages' );
}
```


2. Ajouter un plugin pour modifier vos fichiers po et mo

Loco translate



3. Ajouter vous tranductions dans vos templates


```
<?php _e('Voir plus actualités', 'slug-de-mes-traductions'); ?>
```