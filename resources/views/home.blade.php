@extends('layouts.app')

@section('content')

    <!-- Start of Wrapper -->
    <div class="" style="width: 100%"> 
        <!-- Start of Form -->
        <form class="row mt-3 mb-5 login-input" style="width:100%" action="{{ url('searchjob') }}" method="post">
            {{ csrf_field() }}

            <!-- Start of keywords input -->
            <div class="col-md-2 col-sm-12 ">
                
                <input type="text" class="form-control" name="motcle" id="search-keywords" placeholder="Mot clée">
            </div>

            <div class="col-md-2 col-sm-12 search-villes"> 
              
                <select name="ville" class="form-control" id="search-categories" data-live-search="true" title="touts catégories" data-size="5" data-container="body">
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
            </div>

            <!-- Start of category input -->
            <div class="col-md-3 col-sm-12 search-categories"> 
              
                <select name="domaine" class="form-control" id="search-categories" data-live-search="true" title="touts catégories" data-size="5" data-container="body">
                    <option style="color:black" value="">Domaine</option>
                    <option style="color:black" value="Comptabilité">Comptabilité</option>
                    <option style="color:black" value="Bancaire">Bancaire</option>
                    <option style="color:black" value="Design & Art">Design & Art</option>
                    <option style="color:black" value="Assurance">Assurance</option>
                    <option style="color:black" value="Développement">Développement</option>
                    <option style="color:black" value="Medicine">Medicine</option>
                    <option style="color:black" value="Marketing">Marketing</option>
                    <option style="color:black" value="Management">Management</option>
                </select>
            </div>

            <!-- Start of location input -->
            <div class="col-md-3 col-sm-12 search-location">
                
                <select name="type" id="search-location" placeholder="Location" class="form-control" data-live-search="true" title="touts les villes" data-size="5" data-container="body">
                    <option value="" selected disabled hidden>Type de contrat</option>
                    <option style="color:black" value="CDI">CDI</option>
                    <option style="color:black" value="CDD">CTT</option>
                    <option style="color:black" value="CTT">stage</option>
                    <option style="color:black" value="CUI">Interim</option>
                    <option style="color:black" value="CAE">Benevolat</option>
                </select>
            </div>

            <!-- Start of submit input -->
            <div class="col-md-2 col-sm-12">
                <button type="submit" class="btn btn-success btn-large"><i class="fa fa-search"></i>Chercher</button>
            </div>

        </form>
        <!-- End of Form -->
        @isset($search)
        <div class="extra-info pt20">
            <span class="text-left text-dark"><b>{{ count($job) }}</b> Offres d{{"'"}}emploi pour  <b>vous.</b></span>
        </div> <br>
        @endisset 

    </div>
    <!-- End of Wrapper -->

    <div class="row" style="width: 100%;">

           @if ($nombre ?? '')
           @foreach ($job as $jobs)

            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="card" > 
                   
                    <div style="height: 150px;width: 100%;background-image: url({{$jobs->affiche}});background-size: cover;background-repeat: no-repeat;padding:10px;">
                        <div  style="background-color: green;border-radius:50%;padding:20px;width:80px;height:80px;color:white;text-align:center;">
                            <h4 style="color: white">15</h4>
                            <p>/ Jan</p>
                        </div>  
                    </div>

                    <div class="white-box analytics-info" style="padding: 8px;">
                        <ul style="display: flex;flex-direction: row;justify-content: space-between;align-items: center;">
                            <li>
                                <h3 style="font-size: 15px;" class="box-title">{{$jobs->title}}</h3>
                            </li>
                            <li  class="text-right"> <h5 class="box-title"> <a href="{{route('jobdetail',$jobs->id)}}" style="margin-right:5px;"><i style="color: green" class="fa fa-eye"></i></a> <span style="font-size:15px;padding: 7px;background-color: red;color: white;background-origin: content-box;"> {{$jobs->type}}</span></h5> </li>
                        </ul>
                        <p style="height: 50px;">{{$jobs->description}}  </p>                           
                                <div><a style="width: 100%;background-color:green;border:none;" data-toggle="modal" data-target="#exampleModal" href=""  class="btn btn-info">Postuler maintenant</a></div>
                    </div>
                </div>
                
            </div>
             
     
       @endforeach
       
    </div>
    @if ($nombre > 8)
                <div class="col-lg-12" >
                    <div class="d-flex justify-content-center" style="margin-top:20px">
                                {!! $job->links() !!}
                    </div>
                </div>
    @endif
    @else       
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Aucune offre d'emploi en cours</h4>
                    <div class="card-content">
                        <div class="alert alert-success">
                            <h4 class="alert-heading">Desolé!</h4>
                            <p>Nous n'avons enregistré aucune offres pour vous </p>
                            <hr>
                            <p class="mb-0">Pour le moment vous serez notifié immédiaatement à l'arrivée d'une nouvelle offre</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        @endif
        
    <div>
         
        
             
        <div class="modal fade" id="exampleModal" tabindex="-1"  >
            <div class="modal-dialog">
                <div class="modal-content" >
                <div class="form-input-content">
                    <div class="card login-form mb-0" >
                        <div class="card-body pt-5">
                            <a class="" href="{{route('home')}}"> <h4 style="color: green">Formulaire de candidature</h4></a>
    
                    <form method="POST" class="mt-3 mb-5 login-input" action="{{ route('login') }}">
                        @csrf
    
                        <div class="form-group row">
                            <label for="email" class="col-md-12 col-form-label">{{ __('E-Mail Address') }}</label>
    
                            <div class="col-md-12">
                                <input id="email" style="height: 50px;border-radius:0"  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>    
                        <div class="form-group">
                            
                                <button  type="submit" style="background-color: green;width:100%;" class="btn login-form__btn submit" style="width: 100%">
                                    {{ __('Login') }}
                                </button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
        <!-- end section -->
        
@endsection
