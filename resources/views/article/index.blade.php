@extends('layouts.app')

@section('title')
Brins d'osier - Articles
@endsection

@section('content')
<div class="container">
    <section class="row limit-height-main" >
        <div class="row">
            <h2>Articles</h2>
            <div class="input-field col m6">
                <i class="material-icons prefix">search</i>
                <input type="search" name="searchProduct" id="searchProduct">
                <label for="searchPrdouct">Recherche</label>
            </div>
        </div>
        <hr>
        <div class="row">
            @forelse($articles as $article)
            <div class="col s12 m4">
                <article class="card small hoverable">
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">{{ $article->title }}</span>
                        <p>{{ str_limit($article->content, 150) }}</p>
                        <p>id= {{$article->id}}</p>
                    </div>
                    <div class="card-action">
                    <a href="{{ route('articles.show', $article->id) }}">Voir l'article</a>
                    <a href="#">Créé le {{$article->created_at->format('d/m/Y')}}</a>
                    </div>
                </article>
            </div>
            @empty
            <div class="col m5 offset-m3 offset-s3">
                <div class="card-panel">
                    <p class="center-align">Il n'y a aucun article pour le moment.</p>
                </div>
            </div>
            @endforelse
        </div>
    </section>

    {{ $articles->links('vendor.pagination.default') }}

</div>
@endsection