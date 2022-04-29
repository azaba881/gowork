@extends('./layouts.entreprise')

@section('content')

<!-- section -->
<div class="col-lg-4 col-sm-6">
    <div class="card" style="padding:15px;padding-bottom:50px;border-radius:0;">
        <div class="text-center">
            <a href="javascript:void(0)"><img src="images/imgs/free.jpg" class="rounded-circle" width="50%" alt="img"></a>
            <h4 class="admin-text-dark">BASE</h4>
            <h1 style="color: red;">0 € <span style="font-size: 15px;color: black;">/ Mois</span> </h1>
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <td> <i style="margin-right: 10px;" class="fa  fa-chevron-down text-success" aria-hidden="true"></i>  Consultation des offres</td>                                                        
                        </tr>
                        <tr>
                            <td> <i style="margin-right: 10px;" class="fa  fa-chevron-down text-success" aria-hidden="true"></i> Gérer les candidatures</td>                                                        
                        </tr>
                        <tr>
                            <td> <i style="margin-right: 10px;" class="fa  fa-chevron-down text-success" aria-hidden="true"></i>  Postuler aux offres</td>                                                       
                        </tr>
                        <tr>
                            <td> <i style="margin-right: 10px;" class="fa  fa-chevron-down text-success" aria-hidden="true"></i>  Mise à jour du profil</td>                                                    
                        </tr>                      
                    </tbody>
                </table>
                @if (auth()->user()->abonnement == 'base')
                <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn" style="width: 80%;margin-top: 20px;color:black;background-color:rgb(209, 209, 209)">EN COURS ....</a></td>   
                @else
                <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-info" style="width: 80%;margin-top: 20px;">Choisir le plan</a></td>
                @endif
               
            </div>                                                  
        </div>
    </div>
</div>
<!-- end section -->

<!-- section -->
<div class="col-lg-4 col-sm-6">
<div class="card" style="padding:15px;padding-bottom:50px;border-radius:0;">
    <div class="text-center">
        <a href="javascript:void(0)"><img src="images/imgs/Standard.jpg" class="rounded-circle" width="50%" alt="img"></a>
        <h4 class="admin-text-dark">STANDARD</h4>
        <h1 style="color: red;">19,9 € <span style="font-size: 15px;color: black;">/ Mois</span> </h1>
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <td> <i style="margin-right: 10px;" class="fa  fa-chevron-down text-success" aria-hidden="true"></i>  Consultation des offres</td>                                                        
                    </tr>
                    <tr>
                        <td> <i style="margin-right: 10px;" class="fa  fa-chevron-down text-success" aria-hidden="true"></i> Gérer les candidatures</td>                                                        
                    </tr>
                    <tr>
                        <td> <i style="margin-right: 10px;" class="fa  fa-chevron-down text-success" aria-hidden="true"></i>  Postuler aux offres</td>                                                       
                    </tr>
                    <tr>
                        <td> <i style="margin-right: 10px;" class="fa  fa-chevron-down text-success" aria-hidden="true"></i>  Mise à jour du profil</td>                                                    
                    </tr>                      
                </tbody>
            </table>
            <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn" style="width: 80%;margin-top: 20px;background-color:green;color:white;">Choisir le plan</a></td>                                                     
    </div>
</div>
</div>
</div>
<!-- end section -->

<!-- section -->
<div class="col-lg-4 col-sm-6">
<div class="card" style="padding:15px;padding-bottom:50px;border-radius:0;">
<div class="text-center">
    <a href="javascript:void(0)"><img src="images/imgs/premium.png" class="rounded-circle" width="50%" alt="img"></a>
    <h4 class="admin-text-dark">PREMIUM</h4>
    <h1 style="color: red;">0 € <span style="font-size: 15px;color: black;">/ Mois</span> </h1>
    <div class="table-responsive">
        <table class="table">
            <tbody>
                <tr>
                    <td> <i style="margin-right: 10px;" class="fa  fa-chevron-down text-success" aria-hidden="true"></i>  Consultation des offres</td>                                                        
                </tr>
                <tr>
                    <td> <i style="margin-right: 10px;" class="fa  fa-chevron-down text-success" aria-hidden="true"></i> Gérer les candidatures</td>                                                        
                </tr>
                <tr>
                    <td> <i style="margin-right: 10px;" class="fa  fa-chevron-down text-success" aria-hidden="true"></i>  Postuler aux offres</td>                                                       
                </tr>
                <tr>
                    <td> <i style="margin-right: 10px;" class="fa  fa-chevron-down text-success" aria-hidden="true"></i>  Mise à jour du profil</td>                                                    
                </tr>                      
            </tbody>
        </table>
        <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn" style="width: 80%;margin-top: 20px;background-color:green;color:white">Choisir le plan</a></td>                                                     
</div>
</div>
</div>
<!-- end section -->
    
@endsection