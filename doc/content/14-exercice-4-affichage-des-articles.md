# Exercice 5 (Affichage des articles)

Afin d'afficher l'ensemble de vos articles sur la page, ajoutez à votre view index.blade.php ce code !

```html
@extends('layout')

@section('content')

    <div id="wrapper">
        <div id="page"class="container">
            <h1> Articles </h1>
                <ul class="style1">
										<!-- Une boucle qui récupère les articles depuis la base de données -->
                    @forelse($articles as $article)  
                        <li class="first">
                            <h3>{{$article->title}}</h3>
                        </li>
                        <p>{{$article->body}}</a></p>
                        @empty
                        <p>Your blog is empty! <a href="http://localhost:8000/create">Create your first article!</a</p>
                    @endforelse
                </ul>
        </div>
    </div>

@endsection
```

Créez un article puis admirez !

![Untitled%201.png](content/Untitled%201.png)

N'hésitez pas à customiser le blog comme bon vous semble !
