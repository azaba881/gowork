@extends('layouts.app')

@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">CANDIDATURES</h4>
            <p class="admin-text-dark">Vous pouvez vos l'etat de vos candidatures ici ! <code>Bonne chance </code></p>
            <div class="table-responsive">
                <table class="table  verticle-middle">
                    <thead>
                        <tr>
                            <th scope="col" class="text-danger">N°</th>
                            <th scope="col">ENTREPRISE</th>
                            <th scope="col">INTITULÉ</th>
                            <th scope="col">DOMAINE</th>
                            <th scope="col">TYPE D'OFFRE</th>
                            <th scope="col">DATE LIMITE	</th>
                            <th scope="col">RÉPONSE</th>
                            <th scope="col">STATUT</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody> 
                        @if ($candidatures == null)
                            <h3>Aucune candidature en cours veuillez consdulter les offres</h3>
                        @else
                        @foreach ($candidatures as $candidature)
                        <tr>
                            <td>{{$nombre ++}}</td>
                            <td>ritterco</td>
                            <td>{{$candidature->title}}</td>
                            <td>{{$candidature->categorie}}</td>
                            <td>{{$candidature->type}}</td>
                            <td>{{$candidature->expiration}}</td>                            
                            <td>{{$candidature->reponse }}</td>                            
                            <td><span class="label gradient-1 btn-rounded">{{$candidature->statut}}	</span>
                            </td>
                            <td><span><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5" style="color:green"></i> </a><a href="#" data-toggle="tooltip" data-placement="top" title="Close"><i style="margin-left:10px;color:orange" class="fa fa-archive"></i></a></span>
                            </td>
                        </tr>
                        @endforeach 
                        @endif                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</div>
    
@endsection