@extends('layouts.admin')

@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">LISTE DES ENTREPRISES</h4>
            <div class="table-responsive">
                <table class="table  verticle-middle">
                    <thead>
                        <tr>
                            <th scope="col" class="text-danger">N°</th>
                            <th scope="col" class="text-danger">LOGO</th>
                            <th scope="col">NOM DE L'ENTREPRISE</th>
                            <th scope="col">DOMAINE</th>
                            <th scope="col">ADRESSE</th>
                            <th scope="col">STATUT</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($entreprise as $entreprise)
                        <tr>
                            <td>{{$entreprise->id}}
                            </td>
                            <td><img src="{{$entreprise->logo}}" width="50px" height="50px" style="border-radius: 50%" alt=""></td>
                            <td>
                                {{$entreprise->nom}}
                            </td>
                            <td>
                                {{$entreprise->domaine}}
                            </td>
                            <td>{{$entreprise->email}}</td>
                            <td><span class="label gradient-1 btn-rounded"> compte actif</span>
                            </td>
                            <td><span style="font-size: 25px;"><a style="color: green" href="{{$entreprise->site}}" data-toggle="tooltip" data-placement="top" title="voir le site"><i class="fa fa-eye color-muted m-r-5"></i> </a><a style="color: red" href="#" data-toggle="tooltip" data-placement="top" title="Désactiver"><i class="fa fa-close color-danger"></i></a></span>
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