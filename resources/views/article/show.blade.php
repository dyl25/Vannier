@extends('layouts.app')

@section('title')
{{ $article->title }}
@endsection

@section('content')
<div class="container">
    <div class="card-panel hoverable">
        <h2>{{ $article->title }}</h2>
        <p class="flow-text">{!! $article->content !!}</p>
    </div>
</div>
@endsection
