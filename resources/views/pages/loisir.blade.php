@extends('layout.app', ['title'=> 'Loisirs | Franck AKA Spécialiste en Gestion des Organisations &amp; Projets, Spécialiste en Management de Systèmes d’Information - Formateur en Techniques &amp; Opérations bancaires - Concepteur &amp; Développeur d’application Windows - Administrateur de bases de données - Collecteur &amp; Administrateur de données'])

@push('css')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

   <link rel="stylesheet" href="{{asset('public/css/tabs.css')}}">
   <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
   <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  <style>
    dd, ul.vieasso-ul > li{
      color:rgba(00, 00, 00, 0.7) !important;
      line-height:30px !important;
    }

    dd > iconify-icon span {
      background:#f00 !important;
    }

  </style>

@endpush

@section('content')



<div class="page-header" style="padding-top: 75px">
     <div class="container">
          <h1 class="entry-title">Loisirs</h1>
     </div>
</div>
<div id="content-inside" class="container left-sidebar" style="padding-bottom: 70px">
   <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">
         
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
              
              <p>
                 Pour en savoir un peu plus sur moi, voici quelques-uns de mes passe-temps, entre sport, vie associative, Séries TV et autres médias…
              </p>

               <div class="tabbable-panel">
                  <div class="tabbable-line">
                     <ul class="nav nav-tabs ">
                        <li class="active" >
                           <a href="#tab_default_1" data-toggle="tab">
                            <h5 class="fontfamily">
                             <iconify-icon class="text-danger" data-icon="ic:baseline-bubble-chart"></iconify-icon>
                             Sport 
                          </h5>
                       </a>
                        </li>
                        <li >
                           <a href="#tab_default_2" data-toggle="tab">
                            <h5 class="fontfamily">
                           <iconify-icon class="text-danger" data-icon="ic:baseline-bubble-chart"></iconify-icon>
                            Vie Associative
                           </h5>
                        </a>
                        </li>

                         <li >
                           <a href="#tab_default_3" data-toggle="tab">
                            <h5 class="fontfamily">
                           <iconify-icon class="text-danger" data-icon="ic:baseline-bubble-chart"></iconify-icon>
                            Musique
                           </h5>
                        </a>
                        </li>
                        <li >
                           <a href="#tab_default_4" data-toggle="tab">
                            <h5 class="fontfamily">
                           <iconify-icon class="text-danger" data-icon="ic:baseline-bubble-chart"></iconify-icon>
                           Séries TV & Cinéma
                           </h5>
                        </a>
                        </li>

                         <li >
                           <a href="#tab_default_5" data-toggle="tab">
                            <h5 class="fontfamily">
                           <iconify-icon class="text-danger" data-icon="ic:baseline-bubble-chart"></iconify-icon>
                           Bricolage 
                           </h5>
                        </a>
                        </li>
                      
                     </ul>
                     <div class="tab-content">
                        <div class="tab-pane active" id="tab_default_1">
                         <hr size="1" />

                         <dl>
                           <dt>
                               <iconify-icon data-icon="fa:stop"></iconify-icon>
                               Sport :
                           </dt>
                              <dd>
                                  <iconify-icon class="text-danger" data-icon="mdi:record-circle-outline"></iconify-icon>
                                  Natation
                               </dd>
                              <dd>
                                  <iconify-icon class="text-danger" data-icon="mdi:record-circle-outline"></iconify-icon>
                                  Boxe Thaïlandaise
                               </dd>
                              <dd>
                                  <iconify-icon class="text-danger" data-icon="mdi:record-circle-outline"></iconify-icon>
                                  Athlétisme
                               </dd>
                              <dd>
                                  <iconify-icon class="text-danger" data-icon="mdi:record-circle-outline"></iconify-icon>
                                  Volley-Ball
                               </dd>
                              <dd>
                                  <iconify-icon class="text-danger" data-icon="mdi:record-circle-outline"></iconify-icon>
                                  Randonnée, course à pieds (Loisirs)
                               </dd>
                         </dl>

                        </div>
                        <div class="tab-pane" id="tab_default_2">
                           <hr size="1" />

                           <dl>
                             <dt>
                                 <iconify-icon data-icon="fa:stop"></iconify-icon>
                                 Vie Associative :
                             </dt>
                                <dd>
                                    <iconify-icon class="text-danger" data-icon="mdi:record-circle-outline"></iconify-icon>
                                    Conseiller chargé des Technologies de l’Information et de la Communication à la Cour Royale de Krindjabo
                                 </dd>
                                <dd>
                                    <iconify-icon class="text-danger" data-icon="mdi:record-circle-outline"></iconify-icon>
                                    Président de la Communauté AfrikDotNet Côte d’Ivoire 
                                    <span style="color: #cf0000;">2009 - 2012</span>: 
                                    Association dédiée aux nouvelles technologies Microsoft et à la plateforme .Net (DotNet) et Moniteur de Microsoft Student Club
                                 </dd>
                                <dd>
                                    <iconify-icon class="text-danger" data-icon="mdi:record-circle-outline"></iconify-icon>
                                    Président de l’Amicale des Jeunes de Krindjabo – Aboisso  (AJK-Kassamegouan) 
                                    <span style="color: #cf0000;">2011 - 2013</span>
                                 </dd>
                                <dd>
                                    <iconify-icon class="text-danger" data-icon="mdi:record-circle-outline"></iconify-icon>
                                    Porte-parole adjoint du collège des délégués du personnel (Société Générale Côte d’Ivoire) 
                                    <span style="color: #cf0000;">2013 - 2015</span>
                                 </dd>
                                <dd>
                                    <iconify-icon class="text-danger" data-icon="mdi:record-circle-outline"></iconify-icon>
                                    Intérêt pour les activités culturelles et associatives
                                 </dd>
                                 <dd>
                                   <iconify-icon class="text-danger" data-icon="mdi:record-circle-outline"></iconify-icon>
                                   Association des étudiants étrangers de la FSEGS
                                 </dd>
                                   <ul class="vieasso-ul">
                                     <li>2004 - 2005 : Conseiller</li>
                                     <li>2003 - 2004 : Secrétaire Général</li>
                                     <li>2002 - 2003 : secrétaire chargé de l’organisation</li>
                                     <li>2001 - 2002 : secrétaire chargé du sport</li>
                                   </ul>
                           </dl>

                        </div>

                          <div class="tab-pane" id="tab_default_3">
                           
                            <hr size="1" />

                            <dl>
                              <dt>
                                  <iconify-icon data-icon="fa:stop"></iconify-icon>
                                  Musique :
                              </dt>

                              <dd>
                                  <iconify-icon class="text-danger" data-icon="mdi:record-circle-outline"></iconify-icon>
                                  R'nb
                               </dd>
                               <dd>
                                  <iconify-icon class="text-danger" data-icon="mdi:record-circle-outline"></iconify-icon>
                                  Zouglou
                               </dd>
                                <dd>
                                  <iconify-icon class="text-danger" data-icon="mdi:record-circle-outline"></iconify-icon>
                                  Soul
                               </dd>
                                <dd>
                                  <iconify-icon class="text-danger" data-icon="mdi:record-circle-outline"></iconify-icon>
                                  Classic
                               </dd>
                                <dd>
                                  <iconify-icon class="text-danger" data-icon="mdi:record-circle-outline"></iconify-icon>
                                  Gospel
                               </dd>

                               <dd>
                                  <iconify-icon class="text-danger" data-icon="mdi:record-circle-outline"></iconify-icon>
                                  Coupé Décalé… ( en particulier R. Kelly, Yodé et Siro, Espoir 2000 )
                               </dd>
                            </dl>

                          </div>
                          <div class="tab-pane" id="tab_default_4">
                           
                            <hr size="1" />

                            <dl>
                              <dt>
                                  <iconify-icon data-icon="fa:stop"></iconify-icon>
                                  Séries TV :
                              </dt>
                                 <dd>
                                     <iconify-icon class="text-danger" data-icon="mdi:record-circle-outline"></iconify-icon>
                                     Le Caméléon
                                  </dd>
                                 <dd>
                                     <iconify-icon class="text-danger" data-icon="mdi:record-circle-outline"></iconify-icon>
                                     24 Heures Chrono
                                  </dd>
                                 <dd>
                                     <iconify-icon class="text-danger" data-icon="mdi:record-circle-outline"></iconify-icon>
                                     Vikings
                                  </dd>
                                 <dd>
                                     <iconify-icon class="text-danger" data-icon="mdi:record-circle-outline"></iconify-icon>
                                     Criminal Minds
                                  </dd>
                            </dl>
                            <hr size="1" />

                            <dl>
                              <dt>
                                  <iconify-icon data-icon="fa:stop"></iconify-icon>
                                  Cinéma :
                              </dt>
                                 <dd>
                                     <iconify-icon class="text-danger" data-icon="mdi:record-circle-outline"></iconify-icon>
                                     The Usual suspects
                                  </dd>
                                 <dd>
                                     <iconify-icon class="text-danger" data-icon="mdi:record-circle-outline"></iconify-icon>
                                     Basic
                                  </dd>
                                 <dd>
                                     <iconify-icon class="text-danger" data-icon="mdi:record-circle-outline"></iconify-icon>
                                     Million Dollar Baby
                                  </dd>
                                 <dd>
                                     <iconify-icon class="text-danger" data-icon="mdi:record-circle-outline"></iconify-icon>
                                     Menace II Society
                                  </dd>
                                 <dd>
                                     <iconify-icon class="text-danger" data-icon="mdi:record-circle-outline"></iconify-icon>
                                     Marvels (Captain Americo, Thor, Iron Man, Avengers,…)
                                  </dd>
                            </dl>

                          </div>
                          <div class="tab-pane" id="tab_default_5">
                                   
                              <hr size="1" />

                                 <dl>
                                   <dt>
                                       <iconify-icon data-icon="fa:stop"></iconify-icon>
                                       Bricolage :
                                   </dt>
                                      <dd>
                                          <iconify-icon class="text-danger" data-icon="mdi:record-circle-outline"></iconify-icon>
                                          Construction de maquette
                                       </dd>
                                      <dd>
                                          <iconify-icon class="text-danger" data-icon="mdi:record-circle-outline"></iconify-icon>
                                          Meuble
                                       </dd>
                                 </dl>
                          </div>
 
                       
                     </div>
                  </div>
               </div>  
            </div>
         </div>
        </div>

         <!-- #post-## -->
      </main>
      <!-- #main -->
   </div>
   <!-- #primary -->

 <!-- Sidebar left -->
 @include('inc.left_sidebar')

</div>


<script>
$('#myTab a[href="#competences_techniques-tab"]').tab('show');
</script>
@endsection