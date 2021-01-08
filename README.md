# Introduction

Auteur : Maxence Zolnieruck

Ce blog a été réalisé dans le cadre d'un TP à l'INSA HdF à l'aide de Symfony.

Veuillez changer la ligne 33 du fichier *.env* situé à la racine du projet afin d'y connecter vore propre base de données.

Si vous souhaitez utiliser la même base de données que moi, executez le fichier install.sql dans votre SGDB.

Version PHP : 7.2

## Ressources

J'ai suivi un tutoriel Symfony réalisé par [Lior](https://www.youtube.com/channel/UCS71mal_TkTW_PpZR9YLpIA) qui est disponible via ce [lien](https://www.youtube.com/watch?v=UTusmVpwJXo&list=PLpUhHhXoxrjdQLodxlHFY09_9XzqdPBW8&ab_channel=LiorCHAMLA).

J'ai utilisé deux templates Bootstrap pour la réalisation de ce projet :

- Une [page de connexion](https://preview.colorlib.com/downloads/free/login-form-v1.zip) que j'ai modifié pour l'adapter à la création de compte de la connexion.
- Pour le blog j'ai utilisé un template classique Bootstrap que j'ai également modifié au niveau des couleurs et des ajouts de fonctionnalités

## Plan de developpement

1. Initialisation de Symfony et création de l'entité Article.
2. Ajout du template du blog au projet et adaptation de la home page pour afficher les articles en BDD.
3. Modifications des fichiers twig du CRUD pour l'entité Article.
4. Création de l'entité Categorie et ajout du lien entre cette entitée et Article via le champ idCategorie.
5. Modification de la page de création et de modification d'un article pour selectionner une catégorie.
6. Création de l'entité User en BDD via *make:user*.
7. Ajout d'une page de connexion et de création de compte via *make:auth* et *make:registration-form*.
8. Ajout du template pour la page de connexion.
9. Adaptation de la page de connexion pour le formulaire de création de compte.
10. Modifications mineures : ajout de titres aux pages, ajout d'un icone, correctifs de styles.

## Aperçu
![Login](https://i.imgur.com/FD06PBG.png)
======
![Home](https://i.imgur.com/biTADSS.png)
======
![Article](https://i.imgur.com/k9xIxcd.png)

