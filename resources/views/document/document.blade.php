@extends('layouts.app')

@section('content')

<!-- section -->
  
    <style>
        .monlien :hover {
            color:green;
        }
    </style>
        <div class="col-lg-3 col-sm-3 text-center">
            <a href="{{route('diplomes')}}" class="text-center monlien">
                <i style="font-size: 150px;" class="fa fa-folder monlien"></i>           
            </a>
            <h4 style="font-weight: 800">DIPLOMES</h4>
        </div> 
        
        <div class="col-lg-3 col-sm-3 text-center">
            <a href="{{route('cvs')}}" class="text-center monlien">
                <i style="font-size: 150px;" class="fa fa-folder monlien"></i>           
            </a>
            <h4 style="font-weight: 800">CV</h4>
        </div>

        <div class="col-lg-3 col-sm-3 text-center">
            <a href="{{route('certifications')}}" class="text-center monlien">
                <i style="font-size: 150px;" class="fa fa-folder monlien"></i>           
            </a>
            <h4 style="font-weight: 800">CERTIFICATIONS</h4>
        </div>

        <div class="col-lg-3 col-sm-3 text-center">
            <a href="attestations" class="text-center monlien">
                <i style="font-size: 150px;" class="fa fa-folder monlien"></i>           
            </a>
            <h4 style="font-weight: 800">ATTESTATIONS</h4>
        </div>


<!-- end section --> 
    
@endsection