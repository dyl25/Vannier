@extends('admin.layouts.app')

@section('title')
Vue de l'article {{$article->title}}
@endsection

@section('content')
<!-- Articles table -->
<article class="card-panel grey lighten-4 hoverable">
    <div class="row">
        <div class="col m8">
            <h2>{{ $article->title }}</h2>
            <p>{{ $article->content }}</p>
        </div>
        <div class="col 4">
            <div class="card-panel">
                <div>
                    <label>Url:</label>
                    <p><a href="{{ route('articles.show', $article->id) }}">{{ route('articles.show', $article->id) }}</a></p>
                </div>
                <div>
                    <label>Créé le:</label>
                    <p>{{ $article->created_at }}</p>
                </div>
                <div>
                    <label>Modifié le:</label>
                    <p>{{ $article->updated_at }}</p>
                </div>
                <hr>
                <a class="btn waves-effect" href="{{ route('admin.articles.edit', $article->id) }}"><i class="material-icons">mode_edit</i> Editer</a>
                <form action="{{ route('admin.articles.destroy', $article->id) }}" method="post" class="inline">
                    @method('DELETE')
                    @csrf
                    <button class="btn waves-effect red" type="submit" name="btSendDelete"><i class="material-icons">delete</i> Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</article>
@endsection
