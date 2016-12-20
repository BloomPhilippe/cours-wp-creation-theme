# Les assets 

Les assets sont les fichiers CSS et Javascript liés à votre thème.

Dans WordPress, il y a deux manières d'inclure des fichiers CSS ou Javascript.

- Via functions.php
- Via les templates


## CSS

### Via le header.php


```
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/main.css"> 
```

la function get_stylesheet_directory_uri() revoie l'url de votre theme.

Exemple :

L'url du site est **http://localhost/test.com** et le nom du dossier du theme activé est **wp-base-theme**

get_stylesheet_directory_uri() renvoie http://localhost/test.com/wp-content/themes/wp-base-theme
