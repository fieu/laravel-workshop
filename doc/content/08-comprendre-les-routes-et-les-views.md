## Comprendre les routes et les views

Les routes permettent de spécifier au framework toutes les pages qui existent sur votre site internet. 

Une route doit être liée un controller (afin de respecter la MVC). Vous pouvez comparer un controller à une intersection qui permet de dire au framework quelles actions réaliser en fonction de l'action demandé lors de la création de la route.

Afin de créer votre première route, rendez-vous dans le dossier `routes/`

Lors de l'initialisation de votre projet, Laravel vous génère automatiquement une route vers la page d'accueil de votre projet.

Voici le code afin de créer une route avec Laravel.

```php
Route::get('/', function () {
    return view('welcome');
})->name('welcome');
```

Passons au crible ce morceau de code :

`Route` permet de dire au framework que l'on souhaite déclarer une route.

`get` représente la requête qui sera utilisée afin de réaliser l'action souhaitée. Il existe également d'autres requêtes HTTP qui existent, mais pour l'instant, on ne les abordera pas. 

Cependant, si vous êtes curieux, vous pouvez retrouver la liste des requêtes disponible sur la [documentation Mozilla](https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods).

`function()` permet de préciser au framework que vous souhaitez créer une fonction de type [closure](https://www.php.net/manual/fr/class.closure.php) ([logique](https://media1.tenor.com/images/fcab92aa0b24745c837876792d74039e/tenor.gif))

Cette fonction, dans ce cas précis, aura pour seul but de vous afficher une vue, autrement dit, une page appelé welcome.

Et `->name('index.welcome')` nous permet de nommer notre route `welcome` pour l'utilisation facile plus tard quand on va générer des liens avec Laravel. 

En effet, si on change la page lié à la view, si l'on utilise cette instruction, cela permettra de retrouver la bonne route.

Vous pouvez retrouver l'ensemble des vues de votre projet dans le dossier `ressources/views`

Vous y retrouverez un fichier Blade appelé `welcome.blade.php`

> Mais on n'a pas besoin de spécifier le nom complet de la vue lors de la création de la route ?

Laravel est assez intelligent pour savoir que l'ensemble de vos vues sont dans le dossier `ressources/views` . Vous avez juste à spécifier le nom, sans ajouter l'extension `.blade.php`

Cependant, si votre vue est stocké dans un dossier à l'intérieur de votre dossier de vues, il sera nécessaire de préciser le nom de votre dossier puis le nom de la vue.

Par exemple, si à l'intérieur de votre dossier `views`, vous disposez d'un autre dossier appelé `articles` afin d'y stocker l'ensemble de vos articles, vous devrez le spécifier dans la route.

```php
Route::get('/', function () {
    return view('articles.welcome'); 
		// articles est un dossier, welcome est une page contenue dans ce dossier
})->name('articles.index');
```
