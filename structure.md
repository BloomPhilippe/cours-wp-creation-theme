## Un thème WordPress est composé de plusieurs fichier.

1. [style.css](style.css)

Le style.css possède les informations liées au thème tels que l’auteur, la version,
le nom du thème, l’URL du thème, etc. Dans ce fichier CSS, il n’y aura aucun style
et il ne sera pas utilisé pour la mise en forme du site.

Dans le fichier style.css, les valeurs important sont :

Theme Name est égale au nom de votre thème pour l'affichage dans le back-office

Template est égale au nom du dossier où se trouve votre thème.

2. [screenshot.png](screenshot.png)

Le screenshot.png est la couverture du thème lors de l’affichage dans la gestion
des thèmes. Ce fichier n’est pas obligatoire mais c’est toujours mieux qu’il soit
présent pour le différencier des autres thèmes installés.

3. [functions.php](functions.php)

Le functions.php est le controller de votre thème, il se compose des fonctions custom
que vous créez, d’objets que vous allez modifier, de requêtes, etc.

Il permet d’alléger vos vues (templates) en y retirant la logique de
programmation.

4. [index.php](index.php)

L’index.php est le template de base dans WordPress, cependant vous pouvez en
créer d’autres en fonction de votre structure de page.

Par default, le template utilisé pour la page d'accueil du site est [index.php](index.php)