@extends('admin.layouts.app')

@section('title')
Ajout d'une création
@endsection

@section('content')
<section class="row">
    <h2>Ajouter une création</h2>

    @if(count($errors))
    @include('admin.layouts.errors')
    @endif 

    <form method="POST" action="{{ route('admin.creations.store') }}" enctype="multipart/form-data" class="col s12">
        <fieldset>
            @csrf

            <!-- Checkbox -->
            <div class="input-field">
                <select multiple name="category[]">
                    <option value="" disabled>Choisir des catégories</option>
                    @foreach($categories as $key => $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Text input-->
            <div class="input-field">
                <input id="name" name="name" type="text" value="{{ old('name') }}" class="validate" required="required">
                <label for="name">Nom</label> 
            </div>

            <!-- Textarea -->
            <div class="input-field">                  
                <input type="hidden" name="content" id="content">                 
                <trix-editor input="content" class="validate"></trix-editor>
            </div>

            <!-- File -->
            <div class="file-field input-field">
                <div class="btn">
                    <span>Image de la création</span>
                    <input type="file" name="creationImage">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" name="filepath">
                </div>
            </div>

            <button name="btSendCreation" class="btn green" type="submit">Ajouter la création</button>
            <input type="reset" value="Réinitialiser le formulaire" class="btn red">

        </fieldset>
    </form>
</section>
@endsection