@extends('layouts.app')

@section('content')
@foreach ($travailleur as $travailleur)
    <div class="row" style="width:100%;">
      <!-- profil -->
      <div class="col-3">
        <div class="card">
            <div class="card-body">
              <div class="text-center" style="background-color: green;padding-top:50px;margin-top:-30px;margin-left:-30px;margin-right:-30px;">
                <img class="mr-3" src="{{$travailleur->photo}}" style="border-radius:50%;margin-bottom:-10px" width="120" height="120" alt="">
              </div> <br>
                <div class="text-center">                                   
                    <h2 class="mt-3"> {{Auth()->User()->prenom}} {{Auth()->User()->name}}</h2>
                    <p style="margin-left:15px;text-align: justify;text-transform:  uppercase;">{{$travailleur->domaine}} <br>
                      </p>
                    <p style="margin-left:15px;text-align: justify;"><i style="style:cursor:pointer;color:green;font-size:18px" class="fa fa-map-marker"></i> | {{$travailleur->addresse}}</p>
                    <p style="margin-left:15px;text-align: justify;"><i  style="color:green;font-size:18px" class="fa fa-phone"></i> | {{$travailleur->numero}} (+229) </p>
                    <p style="margin-left:15px;text-align: justify;"> <a style="color:blue" href="{{$travailleur->site}}"><i style="color:green;font-size:17px" class="fa fa-tags"></i> | Website</a></p>                    
                    <a href="javascript:void()" style="background-color: green !important"  class="btn gradient-4 btn-lg border-0 btn-rounded px-5">
                        Upade profil</a> 
                </div>
            </div>
            <div class="card-footer border-0 bg-transparent">
              <div class="row">
                  <div class="col-6 border-right-1 pt-3"><a class="text-center d-block text-muted" href="{{$travailleur->linkedyn}}">
                      <i style="color:white;background-color:green;padding:8px;border-radius:50%;" class="fa fa-linkedin gradient-3-text"></i>
                          <p class="">LynkedYn</p>
                      </a>
                  </div>
                  <div class="col-6 pt-3"><a class="text-center d-block text-muted" href="{{Auth()->User()->email}}">
                      <i  style="color:white;background-color:green;padding:8px;border-radius:50%;" class="fa fa-envelope gradient-4-text"></i>
                          <p class="">Email</p>
                      </a>
                  </div>
              </div>
          </div>
        </div>
    </div>
      <div class="col-lg-8 col-xl-8">    
        <div class="card"> 
          <div class="card-body">  
            <div class="row">
              <div class="col-10">
                <h1 style="color:green">Mon profil professionnel</h1> 
              </div>
              <div class="col-2">
                <a href="{{route('documents')}}"><i  style="float:right;cursor:pointer;color:green;border:2px solid green;padding:8px;border-radius:50%;" class="fa fa-file"></i></a>
              </div>
            </div><br>
           
              
            <div class="row"> 
              <div class="col-10">
               <h4>A PROPOS</h4>
              </div>
              <div class="col-2"  style="display:flex;flex-direction:row;justify-content:flex-end">
                <i  data-toggle="modal" data-target="#bioModal" style="cursor:pointer;color:green;font-size:20px" class="fa fa-pencil"></i>
              </div>
            </div><br> 
            @if ($bios == null)
              <h4>Aucune bio enregistrée</h4>
            @else
                @foreach ($bios as $bio)
                  <p style="padding-left: 10px;" class="text-dark">{{$bio->comment}}</p>
                @endforeach
            @endif
              
              <br><div >               
                <div class="row">
                    <div class="col-10">
                    <h4>PARCOURS ACADÉMIQUES</h4>
                    </div>
                    <div class="col-2"  style="display:flex;flex-direction:row;justify-content:flex-end">
                      <i data-toggle="modal" data-target="#etudeModal"  style="cursor:pointer;padding:10px;background-color:green;color:white;border-radius:50%;" class="fa fa-plus"></i>
                    </div>
                  </div><br>                 
                    <div class="row" style="width:100%;display: flex;flex-wrap:wrap;flex-direction:row;padding-left:20px;padding-right:10px;">                                  
                     @if ($etudes == null)
                       <h4>Aucun parcous enregistré</h4>  
                     @else
                     @foreach ($etudes as $etude)
                     <div>
                       <div style="margin-right:5px;width: 250px;background-color:green;color:white;display:flex;flex-direction:row;justify-content:space-between;align-items:center;padding:10px;">
                         <h4 style="color:white;text-transform:uppercase;">{{$etude->grade}}</h4>                       
                         <i style="color:black;background-color:white;cursor: pointer;padding:5px;border-radius:50%;" class="fa fa-close"></i>                                                
                       </div>
                       <div style="width: 250px;border:1px solid green;border-top:none;color:white;padding:10px;">
                         <br><h6>ÉCOLE  :  {{$etude->ecole}}</h6>
                         <<div class="card-footer border-0 bg-transparent">
                           <div class="row">
                               <div class="col-6 border-right-1 pt-1" style="margin: 0 !important"><a class="text-center d-block text-muted" href="{{$travailleur->linkedyn}}">
                                 {{$etude->debut}}
                               </div>
                               <div class="col-6 pt-1"><a class="text-center d-block text-muted">
                                 {{$etude->fin}} 
                                                             
                               </div>
                           </div>
                       </div>                                          
                       </div>
                     </div>   
                     @endforeach
                     @endif
                    </div>

              <br><div >               
                <br><div class="row">
                    <div class="col-10">
                    <h4 style="text-align: justify;">EXPÉRIENCES PROFESSIONELLES</h4>
                    </div>
                    <div class="col-2"  style="display:flex;flex-direction:row;justify-content:flex-end">
                      <i  data-toggle="modal" data-target="#experienceModal" data-whatever="@fat" style="cursor:pointer;padding:10px;background-color:green;color:white;border-radius:50%;" class="fa fa-plus"></i>
                    </div>
                </div><br>     
                 @if ($experiences == null)
                     <h4>Aucune expérience enregistrée</h4>
                 @else
                    
                 <div class="row" style="width:100%;display: flex;flex-wrap:wrap;flex-direction:row;padding-left:20px;padding-right:10px;">                                  
                  
                  @foreach ($experiences as $experience)      <div>  
                     <div style="margin-right:5px;width: 250px;background-color:green;color:white;display:flex;flex-direction:row;justify-content:space-between;align-items:center;padding:10px;">
                       <h4 style="color:white">{{$experience->type}}</h4>                       
                       <i style="color:black;background-color:white;cursor: pointer;padding:5px;border-radius:50%;" class="fa fa-close"></i>                                                
                     </div>
                     <div style="width: 250px;border:1px solid green;border-top:none;color:white;padding:10px;">
                       <br><h6 style="text-align: justify">ENTREPRISE  :  {{$experience->entreprise}}</h6>
                       <div class="card-footer border-0 bg-transparent">
                         <div class="row">
                             <div class="col-6 border-right-1 pt-1" style="margin: 0 !important"><a class="text-center d-block text-muted" >
                               {{$experience->debut}}</a>
                             </div>
                             <div class="col-6 pt-1"><a class="text-center d-block text-muted" >
                               {{$experience->fin}}</a>                                                          
                             </div>
                         </div>
                       </div>                                          
                     </div>
                   </div>  @endforeach              
                   </div>
           <div> 
                 @endif  
                  <br><div class="row">
                      <div class="col-10">
                      <h4 style="text-align: justify">COMPÉTENCES (SKILLS)</h4>
                      </div>
                      <div class="col-2"  style="display:flex;flex-direction:row;justify-content:flex-end">
                        <i data-toggle="modal" data-target="#skillModal" data-whatever="@getbootstrap"  style="cursor:pointer;padding:10px;background-color:green;color:white;border-radius:50%;" class="fa fa-plus"></i>
                      </div>
                  </div><br>                 
                  <div class="row" style="width:100%;display: flex;flex-wrap:wrap;flex-direction:row;justify-content:space-between;padding-left:20px;padding-right:10px;">
                   @if ($skills == null)
                   <h4>Aucun skill enregistré</h4>
                   @else
                   @foreach ($skills as $skill)
                   <div>
                     <div style="width:100%;display:flex;flex-direction:row;justify-content:space-between">
                       <h6>{{$skill->title}}</h4> 
                       <h6 style="color:green">{{$skill->level}} %</h6>
                       <i  style="color:red;cursor: pointer;" class="fa fa-trash"></i>             
                     </div>
                     <progress id="file" value="{{$skill->level}}" max="100" style="height:30px;"> {{$skill->level}}% </progress>
                   </div>
                 </div>
             </div>  
             @endforeach
                   @endif
                    
               </div>
  </div> @endforeach

  {{--modal etude--}}
  <div class="modal fade" id="etudeModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">AJOUTER UNE ÉTUDE</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
              
            <form method="POST" class="mt-3 mb-5 login-input" action="{{ route('etude') }}">
              @csrf

              <div class="form-group row" style="text-align: justify;">
                  <label for="ecole" class="col-md-12 col-form-label">ECOLE</label>

                  <div class="col-md-12">
                      <input id="ecole" style="height: 50px;border-bottom:1px solid gray;"  type="text" class="form-control @error('ecole') is-invalid @enderror" name="ecole" value="{{ old('ecole') }}" required autocomplete="ecole" autofocus>

                      @error('ecole')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              <div class="form-group row" style="text-align: justify;">
                <label for="grade" class="col-md-12 col-form-label">GRADE</label>

                <div class="col-md-12">
                    <select name="grade" class="form-control @error('grade') is-invalid @enderror" data-live-search="true" value="{{ old('grade') }}" autocomplete="grade" autofocus title="tout les grades" data-size="5" data-container="body" required>
                      <option value="" selected disabled hidden>Choisissez ici</option>
                      <option style="color:black" value="BACHELOR">BACHELOR</option>
                      <option style="color:black" value="BAC">BAC</option>
                      <option style="color:black" value="BAC+1">BAC+1</option>
                      <option style="color:black" value="BAC+2">BAC+2</option>
                      <option style="color:black" value="MASTER">MASTER</option>
                      <option style="color:black" value="DACTORAT">DACTORAT</option>
                      <option style="color:black" value="STAGE">STAGE</option>
                      <option style="color:black" value="CERTIFICATION">CERTIFICATION</option>
                    </select>
                    @error('grade')
                        <span class="invalid-feedback" role="alert"> 
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row" style="text-align: justify;">
              <label for="debut" class="col-md-12 col-form-label">DATE DE DÉBUT</label>

              <div class="col-md-12">
                  <input id="debut" style="height: 50px;border-radius:0"  type="date" class="form-control @error('debut') is-invalid @enderror" name="debut" value="{{ old('debut') }}" required autocomplete="debut" autofocus>

                  @error('debut')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>
          <div class="form-group row" style="text-align: justify;">
            <label for="fin" class="col-md-12 col-form-label">DATE DE FIN</label>

            <div class="col-md-12">
                <input id="fin" style="height: 50px;border-radius:0"  type="date" class="form-control @error('fin') is-invalid @enderror" name="fin" value="{{ old('fin') }}" required autocomplete="fin" autofocus>

                @error('fin')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
              <div class="form-group">
                  
                      <button  type="submit" style="background-color: green;width:100%;" class="btn login-form__btn submit" style="width: 100%">
                          AJOUTER ETUDE
                      </button>
              </div>
          </form>
            </div>
            
        </div>
    </div>
  </div>

  {{--modal experience--}}
  <div class="modal fade" id="experienceModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">AJOUTER UNE EXPÉRIENCE</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <form method="POST" class="mt-3 mb-5 login-input" action="{{ route('experience') }}">
                @csrf

                <div class="form-group row" style="text-align: justify">
                    <label  for="entreprise" class="col-md-12 col-form-label">Entreprise</label>

                    <div class="col-md-12">
                        <input id="entreprise" style="height: 30px;border-bottom:1px solid gray;"  type="text" class="form-control @error('entreprise') is-invalid @enderror" name="entreprise" value="{{ old('entreprise') }}" required autocomplete="entreprise" autofocus>

                        @error('entreprise')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row" style="text-align: justify">
                  <div class="col-md-12">
                    <select name="type" class="form-control @error('type') is-invalid @enderror" data-live-search="true" value="{{ old('type') }}" autocomplete="ville" autofocus title="tout les types" data-size="5" data-container="body" required>
                      <option value="" selected disabled hidden>CHOISISSEZ LE TYPE D'EXPERIENCE</option>
                      <option style="color:black" value="CDI">CDI</option>
                      <option style="color:black" value="CDD">CDD</option>
                      <option style="color:black" value="STAGE">STAGE</option>
                      <option style="color:black" value="INTERIM">INTÉRIM</option>
                      <option style="color:black" value="REMOTE">REMOTE</option>
                    </select>
                      @error('type')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              <div class="form-group row" style="text-align: justify">
                <label for="debut" class="col-md-12 col-form-label">DATE DE DEBUT</label>

                <div class="col-md-12">
                    <input id="debut" style="height: 50px;border-radius:0"  type="date" class="form-control @error('debut') is-invalid @enderror" name="debut" value="{{ old('debut') }}" required autocomplete="debut" autofocus>

                    @error('debut')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row" style="text-align: justify">
              <label for="fin" class="col-md-12 col-form-label">DATE DE FIN</label>

              <div class="col-md-12">
                  <input id="fin" style="height: 50px;border-radius:0"  type="date" class="form-control @error('fin') is-invalid @enderror" name="fin" value="{{ old('fin') }}" required autocomplete="fin" autofocus>

                  @error('fin')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>
                <div class="form-group">
                    
                        <button  type="submit" style="background-color: green;width:100%;" class="btn login-form__btn submit" style="width: 100%">
                            AJOUTER UNE EXPÉRIENCE
                        </button>
                </div>
            </form>
            </div>
        </div>
    </div>
  </div>

  {{--modal experience--}}
  <div class="modal fade" id="bioModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">AJOUTER UNE BIO</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <form method="POST" class="mt-3 mb-5 login-input" action="{{ route('bioupdate')}}">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <br>
                <div class="form-group row" style="text-align: justify">
                    <label  for="comment" class="col-md-12 col-form-label">BIO</label>

                    <div class="col-md-12">
                        <input id="comment" style="height: 30px;border-bottom:1px solid gray;"  type="text" class="form-control @error('comment') is-invalid @enderror" name="comment" value="{{ old('comment') }}"  autocomplete="comment" autofocus>

                        @error('comment')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                                         
                <div class="form-group">
                    
                        <button  type="submit" style="background-color: green;width:100%;" class="btn login-form__btn submit" style="width: 100%">
                            AJOUTER UNE BIO
                        </button>
                </div>
            </form>
            </div>
        </div>
    </div>
  </div>
    
  {{--skills modal--}}
  
  <div class="modal fade" id="skillModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">AJOUTER UN SKILL</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
