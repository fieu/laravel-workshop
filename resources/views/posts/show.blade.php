@extends('app')
@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8">
        <div class="max-w-3xl mx-auto">
            <div class="mx-3 space-y-6">
                <div>
                    <h1 class="text-xl">
                        <a class="hover:underline" href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                        <span> &bull; </span><span class="tracking-wide text-sm text-red-700">[<a href="{{ route('posts.delete', $post) }}">DELETE</a>]</span>
                        <span> &bull; </span><span class="tracking-wide text-sm text-green-700">[<a href="{{ route('posts.delete', $post) }}">EDIT</a>]</span>
                    </h1>
                    <p>{{ $post->body }}</p>
                </div>
                <a class="hover:underline text-blue-700" href="{{ route('posts.index') }}">Go back</a>
            </div>
        </div>
    </div>
@endsection
