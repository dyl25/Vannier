@extends('layouts.app')

@section('title')
Brins d'osier - Connexion
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col m4 offset-m4">
            <div class="card-panel">
                <form method="POST" action="{{ route('login') }}">
                    <fieldset>
                        <legend class="center">Connexion</legend>
                        @csrf

                        <div class="row">

                            <div class="col s12 input-field">
                                <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <label for="email">E-Mail Address</label>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col s12 input-field">
                                <input id="password" type="password" class="validate" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <label for="password">Password</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s12">
                                    <input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">Remember Me</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col offset-m4">
                                <button type="submit" class="btn">
                                    Login
                                </button>
                            </div>
                        </div>
                        <div class="row">
                                <a href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    <fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
