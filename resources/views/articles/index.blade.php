@extends('app')

@section('title', 'Articles')

@section('content')
    <h1>Articles</h1>
    <em><a href='/articles/create'>Create a New Article</a></em>
    <hr>
    @foreach ($articles as $article)
    <article>
        <h2><a href='{{ action('ArticlesController@show', [$article->id]) }}'>{{ $article->title }}</a></h2>
        <div class="body">
            {{ $article->body }}
        </div>
    </article>
    @endforeach
@stop


