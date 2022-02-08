## Créer votre premier projet Laravel

Pour créer un nouveau projet Laravel, il faut executer la commande :

`curl -s "https://laravel.build/blog?with=mysql" | bash`

`cd blog`

Maintenant vous pouvez lancer le projet pour qu'on puisse voir sur le navigateur

`./vendor/bin/sail up -d`

Pour exécuter des commandes artisan, on peut faire simplement :

`./vendor/bin/sail artisan`

et pour exécuter des scripts PHP

`./vendor/bin/sail php -v`

> Petit tip ! Vous pouvez mettre en place un alias Bash pour que c'est plus facile d'écrire les commandes

`alias sail='bash vendor/bin/sail'`