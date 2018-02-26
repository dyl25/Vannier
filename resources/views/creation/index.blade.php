@extends('layouts.app')

@section('title')
Brins d'osier - Mes créations
@endsection

@section('content')
<div class="container">
    <section class="row limit-height-main" >
        <div class="row">
            <h2>Mes créations</h2>
            <div class="input-field col m6">
                <i class="material-icons prefix">search</i>
                <input type="search" name="searchProduct" id="searchProduct">
                <label for="searchPrdouct">Recherche</label>
            </div>
        </div>
        <hr>
        <div class="row">
            @forelse($creations as $creation)
            <div class="col s12 m4">
                <article class="card large hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                        <a href="{{ route('creations.show', $creation->id) }}"><img class="activator responsive-img" src="{{ asset('img/creations/'.$creation->image) }}"></a>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">{{ $creation->name }}</span>
                        <p>{{ str_limit($creation->description, 150) }}</p>
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
        </div>
    </section>

    {{ $creations->links('vendor.pagination.default') }}

</div>
@endsection