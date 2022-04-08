@extends('Backend')
@section('title', 'register')
@section('content')
    <section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">Inscription</h2>
        </div>
    </section>
    <section class="section-content bg padding-y">
        <div class="container">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <header class="card-header">
                        <h4 class="card-title mt-2">Inscription</h4>
                    </header>
                    <article class="card-body">
                        <form action="{{ route('register') }}" method="POST" role="form">
                            @csrf
                            <div class="form-row">
                                <div class="col form-group">
                                    <label for="first_name">nom</label>
                                    <input type="text" class="form-control @error('nom') is-invalid @enderror" name="first_name" id="first_name" value="{{ old('first_name') }}">
                                    @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col form-group">
                                    <label for="last_name">prenom</label>
                                    <input type="text" class="form-control @error('prenom') is-invalid @enderror" name="last_name" id="last_name" value="{{ old('last_name') }}">
                                    @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation">
                                @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-block"> Enregistrer </button>
                            </div>
                            <small class="text-muted">En cliquant sur ce button, vous acceptez <br> nos conditions de confidentialite</small>
                        </form>
                    </article>
                    <div class="border-top card-body text-center">Avez-vous un compte? <a href="{{ route('login') }}">se connecter</a></div>
                </div>
            </div>
        </div>
    </section>
@stop