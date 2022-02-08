# Exercice 1 (Migrations)

Pour mettre en place la base de données, il faut lancer la commande `$ sail artisan migrate`

```bash
> sail artisan migrate
Migration table created successfully.
Migrating: 2014_10_12_000000_create_users_table
Migrated: 2014_10_12_000000_create_users_table (29.64ms)
Migrating: 2014_10_12_100000_create_password_resets_table
Migrated: 2014_10_12_100000_create_password_resets_table (27.68ms)
Migrating: 2019_08_19_000000_create_failed_jobs_table
Migrated: 2019_08_19_000000_create_failed_jobs_table (36.77ms)
```

Cette commande va "migrer" tout les structures de base de données. (les tables et leurs colonnes respective)

Pour notre cas, il faut créer un autre migration pour les articles de notre site web.

`$ sail artisan make:migration create_posts_table`

Ensuite le fichier crée ce retrouve dans `database/migrations/XXX_XX_XX_XXXXXX_create_posts_table.php`

Il faut ajouter a la table 2 colonnes

`title` de type `string`

`body` de type `text`

[Database: Migrations](https://laravel.com/docs/8.x/migrations#creating-columns)
