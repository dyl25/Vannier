@extends('layouts.app')

@section('title')
{{ $article->title }}
@endsection

@section('content')
<div class="container">
    <div class="card-panel hoverable">
        <p class="flow-text">{{ $article->content }}</p>
    </div>
</div>
@endsection
