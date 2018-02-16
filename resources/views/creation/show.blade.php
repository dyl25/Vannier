@extends('layouts.app')

@section('title')
{{ $creation->name }}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <article>
            <div class="row">
                <img class="responsive-img" src="{{ asset($creation->image) }}" >
                <h2>{{ $creation->name }}</h2>
                <p>
                    @foreach($creation->categories as $category)
                    <span class="chip">{{ $category->name }}</span>
                    @endforeach
                </p>
            </div>
            <hr>
            <p class="flow-text">{{ $creation->description }}</p>
        </article>
    </div>
</div>
@endsection