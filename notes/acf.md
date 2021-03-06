# Création de nouveaux champs

Les champs de bases dans WordPress sont le titre, le contenu (wysiwyg), l’image à la une, catégories, etc...

Cependant, il est possible de créer des nouveaux champs différents de ceux de base dans WordPress à l'aide du plugin [ACF](https://www.advancedcustomfields.com/).
Ces nouveaux champs peuvent être lié à une page, un type de page, un template, un article, etc...

Les instructions qui suivent par du principe que vous possédez la version **PRO d'ACF**.

Cependant, vous avez déjà beaucoup de fonctionnalités avec la version gratuite!

## Téléchareger & installer ACF PRO

Vous troverez le lien ci-dessous.

[ACF PRO](https://www.advancedcustomfields.com/pro/)


## Créer un groupe de champs

### Démonstration complète

![video](../videos/acf-1.gif)

### 1. Cliquer sur l'onglet ACF ou Custom fieds

![video](../videos/acf-part-1.gif)

### 2. Cliquer sur le bouton Ajouter

![video](../videos/acf-part-2.gif)

### 3. Remplir le champ titre

![video](../videos/acf-part-3.gif)

**Celui-ci est très important et doit être le plus explicite possible.**

### 4. Choisissez à qui vos champs seront liés (règles)

![video](../videos/acf-part-4.gif)

Les règles sont très importantes !

Elles permettent de liées les champs un type de contenu :

- A toutes les pages
- A tous les articles
- A un template
- Etc...

### 5. Cliquer sur + Ajouter pour ajouter les champs

- Champ texte

![video](../videos/acf-part-5-txt.gif)

- Champ WYSIWYG

![video](../videos/acf-part-5-wysiwyg.gif)

- Champ répéteur

![video](../videos/acf-part-5-repeat.gif)

L'exemple ci-dessus est avec une image et un texte mais vous pouvez mettre n'import quel champ.


**Lien vers plus d'exemple** [ICI](https://www.advancedcustomfields.com/resources/)


## Remplir les nouveaux champs

Dans l'exemple précedent, j'ai créé un groupe de champs lié à **toutes** les pages.

Faites pareil !

Ensuite, allez dans une page au hasard et remplissez vos nouveaux champs.

![video](../videos/acf-remplir.gif)

**_N'oubliez pas de sauver!_**



## Afficher les nouveaux champs

Lorsque vous utilisez la fonction ```get_field('nom_du_champ')```, le premier paramètre de la fonction est le nom du champ (pas le label).

![acf](../images/acf-name.png)

- Champ texte

[Lien vers la documentation](https://www.advancedcustomfields.com/resources/text/)

- Champ WYSIWYG

[Lien vers la documentation](https://www.advancedcustomfields.com/resources/wysiwyg-editor/)

- Champ image

[Lien vers la documentation](https://www.advancedcustomfields.com/resources/image/)

- Champ répéteur

[Lien vers la documentation](https://www.advancedcustomfields.com/resources/repeater/)

---

[:back:](fields.md) | [:soon:](template-custom.md)