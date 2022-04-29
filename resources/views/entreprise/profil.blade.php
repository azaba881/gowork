@extends('./layouts.entreprise')

@section('content')

<div class="row" style="width: 100% !important;">
    @foreach ($entreprises as $entreprise)
    <div class="col-lg-7 col-xl-6">
        <div class="card"> 
            <div class="card-body" >
                <div style="display: flex;align-items:flex-end;justify-content:center;flex-direction:row;position: relative;
                background-image:url(/assets/img/visit/visit_1.jpg);background-size:cover;background-repeat:no-repeat;
                height:200px;
                ">
                 <img src="{{$entreprise->logo}}" width="150" height="150" style="border-radius: 50%;" alt="">
                </div> <br>
               
                <div class="media align-items-center text-center mb-4">
                   
                    <div class="media-body">
                        <h3 class="mb-0">{{$entreprise->nom}}</h3>
                    </div>
                </div>
                
                <div class="row mb-5">
                    <div class="col" >
                        <div class="card card-profile text-center" style="padding: 20px;padding-bottom:0px;">
                          
                            <h2 class="mb-0" style="color:royalblue;text-transform:uppercase">{{$entreprise->domaine}}</h2>
                        </div>
                    </div>
                    
                </div>

                <h4>A propos de l'entreprise</h4>
                <p class="text-muted">{{$entreprise->description}}.</p>
                <ul class="card-profile__info">
                    <div class="row" style="display: flex;flex-direction:row;justify-content:center;align-items:center;">
                        <div class="col-3"><strong class="text-dark mr-4">NUMÉRO :</strong></div>
                        <div class="col-9"><span>{{$entreprise->numero}}</span></div>
                    </div> <br>
                    <div class="row" style="display: flex;flex-direction:row;justify-content:center;align-items:center;">
                        <div class="col-3"><strong class="text-dark mr-4">EMAIL :</strong></div>
                        <div class="col-9"><span>{{$entreprise->email}}</span></div>
                    </div> <br>
                    <div class="row" style="display: flex;flex-direction:row;justify-content:center;align-items:center;">
                        <div class="col-3"><strong class="text-dark mr-4">SITE :</strong></div>
                        <div class="col-9"><span><a style="color: blue" href="{{$entreprise->linkedyn}}">{{$entreprise->linkedyn}}</a></span></div>
                    </div> <br>
                    <div class="row" style="display: flex;flex-direction:row;justify-content:center;align-items:center;">
                        <div class="col-3"><strong class="text-dark">LINKEDYN :</strong></div>
                        <div class="col-9"><span><a style="color: blue" href="{{$entreprise->linkedyn}}">{{$entreprise->linkedyn}}</a></span></div>
                    </div>
                </ul>
            </div>
        </div>  
    </div>
    @endforeach
    <div class="col-lg-5 col-xl-6">
        <div class="card">
            <div class="card-body">
                <form action="#" class="form-profile">
                    <div class="form-group">
                        <textarea class="form-control" name="textarea" id="textarea" cols="30" rows="10" placeholder="Post a new message"></textarea>
                    </div>
                    <div class="d-flex align-items-center">
                        <ul class="mb-0 form-profile__icons">
                            <li class="d-inline-block">
                                <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-user"></i></button>
                            </li>
                            <li class="d-inline-block">
                                <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-paper-plane"></i></button>
                            </li>
                            <li class="d-inline-block">
                                <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-camera"></i></button>
                            </li>
                            <li class="d-inline-block">
                                <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-smile"></i></button>
                            </li>
                        </ul>
                        <button class="btn btn-primary px-3 ml-4">Send</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="media media-reply">
                 <div class="media mt-2">
                        <img class="mr-3 circle-rounded circle-rounded" src="images/avatar/4.jpg" width="50" height="50" alt="Generic placeholder image">
                        <div class="media-body">
                            <div class="d-sm-flex justify-content-between mb-2">
                                <h5 class="mb-sm-0">Milan Gbah <small class="text-muted ml-3">about 3 days ago</small></h5>
                                <div class="media-reply__link">
                                    <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-thumbs-up"></i></button>
                                    <button class="btn btn-transparent p-0 mr-3"><i class="fa fa-thumbs-down"></i></button>
                                    <button class="btn btn-transparent p-0 ml-3 font-weight-bold">Reply</button>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</div>
        
@endsection
