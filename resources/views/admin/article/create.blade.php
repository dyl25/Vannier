@extends('admin.layouts.app')

@section('title')
Ajout d'un article
@endsection

@section('content')
<section class="row">
    <h2>Ajouter un article</h2>

    @if(count($errors))
    @include('admin.layouts.errors')
    @endif 

    <form method="POST" action="{{ route('admin.articles.store') }}" enctype="multipart/form-data" class="col s12">
        <fieldset>
            @csrf

            <!-- Text input-->
            <div class="input-field">
                <input id="title" name="title" type="text" value="{{ old('title') }}" class="validate" required="required">
                <label for="title">Titre</label> 
            </div>

            <!-- Textarea -->
            <div class="input-field">                  
                <textarea class="materialize-textarea" id="content" name="content" class="validate" required="required">{{ old('content') }}</textarea>
                <label for="content">Contenu de l'article</label>
            </div>

            <button name="btSendArticle" class="btn green" type="submit">Ajouter l'article</button>
            <input type="reset" value="Réinitialiser le formulaire" class="btn red">

        </fieldset>
    </form>
</section>
@endsection