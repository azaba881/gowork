@extends('layouts.admin')

@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">LISTE DES DEMANDEURS D'EMPLOI</h4>
            <div class="table-responsive">
                <table class="table  verticle-middle">
                    <thead>
                        <tr>
                            <th scope="col" class="text-danger">N°</th>
                            <th scope="col" class="text-danger">PHOTO</th>
                            <th scope="col">NOM ET PRÉNOMS</th>
                            <th scope="col">DOMAINE</th>
                            <th scope="col">ADRESSE</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($travailleur as $travailleur) 
                        <tr>
                            <td>{{$travailleur->id}}</td>
                            <td><img src="{{$travailleur->photo}}" width="50px" height="50px" style="border-radius: 50%" alt=""></td>
                            <td>
                                {{Auth()->User()->name}} <br> {{Auth()->User()->prenom}}
                            </td>
                            <td>
                                {{$travailleur->domaine}}
                            </td>
                            <td>{{$travailleur->addresse}}</td>
                            <td>
                                {{Auth()->User()->email}}
                            </td>
                            <td><span style="font-size: 25px;"><a style="color: green" href="{{$travailleur->site}}" data-toggle="tooltip" data-placement="top" title="voir le site"><i class="fa fa-eye color-muted m-r-5"></i> </a><a style="color: red" href="#" data-toggle="tooltip" data-placement="top" title="Désactiver"><i class="fa fa-close color-danger"></i></a></span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</div>
    
@endsection