@extends('layouts.app')

@section('content')

      <!-- profil -->
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
    <form id="regForm" action="" class="form-horizontal form-material">

        <h4 style="color: #007bb6;">INFORMATIONS PERSONELLES</h4> <br>
        
        <!-- One "tab" for each step in the form: -->
        <div class="tab">
          <p><input class="form-control form-control-line" placeholder="First name..." oninput="this.className = ''" style="border:none;outline:none;color: gray;"></p><br>                      
          <p><input class="form-control form-control-line" placeholder="Last name..." oninput="this.className = ''" style="border:none;outline:none;color: gray;"></p> <br>
          <p><input class="form-control form-control-line" placeholder="E-mail..." oninput="this.className = ''" style="border:none;outline:none;color: gray;"></p> <br>
          <p><input class="form-control form-control-line" placeholder="Phone..." oninput="this.className = ''" style="border:none;outline:none;color: gray;"></p> <br>
          <p><select class="form-control form-control-line">
            <option>Pays</option>
            <option>India</option>
            <option>Usa</option>
            <option>Canada</option>
            <option>Thailand</option>
        </select></p> <br>                      
        </div>
        
        <div class="tab">Contact Info:
          <p><input placeholder="E-mail..." oninput="this.className = ''"></p>
          <p><input placeholder="Phone..." oninput="this.className = ''"></p>
        </div>
        
        <div class="tab">Birthday:
          <p><input placeholder="dd" oninput="this.className = ''"></p>
          <p><input placeholder="mm" oninput="this.className = ''"></p>
          <p><input placeholder="yyyy" oninput="this.className = ''"></p>
        </div>
        
        <div class="tab">Login Info:
          <p><input placeholder="Username..." oninput="this.className = ''"></p>
          <p><input placeholder="Password..." oninput="this.className = ''"></p>
        </div>
        
        <div style="overflow:auto;">
          <div style="float:right;">
            <button type="button" class="btn btn-info" id="prevBtn" onclick="nextPrev(-1)">PRECEDENT</button>
            <button type="button" class="btn btn-info" id="nextBtn" onclick="nextPrev(1)">SUIVANT</button>
          </div>
        </div>
        
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
        </div>
        
        </form>
        </div>
    </div>
   </div>
</div>  
    
@endsection