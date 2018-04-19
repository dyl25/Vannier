@extends('admin.layouts.app')

@section('title')
Modification d'un article
@endsection

@section('content')
<section class="row">
    <h2>Modifier un article</h2>

    @if(count($errors))
    @include('admin.layouts.errors')
    @endif 

    <form method="POST" action="{{ route('admin.articles.update', $article->id) }}" enctype="multipart/form-data" class="col s12">
        <fieldset>
            @method('PATCH')
            @csrf
            <!-- Text input-->
            <div class="input-field">
                <input id="title" name="title" type="text" value="{{ $article->title }}" class="validate" required="required">
                <label for="title">Titre</label> 
            </div>

            <!-- Textarea -->
            <div class="row">
                <div class="input-field">
                    <input type="hidden" name="content" id="content" value="{{ $article->content }}">                 
                    <trix-editor input="content" class="validate"></trix-editor>
                </div>
            </div>

            <button name="btSendArticle" class="btn green" type="submit">Modifier l'article</button>
            <input type="reset" value="Réinitialiser le formulaire" class="btn red">

        </fieldset>
    </form>
</section>
@endsection