# Traduire un template

Dans les templates, vous avez souvent du texte non éditable par l'administrateur du site ou le client.

Il est préférable de rendre traductible ce genre de texte car si un jour votre site doit être traduit, cela vous évitera de repasser sur tous les template.

## Etapes

### 1. Ajouter un domaine de texte

Le première étapes est de signaler à WordPress que votre thème possède des fichiers de traduction.
Généralement, le thème possède un dossier languages dans lequel va être placé vos fichier de traduction (.po et .mo).
 
Il y as deux manières d'effectuer ce signalement, via style.css ou via functions.php. 
C'est soit une méthode ou l'autre mais pas les deux.
De plus, celle via le style.css prendra le pas sur l'autre.

#### Via le [styles.css](style.css)

```
Text Domain:    wp-theme-base
```

#### Via le [functions.php](functions.php)

Grâce au code ci-dessous, vous signalez à WordPress qu'il doit vérifier dans le dossier 
languages de votre thème pour les traductions.
 

```
add_action( 'after_setup_theme', 'pdw_theme_setup' );

function pdw_theme_setup(){
    load_theme_textdomain( 'wp-theme-base', get_template_directory() . '/languages' );
}
```

**add_action()** permet de signaler à WordPress qu'il doit executer votre fonction à un moment précit.

le premier paramètre est le moment que WordPress doit executer votre fonction
Ce moment est un fonction native de WordPress qui s'execute à un moment précit et donc le add_action() va dire à WordPress :

"Lorsqu'il execute la fonction after_setup_theme, il execute la fonction pdw_theme_setup juste après"

Le deuxième paramètre est le nom de votre fonction à executer

**load_theme_textdomain()** permet d'ajouter des nouveaux fichiers de traduction (po et mo)


Le premier paramètre est le slug parent de vos traductions grâce au quel WordPress sait où trouver vos fichiers.

Le deuxième paramètre est le chemin vers le dossier où se trouve vos traduction


### 2. Ajouter vous tranductions dans vos templates

```
<?php _e('Voir plus actualités', 'slug-de-mes-traductions'); ?>
```

**_e()** signale à WordPress que le texte est traductible et effectue un echo.

Le premier paramètre est l'identifiant du texte à aller chercher qui se trouve dans un fichier de traduction

Le deuxième paramètre est le slug parent de vos traductions ainsi WordPress sait dans quel dossier vérifier.



### 3. Ajouter un plugin pour modifier vos fichiers po et mo

Loco translate

---

[<< Précédent](menu.md) | [Suivant >>](widget.md)