<form method="POST" class="mt-3 mb-5 login-input" action="{{ route('skill') }}">
  @csrf

  <div class="form-group row" style="text-align: justify">
      <label for="title" class="col-md-12 col-form-label">INTITULÉ</label>

      <div class="col-md-12">
          <input id="title" style="height: 30px;border-bottom:1px solid gray;"  type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

          @error('title')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>
  <div class="form-group row" style="text-align: justify">
    <label for="level" class="col-md-12 col-form-label">LEVEL</label>

    <div class="col-md-12">
      
        <input id="level" style="height: 30px;border-bottom:1px solid gray;"   type="number" class="form-control @error('level') is-invalid @enderror" name="level" value="{{ old('level') }}" required autocomplete="level" autofocus>

        @error('level')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>      
  <div class="form-group">
      
          <button  type="submit" style="background-color: green;width:100%;" class="btn login-form__btn submit" style="width: 100%">
              AJOUTER SKILL
          </button>
  </div>
</form>
            </div>
            
        </div>
    </div>
  </div>   

  
   
 
    

   {{--   <!-- profil -->
      <div class="col-lg-5 col-xl-5">   
        <div class="card"> 
          <div class="card-body">  
            @foreach ($travailleur as $travailleur)
              <div class="media align-items-center mb-4" style="display: flex;flex-direction:column;" >
                  <img class="mr-3" src="{{$travailleur->photo}}" style="border-radius: 50%;border: 2px solid green" width="100" height="100" alt="">
                  <div class="media-body text-center"> <br>
                      <h3 class="mb-0">{{auth()->user()->name}}</h3>
                      <p class="text-muted mb-0">DEVELOPPER WEB</p>
                  </div>
              </div><br>

              <h4>A PROPOS</h4>
              <p class="text-dark">Hi, I'm Pikamy, has been the industry standard dummy text ever since the 1500s.</p>
              <table class="table" >
                <tbody>
               
                  <tr>
                    <th style="color: black">NOM : </th>
                    <td >{{$travailleur->addresse}}	</td> 
                  </tr>
                  <tr> 
                    <th style="color: black">Domaine d'etude : </th>
                    <td >{{$travailleur->domaine}}	</td>                      
                  </tr>
                  <tr>
                    <th style="color: black">site : </th>
                    <td >{{$travailleur->site}}	</td>                      
                  </tr>
                  <tr>
                    <th style="color: black">Numero : </th>
                    <td >{{$travailleur->numero}}	</td>                      
                  </tr>
                  @endforeach
                   
                </tbody>
            </table>
          </div>
      </div>  
    </div>
    <!-- end -->
   <div class="col-6">
    <div class="card" style="border-radius:0;">
      <div class="card-body">
        <progress id="file" value="32" max="100"> 32% </progress>

      </div>
    </div>
   </div>
</div>  
--}} 

<script>
  var numbs = new Array('a',"b");
  numbs.forEach(function(item,index,array){
    console.log(item);
  })
</script>
    
@endsection