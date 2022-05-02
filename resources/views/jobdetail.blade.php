
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    box-sizing:content-box;
}
body 
{ max-width:1280px;
  background-color:white;
  margin:auto;
  font-family: arial, sans-serif;
  
   /* BOXED BODY or FULL WIDTH BODY*/
  /* mettre la ligne suivante en commentaire pour passer en full width */
  max-width:1600px;
  
}

/* parents */

/* flex et espacement sur les coté de la section */
.two-col-fw-1 {
    margin:0px 0px 0px 0px;  
    padding:0px 0px 0px 0px; 
    /* alternative en pourcentage */
    /* padding:0px 10% 0px 10%; */
    
    } 

/* childs */
.two-col-fw-1 article {
  display:flex;
 /*pou centrer le texte*/ 
  align-items:center;
  /* pour switcher les colonnes enlever le commentaire la ligne ci dessous */
    /*flex-direction:row-reverse;*/

}
.two-col-fw-1 div:nth-child(1) {
width:50%;
background-color:unset;
overflow:hidden;
}
.two-col-fw-1 div:nth-child(2) {
width:50%; 
background-color:unset;
}

/* réglage des espaces du bloc texte */
.two-col-fw-1 div:nth-child(2)  {
/*background-color:white;*/
padding:10px;

}

/* image responsive adaptive */
.two-col-fw-1 img {
  width: 100%;
  height: auto;
  max-width: unset;
  }

/* reglage des titres et texte de la section .two-col-fw  */
.two-col-fw-1 h1 {
  color:#28639d;
  text-align:left; 
  font-size:2em;
  font-style:italic;
  padding:0em 0em 0em 0em;
}

.two-col-fw-1 p {
  color:black;
  text-align:justify;  
  font-style:normal;
  font-size:1em;
  padding:1em 0em 0em 0em;
}

/* reglage du séparateur  */
.two-col-fw-1 hr {
  border: 0.5px solid black;
  width:33%;
  /* pour centrer le séparateur, décommentez la ligne ci dessous */
   margin:left; 
  }

section{
  text-align:center;
  color:#ce6a85;
  margin-top:50px;
}

section hr {
  color:#0e6ba8;
  width:200px;
  margin:auto;
}

span {
  font-weight:bold;
}

img{ 
width:100%;
height:auto;
max-width:unset;
 }
@media screen and (max-width: 900px) {
  
  /* start */
  

  
  article, section, section div { 
  align-items: flex-start !important;
  justify-content:flex-start !important;
  flex-direction:column !important;
  margin:0 !important;
  padding:0 !important; 
  height:unset !important; 
  width:100% !important;
    /* le calcul des padding et border est intégré */
  box-sizing: border-box !important;
  
    /* espace entre tous les items */
  margin-bottom:20px !important;   
  }
  
  body {
    /* reset du Boxed vers full width */ 
  width:100% !important;
    /* padding de la page complete */  
  padding:0px !important;

  }
    /* padding des paragraphes */  
  p, h1, h2, hr {margin:0px 5px !important;  }
    
 
 
  /* end */
    
}
    </style>
</head>
<body>
   
<main> 
    <!-- 2 colonnes full width avec image et texte -->
 <section class="two-col-fw-1">
   <article>
   <div>
 
    <img src="{{$job->affiche}}" style="margin-right: 20px" width="400px" height="400px" alt=""> 
  
   </div>
   
   <div>
    <h1>Nos weekends et courts séjours au ski</h1><br>
    <hr>
    <p>
 Tous nos villages sont disponibles en weekend et courts séjours mais les réservations se font uniquement par téléphone ou sur notre formulaire de rappel.
 
 
 
 Réservation par téléphone uniquement au 04 91 04 87 04
 Service & appel gratuit</p>
   </div>
   </article>
 </section> 
 </main> 

 
  
         
              <div>
                 
              </div>
           
              <div style="margin-top:20px;">
                  <h3 style="font-weight: 800;font-family:helvetica">INTITULÉ : </h3> {{$job->title}} <br>
                  <h3 style="font-weight: 800;font-family:helvetica">EXPERIENCE : </h3> {{$job->experience}}<br>
                  <h3 style="font-weight: 800;font-family:helvetica">DESCRIPTION : </h3> <p>{{$job->description}}</p> <br>
                                  
                  
                  <table class="table  verticle-middle"  >
                      <tbody>
                          <tr>
                              <td><h5 style="">NOMBRE </h5> </td>
                              <td><h5 style="">VILLE </h5> </td>
                              <td>
                                  <h5 style="">DOMAINE </h5> 
                              </td>
                              <td><h5 style=""> EXPIRATION</h5> </td>
                          </tr>
                          <tr>
                              <td><h5 style="">{{$job->nombre}} </h5> </td>
                              <td><h5 style="">{{$job->ville}} </h5> </td>
                              <td>
                                  <h5 style="">{{$job->categorie}} </h5> 
                              </td>
                              <td><h5 style=""> {{$job->expiration}}</h5> </td>
                          </tr>
                      </tbody>
                  </table>
  
                  <a class="btn gradient-1" href="">POSTULER</a>
              
         

  
</body>
</html>



