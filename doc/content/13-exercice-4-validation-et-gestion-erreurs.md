# Exercice 4 (Validation & Gestion d'erreurs)

Maintenant qu'on peux stocker les informations donnés par l'utilisateur, les prochaines étapes sont de valider les données envoyées, et afficher les messages d'erreurs si il faut.

[Validation](https://laravel.com/docs/8.x/validation#the-at-error-directive)

[Validation](https://laravel.com/docs/8.x/validation#quick-writing-the-validation-logic)

```php
class PostController extends Controller {

    public function create(Request $request)
    {
        // Definir les contraintes
        $validated = $request->validate([
            'title' => 'required|min:2|max:20', // le champ title est requis, et le contenu doit être compris entre 2 et 20 caractères.
            'body'  => 'required|min:5|max:255',
        ]);

        /* 
        * Si l'un des contraintes échoue, la page retournera au formulaire
        * avant automatiquement, donc Laravel va meme pas toucher le code en bas.
        */

        // $validated est de type array, qui contient tout les attributs validé
        $post = Post::create($validated);

        return redirect()->route('posts.show', $post);
    }
}
```

Voici le rendu que vous devriez avoir :
N'hésitez pas à customiser le formulaire à votre guise en ajoutant un peu de CSS 🎨

![CleanShot_2021-05-11_at_16.33.312x.png](content/CleanShot_2021-05-11_at_16.33.312x.png)

Testez le formulaire puis créez des articles !