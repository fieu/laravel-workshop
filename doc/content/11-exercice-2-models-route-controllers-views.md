# Exercice 2 (Models, Route, Controllers, Views)

## Créer votre première route

Créez une route de type GET afin de charger une page accessible depuis `localhost/posts`  et reliez cette route à un controller appelé `PostController` reliée à une méthode `index`. 
Le controller ainsi que la méthode sera créé lors de la prochaine étape.

## Créer un contrôleur

Créez un contrôleur appelé `PostController` et créez une méthode `index` afin de pouvoir charger la vue correspondante.

Vous pouvez utiliser `sail artisan make:controller PostController` pour le créer.

La vue devra s'appeler `posts` afin de la créer lors de la prochaine étape.

[Controllers](https://laravel.com/docs/8.x/controllers#writing-controllers)

## Créer un layout avec Blade

Comme expliqué ci-dessus, un layout vous permet d'avoir de définir une structure de page qui pourra être appliqué à vos pages.

Copiez le layout existant afin de le modifier puis créez un layout appelé `page.blade.php` afin de pouvoir l'appliquer à la view qui sera créé lors de la prochaine étape.

[Blade Templates](https://laravel.com/docs/8.x/blade#introduction)

## Créer un view avec Blade

Créez une view appelé `posts.blade.php` comme nom de fichier puis appliquez le layout créé lors de l'étape précédente. Ajoutez-y un titre pour représenter le début de la page dédiée aux articles.

[Blade Templates](https://laravel.com/docs/8.x/blade#introduction)

## Résultat à obtenir

![Untitled.png](content/Untitled.png)

Votre page devrait être accessible en vous rendant sur `localhost/posts` et devrait ressembler à peu près à ceci. Pour l'instant, la page est un peu vide, mais à la fin de ce workshop, vos articles seront affichés !

# Les models

## Notion des models

> Dans le cadre MVC, la lettre "M" signifie "Model". Le modèle est un moyen de gérer la logique commerciale dans toute application basée sur le cadre MVC. Dans Laravel, le modèle est une classe qui représente la structure logique et la relation des tables de données sous-jacentes. Dans Laravel, chaque table de la base de données a un "modèle" correspondant qui nous permet d'interagir avec cette table. Les modèles vous permettent de récupérer, d'insérer et de mettre à jour des informations dans votre tableau de données. Tous les modèles Laravel sont stockés dans le répertoire principal de l'application.

## Créer un model

`sail artisan make:model Post`

Cette commande va créer un model qui s'appelle Post et se retrouve dans le dossier `app/Models/`

## Quelques explications sur CRUD

[CRUD - Wikipédia](https://fr.wikipedia.org/wiki/CRUD)

## Etablir les opérations CRUD dans le controller

Créez les différentes méthodes afin de pouvoir interagir en créant, affichant, mettant à jour et supprimant des articles.

### Create

```php
// soit
$post = new Post(request(['title', 'body']));
$post->save();

// ou si vous souhaitez forcer un titre et un contenu
$post = Post::create([
	'title' => 'My new blog',
	'body' => 'This is my new blog, enjoy',
]);
```

### Read

```php
// Trouver l'instance d'un model
$post = Post::find(1); // cherche le post avec l'id 1

// Afficher le titre du post
echo $post->title;
```

### Update

```php
// Trouver l'instance d'un model
$post = Post::find(1);

// soit
$post->title = 'New Title';
$post->body = 'New Body';
$post->save();

// ou
$post->update([
	'title' => 'New Title';
	'body' = 'New Body',
]);
```

### Destroy

```php
// Trouver l'instance d'un model
$post = Post::find(1);

// Le supprimer
$post->delete();
```

Etablissez les 4 opérations (Create, Read, Update, Delete) dans le PostController.

Pour avoir la structure du code de départ, consultez cet article ou aidez-vous des exemples donnés ci-dessus!

[Simple Laravel CRUD with Resource Controllers | DigitalOcean](https://www.digitalocean.com/community/tutorials/simple-laravel-crud-with-resource-controllers)
