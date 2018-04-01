@extends('admin.layouts.app')

@section('title')
Vue de la création {{$creation->name}}
@endsection

@section('content')
<!-- Articles table -->
<article class="card-panel grey lighten-4 hoverable">
    <div class="row">
        <div class="col m9">
            <img src="{{asset('img/creations/'.$creation->image)}}" alt="Image de la création" class="responsive-img">
        </div>
        <div class="col m3">
            <div class="card-panel">
                <div>
                    <label>Url:</label>
                    <p><a href="{{ route('creations.show', $creation->id) }}">{{ route('creations.show', $creation->id) }}</a></p>
                </div>
                <div>
                    <label>Catégories:</label>
                    <p>
                        @foreach($creation->categories as $category)
                        <span class="chip">{{ $category->name }}</span>
                        @endforeach
                    </p>
                </div>
                <div>
                    <label>Créé le:</label>
                    <p>{{ $creation->created_at }}</p>
                </div>
                <div>
                    <label>Modifié le:</label>
                    <p>{{ $creation->updated_at }}</p>
                </div>
                <hr>
                <a class="btn waves-effect" href="{{ route('admin.creations.edit', $creation->id) }}"><i class="material-icons">mode_edit</i> Editer</a>
                <form action="{{ route('admin.creations.destroy', $creation->id) }}" method="post" class="inline">
                    @method('DELETE')
                    @csrf
                    <button class="btn waves-effect red" type="submit" name="btSendDelete"><i class="material-icons">delete</i> Supprimer</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col m8">
            <h2>{{ $creation->name }}</h2>
            <p>{{ $creation->description }}</p>
        </div>
        
    </div>
</article>
@endsection
