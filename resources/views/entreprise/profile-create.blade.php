@extends('layouts.form')

@section('content')
 
    <style>
        body{
            background-image: url(assets/img/service/a.png);
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
      <!-- profil -->
      
    <!-- end -->
    <div  style="display: flex;flex-direction:row;justify-content:center;align-items:center;padding:30px;">

    
   <div class="col-8">
    <div class="card" style="border-radius:0;">
    <div class="card-body">
    <form id="regForm" action="{{route('entreprisestore')}}" class="mt-5 mb-5 login-input" method="POST" enctype="multipart/form-data">
        @csrf         
        <div class="tab">
            <h4 style="color: #007bb6;">ETAPE 1 : Informations personnelles</h4> <br>
            <p><input class="form-control form-control-line @error('logo') is-invalid @enderror" type="file" 
                name="logo" value="{{ old('logo') }}" required autocomplete="logo" autofocus
                placeholder="NOM DE L'ENTREPRISE" oninput="this.className = ''" style="border:none;outline:none;color: gray;">
                @error('logo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </p> 
          <p><input class="form-control form-control-line @error('nom') is-invalid @enderror" type="text" 
            name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus
            placeholder="NOM DE L'ENTREPRISE" oninput="this.className = ''" style="border:none;outline:none;color: gray;">
            @error('nom')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </p> 
          
          <br>
          <p>
            <input class="form-control form-control-line @error('description') is-invalid @enderror" type="text" 
             name="description" value="{{ old('description') }}" required autocomplete="name" autofocus
            placeholder="DESCRIPTION" oninput="this.className = ''" style="border:none;outline:none;color: gray;">
            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </p> <br>

        <p><select class="form-control form-control-line @error('domaine') is-invalid @enderror"name="domaine" value="{{ old('domaine') }}" required autocomplete="name" autofocus >
            <option >DOMAINE</option>
            <option value="informatique ">informatique</option>
            <option value="administration">administration</option>
            <option value="menuserie">menuserie</option>
            <option value="plomberie">plomberie</option>
            @error('domaine')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </select>
        </p> <br>  

        <p><input class="form-control form-control-line @error('date') is-invalid @enderror" placeholder="DATE DE CREATION" type="text"  oninput="this.className = ''" style="border:none;outline:none;color: gray;"
            name="date" value="{{ old('date') }}" required autocomplete="name" autofocus >
            @error('date')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </p><br>                                          
        </div>

        <div class="tab"> <h4 style="color: #007bb6;">ETAPE 2 : CONTACT ET INFOS</h4> <br>
            <p><input class="form-control form-control-line" placeholder="Adresse de l'entreprise" type="text" oninput="this.className = ''" style="border:none;outline:none;color: gray;"
                name="addresse" value="{{ old('addresse') }}" required autocomplete="addresse" autofocus>
                @error('addresse')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </p>
            <p><input class="form-control form-control-line" placeholder="E-mail de l'entreprise" type="email" oninput="this.className = ''" style="border:none;outline:none;color: gray;"
                name="email" value="{{ old('email') }}" required autocomplete="name" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </p>
            <p><input class="form-control form-control-line" placeholder="Website" type="url" oninput="this.className = ''" style="border:none;outline:none;color: gray;"
                name="site" value="{{ old('site') }}" required autocomplete="website" autofocus>
                @error('site')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </p>
            <p><input class="form-control form-control-line" class="form-control form-control-line" type="number" placeholder="Numero" oninput="this.className = ''" style="border:none;outline:none;color: gray;"
                name="numero" value="{{ old('numero') }}" required autocomplete="numero" autofocus>
                @error('numero')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </p> <br>
            <p><input class="form-control form-control-line" placeholder="Linkedyn" type="url" oninput="this.className = ''" style="border:none;outline:none;color: gray;"
                name="linkedyn" value="{{ old('linkedyn') }}" required autocomplete="linkedyn" autofocus>
                @error('linkedyn')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </p>   
            <br><br>
                                    <p class="fieldset">
                                        <input class="form-control" type="checkbox" id="accept-terms" name="agree" required>
                                        <label for="accept-terms">I agree to the <a href="{{ url('/privacy-policy') }}">Terms</a></label>
                                    </p>
                                    <br>      
          </div>        
        <div style="overflow:auto;">
          <div style="float:right;">
            <button type="button" class="btn btn-info" style="background-color: green" id="prevBtn" onclick="nextPrev(-1)">PRECEDENT</button>
            <button type="submit" class="btn btn-info" style="background-color: green;border:none;" id="nextBtn" onclick="nextPrev(1)">SUIVANT</button>
          </div>
        </div>
        
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
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