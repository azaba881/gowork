@extends('./layouts.entreprise')

@section('content')

   

    

    <div class="container-fluid">
        

        <div class="card" style="margin-top: 20px">
            <div class="card-body">
                <h4 class="card-title">LES CANDIDATURES</h4>
               
                <div class="table-responsive">
                    <table class="table  verticle-middle">
                        <thead>
                            <tr>
                                <th scope="col">NOM ET PRÉNOMS</th>
                                <th scope="col">compétence 1</th>
                                <th scope="col">compétence 2</th>
                                <th scope="col">compétence 3</th>
                                <th scope="col">compétence 4</th>
                                <th scope="col">compétence 5</th>
                                <th scope="col">Pourcentage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td class="text-left"><a href="" style="color: blue;">SASSOU Laurent</a></td>
                                <td> 
                                    <i style="margin-right:15px;" class="fa fa-check text-success"></i>
                                </td>
                                <td> 
                                    <i style="margin-right:15px;" class="fa fa-check text-success"></i>
                                </td>
                                <td> 
                                    <i style="margin-right:15px;" class="fa fa-check text-success"></i>
                                </td>
                                <td> 
                                    <i style="margin-right:15px;" class="fa fa-check text-success"></i>
                                </td>
                                <td> 
                                    <i style="margin-right:15px;" class="fa fa-check text-success"></i>
                                </td>
                                <td> 
                                    <span>100%</span>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td class="text-left"><a href="" style="color: blue">KPADE Innocent</a></td>
                                <td> 
                                    <i style="margin-right:15px;" class="fa fa-check text-success"></i>
                                </td>
                                <td> 
                                    <i style="margin-right:15px;" class="fa fa-check "></i>
                                </td>
                                <td> 
                                    <i style="margin-right:15px;" class="fa fa-check text-success"></i>
                                </td>
                                <td> 
                                    <i style="margin-right:15px;" class="fa fa-check "></i>
                                </td>
                                <td> 
                                    <i style="margin-right:15px;" class="fa fa-check text-success"></i>
                                </td>
                                <td> 
                                    <span>60%</span>
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
