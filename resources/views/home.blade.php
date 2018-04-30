@extends('layouts.app')

@section('title')
Brins d'osier - Accueil
@endsection

@section('content')
<div class="row">
    <section class="slider">
        <ul class="slides">
            <li>
                <img src="{{asset('img/creations/panier1.jpg')}}"> <!-- random image -->
                <div class="caption center-align">
                    <h3>This is our big Tagline!</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img src="{{asset('img/creations/panier2.jpg')}}"> <!-- random image -->
                <div class="caption left-align">
                    <h3>Left Aligned Caption</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img src="{{asset('img/creations/bg-main.jpg')}}"> <!-- random image -->
                <div class="caption right-align">
                    <h3>Right Aligned Caption</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img src="{{asset('img/creations/panier2.jpg')}}"> <!-- random image -->
                <div class="caption center-align">
                    <h3>This is our big Tagline!</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
        </ul>
    </section>
</div>

<div class="container">
    <section class="row limit-height-main" >
        <h2>Mes créations</h2>
        @forelse($creations as $creation)
        <div class="col s12 m4">
            <article class="card medium hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                    <a href="{{ route('creations.show', $creation->id) }}"><img class="activator responsive-img" src="{{ asset('img/creations/'.$creation->image) }}"></a>
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">{{ $creation->name }}</span>
                    <p>{!! str_limit($creation->description, 150) !!}</p>
                    <p>id= {{$creation->id}}</p>
                </div>
                <div class="card-action">
                <a href="{{ route('creations.show', $creation->id) }}">Voir la création</a>
                <a href="#">Créé le {{$creation->created_at->format('d/m/Y')}}</a>
                </div>
            </article>
        </div>
        @empty
        <div class="col m5 offset-m3 offset-s3">
            <div class="card-panel">
                <p class="center-align">Il n'y a aucune création pour le moment.</p>
            </div>
        </div>
        @endforelse
    </section>
</div>

<div id="mainContent">
    <div class="container">
        <section class="row">
            <div class="valign-wrapper">
                @foreach($galeryCreations as $creation)
                <div class="col m4">                   
                    <img class="materialboxed responsive-img" src="{{ asset('img/creations/'.$creation->image) }}">
                </div>
                @endforeach
            </div>
        </section>
    </div>
</div>

<div class="container">
    <section class="row">
        <h2>Mes billets</h2>
        @forelse($articles as $article)
        <div class="col s12 m4">
            <article class="card small hoverable">
                <div class="card-content">
                    <a href="{{ route('articles.show', $article->id) }}" class="card-title grey-text text-darken-4">{{ $article->title }}</a>
                    <p>{!! str_limit($article->content, 150) !!}</p>
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
                <p class="center-align">Il n'y a aucun billet pour le moment.</p>
            </div>
        </div>
        @endforelse
    </section>
</div>
@endsection