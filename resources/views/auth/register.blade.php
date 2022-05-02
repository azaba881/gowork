@extends('layouts.form')

@section('content') 
<style>
    body
    {
        background-image: url(images/imgs/DIGITALC.jpg) ;
    }
</style>
<div class="container" style="padding-top: 50px;padding-bottom:50px; ">
    <div class="login-form-bg ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="form-input-content">
                        <div class="card login-form mb-0" style="border-radius:0">
                            <div class="card-body pt-5">
                                <a  href="{{route('hme')}}" > <h4 style="color: green">INSCRIVEZ VOUS MAINTENANT</h4></a>
                                <form class="mt-5 mb-5 login-input" method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <input style="border-bottom: 1px solid gray" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nom">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <input style="border-bottom: 1px solid gray" id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus placeholder="Prénoms">
                                            @error('prenom')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <input id="email" style="border-bottom: 1px solid gray" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <select class="form-control" name="type" id="type" style="border-bottom: 1px solid gray">
                                                <option value="Type de profil">Type de profil</option>
                                                <option value="entreprise">Entreprise</option>
                                                <option value="utilisateur">Demandeur d'emploi</option>
                                            </select>
                                            @error('type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror 
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <input id="password" style="border-bottom: 1px solid gray" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Mot de passe">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <input id="password-confirm" style="border-bottom: 1px solid gray" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmer le mot de passe">
                                        </div>
                                    </div>

                                   
                                       
                                            <div class="">
                                                <div class="form-check mb-3">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" value="true" required>ACCEPTER LES <br> POLITIQUES DE LA PLATEFORME</label>
                                                </div>
                                                
                                            </div>
                                       
                                   
                                    

                                    <div class="form-group row mb-0">
                                        <button style="width: 100%;background-color:green;" type="submit" class="btn btn-primary">
                                          <h4 style="color: white">INSCRIPTION</h4>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
@endsection
