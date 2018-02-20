@extends('admin.layouts.app')

@section('title')
Ajout d'une création
@endsection

@section('content')
<section class="row">
    <h2>Ajouter une création</h2>
    <form>
        <fieldset>

            <!-- Text input-->
            <div class="input-field">
                <input id="title" name="title" type="text" required="required">
                <label for="title">Nom</label> 
            </div>

            <!-- Textarea -->
            <div class="input-field">                  
                <textarea class="materialize-textarea" id="content" name="content" required="required"></textarea>
                <label for="content">Description de la création</label>
            </div>

            <button name="btSendArticle" class="btn" type="submit">Ajouter la création</button>

        </fieldset>
    </form>
</section>
@endsection