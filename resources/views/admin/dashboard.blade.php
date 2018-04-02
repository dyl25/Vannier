@extends('admin.layouts.app')

@section('title')
Dashboard
@endsection

@section('content') 
    <div class="row">
        <div class="col m6 s12">
            <div class="card-panel card-stat orange lighten-2 hoverable">
                <p><i class="medium material-icons">shopping_basket</i> Créations</p>
                <p>{{ $creationsCount }}</p>
            </div>
        </div>
        <div class="col m6 s12">
            <div class="card-panel card-stat purple accent-4 hoverable">
                <p><i class="medium material-icons">library_books</i> Billets</p>
                <p>{{ $articlesCount }}</p>
            </div>
        </div>
    </div>

    <!-- creations table -->
    <div class="col s12">
        <div class="card-panel grey lighten-4 hoverable">
            <h2>Liste des dernières créations <i class="material-icons medium">shopping_basket</i></h2>
            <table class="bordered highlight">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Catégorie</th>
                        <th>Date de création</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($creations as $creation)
                    <tr>
                        <td>{{ $creation->id }}</td>
                        <td><a href="{{ route('admin.creations.show', $creation->id) }}">{{ $creation->name }}</a></td>
                        <td>{{ str_limit($creation->description, 50) }}</td>
                        <td>
                        @foreach($creation->categories as $category)
                        <span class="chip">{{ $category->name }}</span> 
                        @endforeach
                        </td>
                        <td>{{ $creation->created_at->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('admin.creations.edit', $creation->id) }}"><i class="material-icons tooltipped" data-position="top" data-delay="50" data-tooltip="éditer">mode_edit</i></a>
                            <form action="{{ route('admin.creations.destroy', $creation->id) }}" method="post" class="button-form">
                                @method('DELETE')
                                @csrf
                                <button type="submit" name="btSendDelete"><i class="material-icons red-text">delete</i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Articles table -->
    <div class="col s12">
        <div class="card-panel grey lighten-4 hoverable">
            <h2>Liste des dernières articles <i class="material-icons medium">library_books</i></h2>
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
                            <form action="{{ route('admin.articles.destroy', $article->id) }}" method="post" class="button-form">
                                @method('DELETE')
                                @csrf
                                <button type="submit" name="btSendDelete"><i class="material-icons red-text">delete</i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
