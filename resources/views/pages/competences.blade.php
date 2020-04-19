@extends('layout.app', ['title'=> 'Compétences | Franck AKA Spécialiste en Gestion des Organisations &amp; Projets, Spécialiste en Management de Systèmes d’Information - Formateur en Techniques &amp; Opérations bancaires - Concepteur &amp; Développeur d’application Windows - Administrateur de bases de données - Collecteur &amp; Administrateur de données'])

@push('css')
<link href="{{asset('template/css/bootstrap.min.css')}}" rel="stylesheet" >

   <link rel="stylesheet" href="{{asset('public/css/tabs.css')}}">
   


@endpush

@section('content')



<div class="page-header" style="padding-top: 75px">
	<div class="container">
		<h1 class="entry-title">Compétences</h1>
	</div>
</div>
<div id="content-inside" class="container left-sidebar" style="padding-bottom: 70px">
   <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">
         
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
              

               <div class="tabbable-panel">
                  <div class="tabbable-line">
                     <ul class="nav nav-tabs ">
                        <li class="active" style="padding:00 30px">
                           <a href="#tab_default_1" data-toggle="tab">
                            <h5 class="fontfamily">
                             <iconify-icon  data-icon="ic:baseline-bubble-chart"></iconify-icon>
                             Compétences Techniques
                          </h5>
                       </a>
                        </li>
                        <li style="padding:00 30px">
                           <a href="#tab_default_2" data-toggle="tab">
                            <h5 class="fontfamily">
                           <iconify-icon  data-icon="ic:baseline-bubble-chart"></iconify-icon>
                           Compétences Organisationnelles
                           </h5>
                        </a>
                        </li>
                      
                     </ul>
                     <div class="tab-content">
                        <div class="tab-pane active" id="tab_default_1">
                         
                          <dl>
                             <h5 class="h5-inside-dl">
                                <iconify-icon style="color:#f00"data-icon="ic:outline-stop"></iconify-icon>
                                Langages & Outils
                             </h5>
                             <dd style="color:#000">
                                <ul>
                                  <li>Net Framework</li>
                                  <li>VB.Net</li>
                                  <li>C#</li>
                                  <li>C/C++</li>
                                  <li>SQL</li>
                                  <li>PL/SQL</li>
                                  <li>HTML</li>
                                  <li>Lotus</li>
                                  <li>Notes/Domino</li>
                                  <li>Prolog</li>
                                  <li>VBA</li>
                                  <li>Visual</li>
                                  <li>FoxPro 6.0</li>
                                  <li>Script Shell</li>
                                  <li>Assembleur</li>
                                  <li>Crystal</li>
                                  <li>report</li>
                                  <li>PHP (notions)</li>
                                 
                                </ul>
                                
                             </dd>
                          </dl>                        
                          <dl>
                             <h5 class="h5-inside-dl">
                                <iconify-icon style="color:#f00" data-icon="ic:outline-stop"></iconify-icon>
                                Base de Données
                             </h5>
                             <dd style="color:#000">
                                <ul>
                                  <li>Microsoft SQL Server</li>
                                  <li>Oracle</li>
                                  <li>Informix</li>
                                  <li>MySQL</li>
                                  <li>Microsoft Access</li>
                                </ul>
                                
                             </dd>
                          </dl>                        
                          <dl>
                             <h5 class="h5-inside-dl">
                                <iconify-icon style="color:#f00" data-icon="ic:outline-stop"></iconify-icon>
                                Conception Des SI
                             </h5>
                             <dd style="color: #000">
                                MERISE, UML.
                             </dd>
                          </dl> 
                          <dl>
                             <h5 class="h5-inside-dl">
                                <iconify-icon style="color:#f00" data-icon="ic:outline-stop"></iconify-icon>
                                Autres Logiciels Etudiés
                             </h5>
                             <dd style="color:#000">
                                <ul>
                                  <li>Delta Bank (V11.0, V10.1, V10.0, V9.1, V9.0)</li>
                                  <li>Sage Ligne 100 (Comptabilité et Gestion Commerciale)</li>
                                  <li>Microsoft Visual Studio</li>
                                  <li>Microsoft Expression</li>
                                  <li>Microsoft Office</li>
                                  <li>AMC Designor</li>
                                  <li>Joomla</li>
                                  <li>Rational Rose</li>
                                  <li>EasyPHP</li>
                                  <li>WampServer</li>
                                  <li>DotNet Nuke</li>
                                  <li>Squash TM</li>
                                </ul>
                                
                             </dd>
                          </dl>

                        </div>
                        <div class="tab-pane" id="tab_default_2">
                           
                        <dl>
                           <h5 class="h5-inside-dl">
                              <iconify-icon style="color:#f00" data-icon="ic:outline-stop"></iconify-icon>
                              Conduite de projet
                           </h5>
                           <dd style="color:#000">
                              <ul>
                                <li>PMP</li>
                                <li>PRISM</li>
                                <li>Gestion des charges
                                  <ul>
                                    <li>coûts</li>
                                    <li>délais</li>
                                    <li>plannings</li>
                                    <li>suivi avancement</li>
                                    <li>reporting</li>
                                    <li>diagramme de PERT</li>
                                    <li>Gantt</li>
                                  </ul>
                                </li>
                            
                              </ul>
                             
                           </dd>
                        </dl>                        
                        <dl>
                           <h5 class="h5-inside-dl">
                              <iconify-icon style="color:#f00" data-icon="ic:outline-stop"></iconify-icon>
                              Mise en Oeuvre
                           </h5>
                           <dd style="color:#000">
                              Analyse des besoins, suivi et déploiement de projets, tests, recette, formation, support, analyse Financière, Comptabilité Générale et Analytique.
                           </dd>
                        </dl>                        
                        <dl>
                           <h5 class="h5-inside-dl">
                              <iconify-icon style="color:#f00" data-icon="ic:outline-stop"></iconify-icon>
                              Spécifications
                           </h5>
                           <dd style="color:#000">
                              Rédaction des cahiers des charges, propositions commerciales, spécifications fonctionnelles et techniques, documents de recette, guide utilisateur.
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