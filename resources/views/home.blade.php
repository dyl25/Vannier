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
        <div class="col m4">
            <div class="card medium hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator responsive-img" src="{{ asset('img/creations/'.$creation->image) }}">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">{{$creation->name}}<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">{{$creation->name}}<i class="material-icons right">close</i></span>
                    <p>{{$creation->description}}</p>
                </div>
            </div>
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
        <h2>Mes billets d'humeur</h2>
        @forelse($articles as $article)
        <div class="col m4">
            <article class="card small hoverable">
                <div class="card-content">
                    <span class="card-title">{{$article->title}}</span>
                    <p>{{$article->content}}</p>
                </div>
                <div class="card-action">
                    <a href="#">Id = {{$article->id}}</a>
                    <a href="#">This is a link</a>
                    <a href="#">This is a link</a>
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