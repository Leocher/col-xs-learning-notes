@extends('app')

@section('content')
    <h1>Articles</h1>
    <hr>
    @foreach($articles as $article)
        <h2>{{ $article->title }}</h2>
        <p>{{ $article->intro }}</p>
        <article>
            <div class="body">
               {{ $article->content }}
            </div>
        </article>
    @endforeach
@endsection