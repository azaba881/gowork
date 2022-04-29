@extends('./layouts.entreprise')

@section('content')

   

    

    <div class="container-fluid">
        <div class="row" style="widht:100%;padding-left: 5px;widht:100%">
            <div class="col-8">
            <a href="{{route('evaluation')}}" style="font-size:18px;" class="btn gradient-4 hidden-xs hidden-sm waves-effect waves-light"> Consulter l'évalution </a>
            </div>
            
        </div>

        <div class="card" style="margin-top: 20px">
            <div class="card-body">
                <h4 class="card-title">LES CANDIDATURES</h4>
               
                <div class="table-responsive">
                    <table class="table  verticle-middle">
                        <thead>
                            <tr>
                                <th scope="col" class="text-danger">N°</th>
                                <th scope="col">OFFRE</th>
                                <th scope="col">DEMANDEUR</th>
                                <th scope="col">DATE DE CANDIDATURE	</th>
                                <th scope="col">STATUT	</th>
                                <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td> <a href="" style="color: blue">Titre de l'offre</a></td>
                                <td>
                                    Job
                                </td>
                                <td>23 septembre 2012	</td>
                                <td><span class="label gradient-1 btn-rounded">En cours ...	</span>
                                </td>
                                <td><span style="font-size: 20px;"><a href="#" data-toggle="tooltip" data-placement="top" title="VOIR LA CANDIDATURE"><i style="margin-right:15px;" class="fa fa-eye text-info"></i><a href="#" data-toggle="tooltip" data-placement="top" title="TÉLÉCHARGER LE DOSSIER DE CANDIDATURE"><i style="margin-right:15px;" class="fa fa-download sweet-success-cancel text-dark"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="ACCEPTER"><i class="fa fa-check text-success m-r-8"></i> </a><a href="#" data-toggle="tooltip" data-placement="top" title="REFUSER"><i style="margin-left:10px;" class="fa fa-close text-danger"></i></a></span>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Textiles</td>
                                <td>
                                    Stage
                                </td>
                                <td>23 septembre 2012</td>
                                <td><span class="label gradient-2 btn-rounded">refusée</span>
                                </td>
                                <td><span style="font-size: 20px;"><a href="#" data-toggle="tooltip" data-placement="top" title="VOIR LA CANDIDATURE"><i style="margin-right:15px;" class="fa fa-eye text-info"></i><a href="#" data-toggle="tooltip" data-placement="top" title="TÉLÉCHARGER LE DOSSIER DE CANDIDATURE"><i style="margin-right:15px;" class="fa fa-download text-dark"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="ACCEPTER"><i class="fa fa-check text-success m-r-8"></i> </a><a href="#" data-toggle="tooltip" data-placement="top" title="REFUSER"><i style="margin-left:10px;" class="fa fa-close text-danger"></i></a></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>
        
@endsection
