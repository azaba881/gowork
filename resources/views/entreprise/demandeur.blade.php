@extends('./layouts.entreprise')

@section('content')

        <div class="container-fluid">
            <div class="card">
                @foreach ($demandeur as $demandeur)
                
                <div class="row" style="padding: 20px;padding-bottom:0;">
                    <div class="col-2">
                        <img class="mr-2" src="images/avatar/4.jpg" width="120" height="120" alt="Generic placeholder image">
                    </div>
                    <div class="col-10">
                        <div class="" style="width: 100%;margin-left:10px;">
                               <div class="d-sm-flex justify-content-between mb-2">
                                   <h5 style="margin-left:10px;color:rgb(36, 36, 36);font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-weight:800;" class="mb-sm-0" >{{$demandeur->name}} {{$demandeur->prenom}}<a href=""><i style="color:royalblue;font-size:25px;" class="fa fa-eye"></i></a></h5>
                                   
                                   <div>
                                    <a data-toggle="modal" data-target="#exampleModal"  href="#" aria-expanded="false" target="_blank" style="color: white;border:none;" class="btn btn-info ">CONTACTEZ</a>
                                 </div>
                               </div>  
                        </div>
                        <div class="" style="width: 100%;margin-left:10px;">
                            <p style="padding: 10px;padding-right:20px;marging-right:50px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum atque molestiae nemo quibusdam, voluptas asperiores voluptatibus error numquam, officiis, minima at animi assumenda tempora. Quae, nemo! Beatae et similique saepe. <br>
                               <br><span style="color: red">{{$demandeur->email}}</span>  </p>
                        </div> 
                    </div>
                </div><hr>
        @endforeach

            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1"  >
            <div class="modal-dialog">
                <div class="modal-content" >
                    <div class="form-input-content">
                        <div class="card login-form mb-0" > 
                            <div class="card-body pt-5">
                                <form action="#" class="form-profile">
                                    <div class="form-group">
                                        <textarea class="form-control" name="textarea" id="textarea" cols="30" rows="10" placeholder="Post a new message"></textarea>
                                    </div>
                                    <div class="d-flex align-items-center" style="display: flex;flex-direction:row;justify-content:center;align-items:center;">
                                        <ul class="form-profile__icons">
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
                                        <button class="btn btn-primary" style="width: 80%">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
        
@endsection
