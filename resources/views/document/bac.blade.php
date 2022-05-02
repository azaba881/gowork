@extends('layouts.app')

@section('content')

<!-- section -->
  
    <style>
        .monlien :hover {
            color:green;
        }
    </style>

        
            <div class="col-8">
            <a data-toggle="modal" data-target="#exampleModal" href="https://wrappixel.com/templates/ampleadmin/" style="font-size:18px;padding:10px;padding-left:40px;padding-right:40px;" target="_blank" class="btn gradient-4 hidden-xs hidden-sm waves-effect waves-light" >AJOUTER</a>
            </div>
            <div class="col-4"> 
            <input type="search" class="form-control" style="" placeholder="RECHERCHER" aria-label="Search Dashboard">
            </div>
       

            <div class="row" style="width: 100%;">
                @if ($bac == null)
                <h4 style="font-weight: 800;margin:10px;" >Aucun document</h4>
                @else
                   
                    @foreach ($bac as $bac)
                    <div class="col-lg-3 col-sm-3 text-center"><br><br><br>
                        <a href="{{$bac->fichier}}" class="text-center monlien">
                            <i style="font-size: 150px;" class="fa fa-file monlien"></i>           
                        </a>
                        <h4 style="font-weight: 800;margin:10px;" >bac {{$nombre++}}</h4>
                    </div>
                    @endforeach
                @endif
            </div>

        <div class="modal fade" id="exampleModal" tabindex="-1"  >
            <div class="modal-dialog">
                <div class="modal-content" >
                <div class="form-input-content"> 
                    <div class="card login-form mb-0" >
                        <div class="card-body pt-5">
                         <form method="POST" class="mt-3 mb-5 login-input" action="{{ route('bacstore') }}" enctype="multipart/form-data">
                        @csrf
        
                        <div class="form-group row">
                            <label for="fichier" class="col-md-12 col-form-label">Fichier</label>
        
                            <div class="col-md-12">
                                <input id="fichier" style="height: 50px;border-radius:0"  type="file" class="form-control @error('fichier') is-invalid @enderror" name="fichier" value="{{ old('fichier') }}" required autocomplete="fichier" autofocus>
        
                                @error('fichier')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">                            
                                <button  type="submit" style="background-color: green;width:100%;" class="btn" style="width: 100%">
                                   AJOUTER UN BAC
                                </button>
                        </div>
                       
                    </form>  
                </div>
            </div>
            </div>
        </div>
                
            </div>
        </div>
         
        
        

<!-- end section --> 
    
@endsection