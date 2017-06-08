@extends('app')

@section('content')
    <div class="text-center">
        <h1>Articles</h1>
    </div>
    <hr>
    @foreach($articles as $article)
        <h2><a href="{{ action('ArticlesController@show',[$article->id]) }}">{{ $article->title }}</a></h2>
        <p>{{ $article->intro }}</p>
        <article>
            <div class="body">
               {{ $article->content }}
            </div>
        </article>
    @endforeach
@endsection