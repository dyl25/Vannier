@extends('admin.layouts.app')

@section('title')
Espace article
@endsection

@section('content')
<!-- Articles table -->
<section class="card-panel grey lighten-4 hoverable">
    <h2>Liste des articles <i class="material-icons medium">library_books</i></h2>
    <a href="{{ route('admin.articles.create') }}" class="btn btn-primary">Ajouter un article</a>
    <articles></articles>
    <table class="bordered highlight">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Contenu</th>
                <th>Auteur</th>
                <th>Date de création</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td><a href="{{ route('admin.articles.show', $article->id) }}">{{ $article->title }}</a></td>
                <td>{{ str_limit($article->content, 50) }}</td>
                <td>{{ $article->author->name }}</td>
                <td>{{ $article->created_at->format('d/m/Y') }}</td>
                <td>
                    <a href="{{ route('admin.articles.edit', $article->id) }}"><i class="material-icons tooltipped" data-position="top" data-delay="50" data-tooltip="éditer">mode_edit</i></a>
                    <form action="{{ route('admin.articles.destroy', $article->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" name="btSendDelete"><i class="material-icons red-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="supprimer">delete</i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $articles->links('vendor.pagination.default') }}
</section>
@endsection
