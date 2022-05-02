@extends('./layouts.entreprise')

@section('content')

            <style>
                            ul.gallery{    
            margin-left: 3vw;     
            margin-right:3vw;  
            }    

            .zoom {      
            -webkit-transition: all 0.35s ease-in-out;    
            -moz-transition: all 0.35s ease-in-out;    
            transition: all 0.35s ease-in-out;     
            cursor: -webkit-zoom-in;      
            cursor: -moz-zoom-in;      
            cursor: zoom-in;  
            }     

            .zoom:hover,  
            .zoom:active,   
            .zoom:focus {
            /**adjust scale to desired size, 
            add browser prefixes**/
            -ms-transform: scale(2.5);    
            -moz-transform: scale(2.5);  
            -webkit-transform: scale(2.5);  
            -o-transform: scale(2.5);  
            transform: scale(2.5);    
            position:relative;      
            z-index:100;  
            }

            /**To keep upscaled images visible on mobile, 
            increase left & right margins a bit**/  
            @media only screen and (max-width: 768px) {   
            ul.gallery {      
            margin-left: 15vw;       
            margin-right: 15vw;
            }

            /**TIP: Easy escape for touch screens,
            give gallery's parent container a cursor: pointer.**/
            .DivName {cursor: pointer}
            }
            </style>
           <!-- section -->
           <div class="row" style="width: 100%">
            <div class="col-3">
                <div class="card card-widget">
                    <div class="card-body gradient-3">
                        <div class="media">
                            <span class="card-widget__icon"><i class="icon-home"></i></span>
                            <div class="media-body">
                                <h2 class="card-widget__title">{{$jobcount}}</h2>
                                <h5 class="card-widget__subtitle">OFFRES</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card card-widget">
                    <div class="card-body gradient-4">
                        <div class="media">
                            <span class="card-widget__icon"><i class="icon-tag"></i></span>
                            <div class="media-body">
                                <h2 class="card-widget__title">20</h2>
                                <h5 class="card-widget__subtitle">CANDIDATURES</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card card-widget">
                    <div class="card-body gradient-4">
                        <div class="media">
                            <span class="card-widget__icon"><i class="icon-emotsmile"></i></span>
                            <div class="media-body">
                                <h2 class="card-widget__title">1002</h2>
                                <h5 class="card-widget__subtitle">ACCEPTÉS</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card card-widget">
                    <div class="card-body gradient-9">
                        <div class="media">
                            <span class="card-widget__icon"><i class="icon-ghost"></i></span>
                            <div class="media-body">
                                <h2 class="card-widget__title">420</h2>
                                <h5 class="card-widget__subtitle">REFUSÉS

                                    
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
        <!-- end section -->
    
    </div> 

    <div class="row" style="padding-right: 10px"> 
        <div class="col-8">
        <a data-toggle="modal" data-target="#exampleModal" href="https://wrappixel.com/templates/ampleadmin/" style="font-size:18px;" target="_blank" class="btn gradient-4 hidden-xs hidden-sm waves-effect waves-light" > Créer une offre</a>
        </div>
        <div class="col-4"> 
           <input type="search" class="form-control" style="border-radius: 50px" placeholder="RECHERCHER" aria-label="Search Dashboard">
        </div>
    </div>

    
        <div class="card" style="margin-top: 20px">
            <div class="card-body">
                <h4 class="card-title">MES OFFRES</h4>
               
                <div class="table-responsive">
                    <table class="table  verticle-middle">
                        <thead>
                            <tr>
                                <th scope="col" class="text-danger">N°</th>
                                <th scope="col">AFFICHE</th>
                                <th scope="col">INTITULÉ</th>
                                <th scope="col">DOMAINE</th>
                                <th scope="col">NOMBRE DE POST</th>
                                <th scope="col">STATUT	</th>
                                <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($job as $job)                                                                          
                            <tr>
                                <td> {{$nombre++}}</td>
                                <td> <img src="{{$job->affiche}}" class="thumbnail zoom" width="100px" alt=""></td>
                                <td>{{$job->title}}</td>
                                <td>
                                    {{$job->categorie}}
                                </td>
                                <td>{{$job->nombre}}	</td>
                                <td>
                                    @if ($job->statut === "active")
                                    <span class="label gradient-1 btn-rounded">EN COURS</span> 
                                    @endif
                                    @if ($job->statut === "expire")
                                    <span class="label gradient-2 btn-rounded">EXPIRÉ ...	</span>
                                    @endif
                                    @if ($job->statut === "Annuler")
                                    <span class="label gradient-3 btn-rounded">EN COURS ...	</span>
                                    @endif                                    
                                </td>
                                <td><span style="font-size: 20px;"><a href="#" data-toggle="tooltip" data-placement="top" title="voir"><i style="margin-right:15px;" class="fa fa-eye text-info"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="Modifier"><i class="fa fa-pencil text-success m-r-8"></i> </a><a href="#" data-toggle="tooltip" data-placement="top" title="ARCHIVER"><i style="margin-left:10px;color:orange" class="fa fa-archive"></i></a>
                                    @if ($job->statut=="active")
                                    <a href="{{route('jobexpire',$job->id)}}" data-toggle="tooltip" data-placement="top" title="Annuler"><i style="margin-left:10px;" class="fa fa-close text-danger"> 
                                    @else
                                    <a href="{{route('jobrelance',$job->id)}}" data-toggle="tooltip" data-placement="top" title="Relancer"><i style="margin-left:10px;" class="fa fa-check text-success">   
                                    @endif
                                   
                                    </i></a></span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


<div class="modal fade" id="exampleModal" tabindex="-1"  >
    <div class="modal-dialog">
        <div class="modal-content" >
        <div class="form-input-content">
            <div class="card login-form mb-0" >
                <div class="card-body pt-5">
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
                            <option style="color:black" value="CTT">stage</option>
                            <option style="color:black" value="CUI">Interim</option>
                            <option style="color:black" value="CAE">Benevolat</option>
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
                        <input id="expiration" style="height: 50px;border-radius:0"  type="date" class="form-control @error('expiration') is-invalid @enderror" name="expiration" value="{{ old('expiration') }}" required autocomplete="expiration" autofocus>

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
    </div>
    </div>
</div>
        
    </div>
</div>
    
    
        
@endsection
