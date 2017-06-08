@extends('app')

@section('content')
    <div class="text-center">
        <h1>{{ $article->title }}</h1>
    </div>
    <hr>
    <p>{{ $article->intro }}</p>
    <article>
        <div class="body">
            {{ $article->content }}
        </div>
    </article>
@endsection