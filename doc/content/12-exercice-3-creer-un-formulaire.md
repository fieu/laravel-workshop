# Exercice 3 : Créer un formulaire

Avant tout, créez une route de type `GET` afin de relier la page de création des articles au controller des articles.

Créez un formulaire afin de créer un nouvel article.

Pour en savoir plus sur les formulaires sur Laravel, consultez la documentation.

[Blade Templates](https://laravel.com/docs/8.x/blade#forms)

Pour ce workshop, copiez le code ci-dessus puis créez une view `create.blade.php`.

```html
@extends('layout')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1>New article</h1>

        <form method="POST" action="/articles">
            @csrf <!-- Obligatoire : https://laravel.com/docs/8.x/csrf#csrf-introduction -->
            <div class="field">
                <label class="label" for="title">Title</label>

                <div class="control">
                    <input class="input" type="text" name="title" id="title" value="{{ old('title') }}">
                </div>
                @error('title') 
                    {{ $message }}
                @enderror

            </div>

                <div class="field">

                    <label class="label" for="body">Body</label>

                    <div class="control">

                        <textarea class="textarea" name="body" id="body">{{ old('body') }}</textarea>
                        @error('body')
                        <br>{{ $message }}
                        @enderror

                    </div>

                </div>

                <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit"> Submit</button>
                </div>

            </div>

            </div>
        </form>
    </div>
</div>
@endsection
```