@extends('layouts.app')

@section('content')

           <!-- section -->

           @if ($nombre ?? '')
           @foreach ($job as $job)

           <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="card" > 
                <div class="">
            <div style="height: 150px;width: 100%;background-image: url({{$job->affiche}});background-size: cover;background-repeat: no-repeat;padding:10px;">
                <div  style="background-color: green;border-radius:50%;padding:20px;width:80px;height:80px;color:white;text-align:center;">
                    <h4 style="color: white">15</h4>
                    <p>/ Jan</p>
                </div>  
            </div>
            <div class="white-box analytics-info" style="padding: 8px;">
                <ul style="display: flex;flex-direction: row;justify-content: space-between;align-items: center;">
                    <li>
                        <h3 style="font-size: 15px;" class="box-title">{{$job->categorie}}</h3>
                    </li>
                    <li  class="text-right"> <h5 class="box-title"> <a href="#" style="margin-right:5px;"><i style="color: green" class="fa fa-eye"></i></a> <span style="font-size:15px;padding: 7px;background-color: red;color: white;background-origin: content-box;"> {{$job->type}}</span></h5> </li>
                </ul>
                <p style="height: 50px;">{{$job->description}} </p>                           
                        <div><a style="width: 100%;background-color:green;border:none;" data-toggle="modal" data-target="#exampleModal" href=""  class="btn btn-info">Postuler maintenant</a></div>
            </div>
            </div>
        </div>
        </div>
        @endforeach
        <div class="col-lg-12" >
            <div class="bootstrap-pagination" style="margin-top:20px">
                           <nav>
                               <ul class="pagination pagination-lg justify-content-center" >
                                   <li class="page-item"><a style="color: green" class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span> <span class="sr-only">Previous</span></a>
                                   </li>
                                   <li  class="page-item"><a style="color: green" class="page-link" href="#">1</a>
                                   </li>
                                   <li class="page-item"><a style="color: green" class="page-link" href="#">2</a>
                                   </li>
                                   <li class="page-item"><a style="color: green" class="page-link" href="#">3</a>
                                   </li>
                                   <li class="page-item"><a style="color: green" class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span> <span class="sr-only">Next</span></a>
                                   </li>
                               </ul>
                           </nav>
           </div>
           </div>
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
        <!-- end section -->
         
        
             
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
