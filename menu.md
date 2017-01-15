# Menu

Quand vous créez un themes dans WordPress, vous pourrez constater qu'il n'y a pas la possibilité de 
créer et de modifier un menu dans le back-office.

![cover](https://github.com/BloomPhilippe/wp-base-theme/blob/master/images/sans-menu.png)


La première chose à effectuer est de signaler à WordPress qu'il y aura un emplacement pour un ou plusieurs menus dans votre theme.
 
 
## Signaler vos emplacements de menus.

Dans le fichier [functions.php](functions.md), ajouter le code ci-dessous :

```
register_nav_menus(
    array(
        'main-menu' => 'Description du menu',
        'footer-menu' => 'Description du menu footer',
    )
);
```

la fonction register_nav_menus() signale à WordPress qu'il y aura des menus.
Cette fonction prend en paramètre un tableau dont les éléments possède une clé et une valeur.

La clé est le nom de l'emplacement du menu.
La valeur est la description de l'emplacement du menu.

Maintenant, vous avez un nouvel onglet dans le back-office :

![cover](https://github.com/BloomPhilippe/wp-base-theme/blob/master/images/avec-menu.png)


## Créer votre menu via le backoffice.

- Aller dans le backoffice (l'administration), dans apparence et menu.
- Ecrire le nom de votre menu et cliquer sur créer menu

![cover](https://github.com/BloomPhilippe/wp-base-theme/blob/master/images/avec-menu-2.png)

- Lier vos pages, articles ou catégories à votre menu

![cover](https://github.com/BloomPhilippe/wp-base-theme/blob/master/images/avec-menu-3.png)

- Si vous avez plusieurs emplacement de menu (menu principal et menu footer), selectinner l'emplacement adéquat.

![cover](https://github.com/BloomPhilippe/wp-base-theme/blob/master/images/avec-menu-4.png)

- Cliquer sur enregistrer le menu

## Afficher son menu dans les templates.




---

[<< Précédent](assets.md) | [Suivant >>](traduction.md)



