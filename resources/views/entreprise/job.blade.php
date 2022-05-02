@extends('./layouts.entreprise')

@section('content')

            <div class="container-fluid card" style="width: 50%">
            
            <form method="POST" class="mt-3 mb-5 login-input" action="{{ route('creerjob') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group row">
                    <label for="affiche" class="col-md-12 col-form-label">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-12">
                        <input id="affiche" style="height: 50px;border-radius:0"  type="file" class="form-control @error('affiche') is-invalid @enderror" name="affiche" value="{{ old('affiche') }}" required autocomplete="affiche" autofocus>

                        @error('affiche')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="title" class="col-md-12 col-form-label">Titre du job</label>

                    <div class="col-md-12">
                        <input id="title" style="height: 50px;border-radius:0"  type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nombre" class="col-md-12 col-form-label">Nombre de post</label>

                    <div class="col-md-12">
                        <input id="nombre" style="height: 50px;border-radius:0"  type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

                        @error('nombre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ville" class="col-md-12 col-form-label">Ville</label>

                    <div class="col-md-12">
                        <select name="ville" class="form-control @error('ville') is-invalid @enderror" data-live-search="true" value="{{ old('ville') }}" autocomplete="ville" autofocus title="toutes les villes" data-size="5" data-container="body" required>
                            <option style="color:black" value="" selected disabled hidden>Choose here</option>
                            <option style="color:black" value="cotonou">cotonou</option>
                            <option style="color:black" value="parakou">parakou</option>
                            <option style="color:black" value="natitingou">natitingou</option>
                            <option style="color:black" value="nikki">nikki</option>
                            <option style="color:black" value="abomey">abomey</option>
                            <option style="color:black" value="ketou">ketou</option>
                            <option style="color:black" value="perou">perou</option>
                            <option style="color:black" value="kandi">kandi</option>
                        </select>

                        @error('ville')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="type" class="col-md-12 col-form-label">Type de l'offre</label>

                    <div class="col-md-12">
                        <select name="type" class="form-control @error('type') is-invalid @enderror" data-live-search="true" value="{{ old('type') }}" autocomplete="ville" autofocus title="tout les types" data-size="5" data-container="body" required>
                            <option value="" selected disabled hidden>Choisissez ici</option>
                            <option style="color:black" value="CDI">CDI</option>
                            <option style="color:black" value="CDD">CDD</option>
                            <option style="color:black" value="STAGE">STAGE</option>
                            <option style="color:black" value="INTERIM">INTÉRIM</option>
                            <option style="color:black" value="REMOTE">REMOTE</option>
                        </select>
                        @error('type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nombre" class="col-md-12 col-form-label">Expérience</label>

                    <div class="col-md-12">
                        <select name="experience" class=" form-control @error('experience') is-invalid @enderror" data-live-search="true" value="{{ old('experience') }}" autocomplete="experience" autofocus title="toutes les expériences" data-size="5" data-container="body" required>
                            <option value="" selected disabled hidden>Choisissez</option>
                            <option style="color:black" value="Débutant">Débutant</option>
                            <option style="color:black" value="Moins de 1 an">Moins de 1 an</option>
                            <option style="color:black" value="De 1 à 3 ans">De 1 à 3 ans</option>
                            <option style="color:black" value="De 3 à 5 ans">De 3 à 5 ans</option>
                            <option style="color:black" value="De 5 à 10 ans">De 5 à 10 ans</option>
                            <option style="color:black" value="De 10 à 20 ans">De 10 à 20 ans</option>
                            <option style="color:black" value="Plus de 20 ans">Plus de 20 ans</option>
                        </select>
                        @error('experience')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong> 
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="salaire" class="col-md-12 col-form-label">salaire</label>

                    <div class="col-md-12">
                        <input id="salaire" style="height: 50px;border-radius:0"  type="text" class="form-control @error('salaire') is-invalid @enderror" name="salaire" value="{{ old('salaire') }}" required autocomplete="salaire" autofocus>

                        @error('salaire')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="categorie" class="col-md-12 col-form-label">Catégories</label>

                    <div class="col-md-12">
                        <select name="categorie" class=" form-control @error('categorie') is-invalid @enderror" data-live-search="true" value="{{ old('categorie') }}" autocomplete="categorie" autofocus  data-size="5" data-container="body" required>
                            <option style="color:black" value="Comptabilité">Comptabilité</option>
                            <option style="color:black" value="Bancaire">Bancaire</option>
                            <option style="color:black" value="Design & Art">Design & Art</option>
                            <option style="color:black" value="Assurance">Assurance</option>
                            <option style="color:black" value="Développement">Développement</option>
                            <option style="color:black" value="Medicine">Medicine</option>
                            <option style="color:black" value="Marketing">Marketing</option>
                            <option style="color:black" value="Management">Management</option>
                        </select>
                        @error('categorie')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong> 
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-12 col-form-label">description</label>

                    <div class="col-md-12">
                        <input id="description" style="height: 50px;border-radius:0"  type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="expiration" class="col-md-12 col-form-label">expiration</label>

                    <div class="col-md-12">
                        <input id="expiration" style="height: 50px;border-radius:0"  type="text" class="form-control @error('expiration') is-invalid @enderror" name="expiration" value="{{ old('expiration') }}" required autocomplete="expiration" autofocus>

                        @error('expiration')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>                                        
 
                <div class="form-group">
                    
                        <button  type="submit" style="background-color: green;width:100%;" class="btn" style="width: 100%">
                           Créer l'offre
                        </button>
                </div>
               
            </form>
         
        </div>

@endsection

