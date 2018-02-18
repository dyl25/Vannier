@extends('layouts.app')

@section('title')
Brins d'osier - contact
@endsection

@section('content')
<div id="infoBanner" class="illustrator-container"></div>
<div class="info-container light-blue darken-4" id="mainInfo">
    <div class="container well-pad">
        <div class="row">
            <p class="white-text flow-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
                deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>
    </div>
</div>
<div class="orange accent-3 well-pad info-container">
    <div class="container">
        <div class="row">
            <div class="col m6 s12"><img src="{{ asset('./img/profil.jpg') }}" alt="image de profile" class="circle center-block responsive-img"></div>
            <div class="col m6 s12 white-text">
                <p class="flow-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid info-container">
    <div class="container well-pad">
        <div class="row">
            <h2>Mes tarifs</h2>
            <table class="bordered">
                <thead>
                    <tr>
                        <th>Types de paniers</th>
                        <th>Prix</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Pannier 1</td>
                        <td>10 €</td>
                    </tr>
                    <tr>
                        <td>Pannier 2</td>
                        <td>20 €</td>
                    </tr>
                    <tr>
                        <td>Pannier 3</td>
                        <td>30 €</td>
                    </tr>
                    <tr>
                        <td>Pannier 4</td>
                        <td>40 €</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="row">
    <section class="grey lighten-3 well-pad" id="mainContact">
        <h2 class="center title">CONTACT</h2>
        <div class="row">
            <div class="col m5 s12">
                <p>Contactez nous. Nous vous répondrons au plus vite.</p>
                <p><i class="material-icons">location_on</i> 1070 Anderlecht, Bruxelles <br>
                    Drève Olympique 1</p>
                <p><i class="material-icons">call</i> +00 1515151515</p> 
                <p><i class="material-icons">email</i> myemail@something.com</p>
            </div>
            <div class="col m7 s12">
                @if(count($errors))
                <div class="card-panel red">
                    <ul class="white-text">
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('contact.post') }}" method="POST">
                    <fieldset>
                        @csrf
                        <div class="row">
                            <div class="col m6 s12 input-field">
                                <input class="validate" id="subject" name="subject" type="text" value="{{ old('subject') }}">
                                <label for="subject">Sujet</label>
                            </div>
                            <div class="col m6 s12 input-field">
                                <input class="validate" id="email" name="email" type="email" value="{{ old('email') }}">
                                <label for="email">E-mail</label>
                            </div>
                        </div>
                        <div class="col m12 s12 input-field">
                            <textarea class="materialize-textarea" id="email_content" name="email_content">{{ old('email_content') }}</textarea>
                            <label for="email_content">Votre message</label>
                        </div>
                        <button class="btn right-align" type="submit" name="btSendEmail">Envoyer</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
