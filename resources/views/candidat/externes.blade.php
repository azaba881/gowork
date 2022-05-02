@extends('layouts.app')

@section('content')

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
             <h3 style="font-size: 15px;" class="box-title">{{$job->domaine}}</h3>
         </li>
         <li  class="text-right"> <h5 class="box-title"> <a href="#" style="margin-right:5px;"><i style="color: green" class="fa fa-eye"></i></a> <span style="font-size:15px;padding: 7px;background-color: red;color: white;background-origin: content-box;"> Externe</span></h5> </li>
     </ul>
     <p style="height: 50px;">{{$job->description}} </p>                           
    <div><a style="width: 100%;background-color:green;border:none;"  href="{{$job->site}}"  class="btn btn-info">Postuler maintenant</a></div>
 </div>
 </div>
</div>
</div>
@endforeach
        
@endsection
