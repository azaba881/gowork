@extends('layouts.app')

@section('content')

<!-- section -->
  
    <style>
        .monlien :hover {
            color:green;
        }
    </style>
        <div class="col-lg-3 col-sm-3 text-center">
            <a href="{{route('bac')}}" class="text-center monlien">
                <i style="font-size: 150px;" class="fa fa-folder monlien"></i>           
            </a>
            <h4 style="font-weight: 800">BACCALAURÉAT</h4>
        </div> 
        
        <div class="col-lg-3 col-sm-3 text-center">
            <a href="{{route('license')}}" class="text-center monlien">
                <i style="font-size: 150px;" class="fa fa-folder monlien"></i>           
            </a>
            <h4 style="font-weight: 800">LICENCE</h4>
        </div>

        <div class="col-lg-3 col-sm-3 text-center">
            <a href="{{route('master')}}" class="text-center monlien">
                <i style="font-size: 150px;" class="fa fa-folder monlien"></i>           
            </a>
            <h4 style="font-weight: 800">MASTER</h4>
        </div>

        <div class="col-lg-3 col-sm-3 text-center">
            <a href="{{route('doctorat')}}" class="text-center monlien">
                <i style="font-size: 150px;" class="fa fa-folder monlien"></i>           
            </a>
            <h4 style="font-weight: 800">DOCTORAT</h4>
        </div>


<!-- end section --> 
    
@endsection