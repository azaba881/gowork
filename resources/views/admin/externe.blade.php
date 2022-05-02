@extends('layouts.admin')

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
   @foreach ($externe as $externe)                                                                          
    <tr>
        <td> {{$externe->id}}</td>
        <td> <img src="{{$externe->affiche}}" class="thumbnail zoom" width="100px" alt=""></td>
        <td>{{$externe->title}}</td>
        <td>{{$externe->domaine}}</td>
        <td>{{$externe->nombre}} POSTS</td>
        <td>{{$externe->expiration}}</td>
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
<form method="POST" class="mt-3 mb-5 login-input" action="{{ route('externestore') }}" enctype="multipart/form-data">
@csrf

<div class="form-group row">
    <label for="affiche" class="col-md-12 col-form-label">Affiche </label>
    
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
<label for="title" class="col-md-12 col-form-label">INTITULÉ</label>

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
    <label for="domaine" class="col-md-12 col-form-label">Domaine</label>
    
    <div class="col-md-12">
    <input id="domaine" style="height: 50px;border-radius:0"  type="text" class="form-control @error('domaine') is-invalid @enderror" name="domaine" value="{{ old('domaine') }}" required autocomplete="domaine" autofocus>
    
    @error('domaine')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    </div>

    <div class="form-group row">
        <label for="nombre" class="col-md-12 col-form-label">Nombre</label>
        
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
    <label for="description" class="col-md-12 col-form-label">Description</label>
    
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
<label for="site" class="col-md-12 col-form-label">Site</label>

<div class="col-md-12">
<input id="site" style="height: 50px;border-radius:0"  type="text" class="form-control @error('site') is-invalid @enderror" name="site" value="{{ old('site') }}" required autocomplete="site" autofocus>

@error('site')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>
</div>    

<div class="form-group row">
    <label for="expiration" class="col-md-12 col-form-label">Expiration</label>
    
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