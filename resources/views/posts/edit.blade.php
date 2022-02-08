@extends('app')
@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tailwindcss/forms@0.3.2/dist/forms.min.css" integrity="sha256-wuwjgngnXj2SKwJy+qNkNDY9B9j0uf9eqjwuXFRSfgI=" crossorigin="anonymous">
@endpush
@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8">
        <div class="max-w-3xl mx-auto">
            <div class="mx-3 space-y-6">
                <div>
                    <form action="{{ route('posts.update', $post) }}" method="POST" class="flex flex-col space-y-4">
                        @csrf
                        <label class="">
                            Title
                            <input name="title" type="text" value="{{ old('title') ?? $post->title  }}">
                        </label>
                        @error('title')
                            <p class="text-red-600 bold">{{ $message }}</p>
                        @enderror
                        <label>
                            Body
                            <input name="body" type="text" value="{{ old('body') ?? $post->body  }}">
                        </label>
                        @error('body')
                        <p class="text-red-600 bold">{{ $message }}</p>
                        @enderror
                        <input class="max-w-xs" type="submit" value="Update">
                    </form>
                </div>
                <a class="hover:underline text-blue-700" href="{{ route('posts.index') }}">Go back</a>
            </div>
        </div>
    </div>
@endsection
