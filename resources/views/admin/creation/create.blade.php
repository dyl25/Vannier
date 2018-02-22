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

    <form method="POST" action="{{ route('creations.store') }}" class="col s12">
        <fieldset>
            @csrf

            <div class="input-field">
                <select multiple name="category[]">
                    <option value="" disabled selected>Choisir des catégories</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Text input-->
            <div class="input-field">
                <input id="name" name="name" type="text" class="validate" required="required">
                <label for="name">Nom</label> 
            </div>

            <!-- Textarea -->
            <div class="input-field">                  
                <textarea class="materialize-textarea" id="content" name="content" class="validate" required="required"></textarea>
                <label for="content">Description de la création</label>
            </div>

            <button name="btSendCreation" class="btn" type="submit">Ajouter la création</button>

        </fieldset>
    </form>
</section>
@endsection