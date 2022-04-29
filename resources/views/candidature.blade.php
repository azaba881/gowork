@extends('layouts.app')

@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">MES CANDIDATURES</h4>
            <p class="admin-text-dark">Vous pouvez vos l'etat de vos candidatures ici ! <code>Bonne chance </code></p>
            <div class="table-responsive">
                <table class="table  verticle-middle">
                    <thead>
                        <tr>
                            <th scope="col" class="text-danger">N°</th>
                            <th scope="col">ENTREPRISE</th>
                            <th scope="col">TYPE D'OFFRE</th>
                            <th scope="col">DATE DE CANDIDATURE	</th>
                            <th scope="col">STATUT	</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Deshmukh</td>
                            <td>
                                Job
                            </td>
                            <td>23 septembre 2012	</td>
                            <td><span class="label gradient-1 btn-rounded">En cours ...	</span>
                            </td>
                            <td><span><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a><a href="#" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
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
                            <td><span><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a><a href="#" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
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