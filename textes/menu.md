# Menu

Il y a plusieurs manière de créer un menu en Wordpress

1. Créer des emplacements de menu

Dans functions.php

```
register_nav_menus(
    array(
        'main-menu' => 'Description du menu',
        'footer-menu' => 'Description du menu footer',
    )
);
```

