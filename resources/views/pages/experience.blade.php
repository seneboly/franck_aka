@extends('layout.app', ['title'=> 'Experience | Franck AKA Spécialiste en Gestion des Organisations &amp; Projets, Spécialiste en Management de Systèmes d’Information - Formateur en Techniques &amp; Opérations bancaires - Concepteur &amp; Développeur d’application Windows - Administrateur de bases de données - Collecteur &amp; Administrateur de données'])

@inject('d', 'App\services\Date')
@section('content')


<div class="row" style="padding-top:100px"></div>

<div class="page-header" >
	<div class="container">
		<h1 class="entry-title">Expériences Professionnelles</h1>
	</div>
</div>
<div id="content-inside" class="container left-sidebar">
   <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">
         <article id="post-29" class="post-29 page type-page status-publish hentry">
            <header class="entry-header">
            </header>
            <!-- .finetech start -->
            <div class="entry-content" id="finetech">  
               <div class="media">
                   <img src="{{asset('template/uploads/imgs/finetech.jpg')}}" class="rounded-circle mr-3" alt="Sample Image" width="80" height="65" style="float: left; padding:5px 15px">
                   <div class="media-body">
                       <h5>FINETECH Groupe</h5>
                       <p style="margin:-10px 20px 5px 00">Novembre 2015 - Aujourd'hui : {{$d->parse('1 november 2015')}}</p>
                       
                           <h6 style="padding-top: 10px; margin-bottom:5px"><i class="fas fa-star"></i> Chef de projet senior/Expert fonctionnel Core Banking Amplitude</h6>
                           <p style="margin:5px 20px 5px 00">Temps plein <br>Mai 2017 – Aujourd’hui : {{$d->parse('1 may 2017', now())}}</p>
                           <p style="margin:5px 20px 5px 00">Société Générale Sénégal
                            <img src="{{asset('template/uploads/imgs/sg.jpg')}}" class="rounded-circle mr-3" alt="logo SGBS" width="70" height="40" style="float: right; padding:5px 15px; margin-top:-20px" title="Société Générale Sénégal">
                           </p>
                              <ul>
                                <li>
                                  Conduite de plusieurs projets dans le respect des délais
                                  <ul>
                                    <li style="list-style-type: circle;">Programme BOOST : Responsable Stream Stabilisation CBS</li>
                                    <li style="list-style-type: circle;">Projet IBE (Cash Management) : Chef de projet </li>
                                    <li style="list-style-type: circle;">Projet Swift de Bout en Bout : Chef de Projet</li>
                                    <li style="list-style-type: circle;">Projet Delta Monétique : Chef de Projet</li>
                                    <li style="list-style-type: circle;">Projet Quartz (Changement de référentiel Tiers) : Chef de Projet</li>
                                    <li style="list-style-type: circle;">Projet Image Chèque : Chef de Projet</li>
                                    <li style="list-style-type: circle;">Projet Delta Monétique : Chef de Projet</li>
                                    <li style="list-style-type: circle;">Projet E-Taxe : Chef de Projet</li>
                                   
                                  </ul>
                                </li>
                                <li>Rédaction de dossier de Cadrage</li>
                                <li>Définition des spécifications fonctionnelles</li>
                                <li>Rédaction de cahiers de tests et Exécution des cas de tests</li>
                                <li>Planification et organisation des tests (Unitaires, Homologations,Recette)</li>
                                <li>Formation et assistance aux utilisateurs</li>
                                <li>Conduite de Changement et Suivi post-production</li>
                                <li>Recensement et détermination des dysfonctionnements</li>
                                <li>Résolution d’anomalies</li>
                                <li>Assistance et Conseil </li>
                                
                                <a  data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Voir plus</a>
                              </ul>
                         </li>
                       </ul>
                      
                        <div class="collapse" id="collapseExample">
                          <h6 style="padding-top: 10px; margin-bottom:5px"><i class="fas fa-star"></i> Crédit International SA Sénégal - Déploiement de la solution Amplitude version 11 : AMOA
                          </h6>
                          <ul>
                            <li>Assistance à Maitrise d’Ouvrage pour le domaine Etranger</li>
                            <li>Définition des spécifications fonctionnelles</li>
                            <li>Planification et organisation des tests</li>
                          </ul>

                          <h6 style="padding-top: 10px; margin-bottom:5px"><i class="fas fa-star"></i> BNI Madagascar - Migration du Core Banking (ISBA à Amplitude 10.1) : AMOA
                          </h6>
                          <ul>
                            <li>Responsable des domaines Engagements et opérations Internationales</li>
                            <li>Cadrage des fonctionnalités</li>
                            <li>Elaboration plan de tests et recettes</li>
                            <li>Présentation des modules au métier</li>
                            <li>Définition des spécifications fonctionnelles</li>
                            <li>Report du paramétrage</li>
                            <li>Planification et organisation des tests</li>
                            <li>Conduite de changement</li>
                            <li>Formation et assistance aux utilisateurs finaux</li>
                            <li>Assistance à la reprise des données (Migration de ISBA vers Amplitude)</li>
                          </ul>
                          <h6 style="padding-top: 10px; margin-bottom:5px"><i class="fas fa-star"></i> BGFI Sénégal – Modules CIP et Centrales des Risques : AMOA
                          </h6>
                          <ul>
                            <li>Assistance à la résolution des dysfonctionnements liés au Module CIP</li>
                            <li>Formation aux Utilisateurs et Conduite de changement</li>
                          </ul>

                           <h6 style="padding-top: 10px; margin-bottom:5px"><i class="fas fa-star"></i> Crédit International SA Sénégal - Module FATCA : AMOA
                          </h6>
                          <ul>
                            <li>Assistance à la résolution des dysfonctionnements liés au Module Fatca</li>
                            <li>Formation aux Utilisateurs et Conduite de changement</li>
                          </ul>
                        </div>
                   </div>
               </div>
           	</div>
            <hr>
            <!-- finetech-end -->
            <!-- sgbs start -->
             <div class="entry-content" id="sgbs">  
               <div class="media">
                   <img src="{{asset('template/uploads/imgs/sg.jpg')}}" class="rounded-circle mr-3" alt="Sample Image" width="80" height="60" style="float: left; padding:5px 15px">
                   <div class="media-body">
                       <h5>Société Générale Côte d'Ivoire</h5>
                       <p style="margin:-10px 20px 5px 00">Janvier 2014 - Novembre 2015 : {{$d->getDate('1 january 2014', '1 november 2015')}}</p>
                       
                           <h6 style="padding-top: 10px; margin-bottom:5px"><i class="fas fa-star"></i> Chef de projet senior</h6>
                              <ul>
                                <li>Surveillance Permanente (NARVAL) SGBCI: Manager Déclarant</li>
                                <li>Réalisation et déclaration de contrôles de SP</li>
                                <li>Soumission de contrôles dans l’outil Narval</li>
                                <li>Vérification des déclarations de surveillance permanente</li>
                                <li>Conduite de plusieurs projets dans le respect des délais</li>
                                <li>Projet Mono - Création de la Société Générale Togo (Déploiement de la solution Amplitude version 10.1 )</li>
                                <li>Responsable Domaine Engagement Projet Mono - Création de la Société Générale Togo (Déploiement de la solution Amplitude version 10.1) : Responsable Domaine Engagement
                                </li>
                                <li>Projets Migration P. Lease (Crédit leasing) : Chef de Projet pour les filiales SGBCI (côte d’Ivoire), SGGH (Ghana)</li>
                                <li>Projet B2B SGBCI : Chef de Projet</li>
                                <li>Projet IBE – Cash Management : Chef de Projet pour les filiales SGBF (Burkina Faso), SGGH (Ghana)</li>
                                <li>Projet TradeNet SGBCI - Outil Front de gestion de l’activité de commerce international (CREDOC et REMDOC) : Chef de Projet</li>
                                <li>Projet ARMONI SGBCI : Chef de Projet et référent CSM-S</li>
                                <li>Projet Mise à niveau de Patch Delta V9.0 2008Q4 SGBG (Guinée Conakry) : Responsable Campagne 4 (Interface Spécifique)</li>
                                <li>Programme Migration SironAML V10 : Référent CSM-SI</li>
                                <li>Filiales : SGBG (Guinée), SGBF (Burkina Faso), SGBCI (côte d’Ivoire), BFV-SG(Madagascar), SGM (Mauritanie), SGT (Tchad)</li>
                                <li>Projet Migration Delta Bank V10.0 SGBCI : Maitrise d’ouvrage.</li>
                                <a  data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">Voir plus</a>
                              </ul>
                         </li>
                       </ul>
                      
                        <div class="collapse" id="collapseExample1">
                          <h6 style="padding-top: 10px; margin-bottom:5px"><i class="fas fa-star"></i> Travaux et taches réalisés
                          </h6>
                          <ul>
                            <li>Déploiement de la solution Amplitude (version 9.1, 10.0, 10.1)</li>
                            <li>Formalisations de plusieurs procédures couvrant plusieurs domaines de la banque (Engagements, Moyens de paiements, International, Agence)</li>
                            <li>Rédaction de dossier de Cadrage</li>
                            <li>Définition et formalisation des besoins utilisateurs.</li>
                            <li>Définition des spécifications fonctionnelles</li>
                            <li>Rédaction de cahiers de tests et Exécution des cas de tests</li>
                            <li>Rédaction du document de paramétrage</li>
                            <li>Mise en place du paramétrage</li>
                            <li>Homologation Fonctionnelle et Technique</li>
                            <li>Recette utilisateurs et validation</li>
                            <li>Planification et organisation des tests</li>
                            <li>Formation et assistance aux utilisateurs</li>
                            <li>Conduite de changement et Suivi post-production</li>
                            <li>Recensement et détermination des dysfonctionnements</li>
                            <li>Résolution d’anomalies</li>
                            <li>Assistance et Conseil</li>
                            <li>Pilotage, préparation, accompagnement (recette, bascule, déploiement).</li>
                            <li>Suivi et contrôle de l’avancement du projet.</li>
                            <li>Définition des spécifications fonctionnelles</li>
                            <li>Rédaction de cahiers de tests et Exécution des cas de tests</li>
                            <li>Planification et organisation des tests (Unitaires, Homologations, Recette)</li>
                            <li>Formation et assistance aux utilisateurs</li>
                            <li>Conduite de Changement et Suivi post-production</li>
                            <li>Recensement et détermination des dysfonctionnements</li>
                            <li>Résolution d’anomalies</li>
                            <li>Assistance et Conseil</li>
                           
                          </ul>

                          <h6 style="padding-top: 10px; margin-bottom:5px"><i class="fas fa-star"></i> CONCEPTEUR - PARAMÉTREUR</h6>
                          <p style="margin:5px 20px 5px 00">Mars 2012 – Décembre 2013 : {{$d->getDate('1 march 2012', '31 november 2013')}}</p>
                             <ul>
                               <li>Gestion d’application (support et analyse fonctionnelles)</li>
                               <li>Définition et formalisation des besoins utilisateurs.</li>
                               <li>Paramétrage des évolutions et élaboration des scénarios</li>
                               <li>Recette Utilisateur et Exécution des cas de tests</li>
                               <li>Planification et organisation des tests</li>
                               <li>Formation et assistance aux utilisateurs</li>
                               <li>Conduite de Changement</li>
                               <li>Formalisation des écarts entre le fonctionnement standard et les besoins exprimés</li>
                               <li>Recensement et détermination des dysfonctionnements</li>
                               
                             </ul>
                        </div>
                   </div>
               </div>
             </div>
             <hr>
            <!-- sgbs-end -->

            <!-- suite sgbs start -->
            
            <!-- sgbs suite- end -->
            <!-- pnud start -->
            <div class="entry-content" id="pnud">  
              <div class="media">
                  <img src="{{asset('template/uploads/imgs/pnud.jpg')}}" class="rounded-circle mr-3" alt="Sample Image" width="80" height="60" style="float: left; padding:5px 20px">
                  <div class="media-body">
                      <h5>Programmes des Nations Unies pour le Développement (PNUD) - Unité Post-Crise Projet Early Recovery</h5>
                      <p style="margin:-10px 20px 5px 00">Juillet 2011 – Décembre 2011 : {{$d->getDate('1 july 2011', '31 december 2011')}}</p>
                      
                          <h6 style="padding-top: 10px; margin-bottom:5px"><i class="fas fa-star"></i> EXPERT EN BASE DE DONNÉES</h6>
                             <ul>
                               <li>Développement d’un système de gestion de l’évaluation des besoins des populations affectées par la crise post-électorale</li>
                               <li>Développement d’un système de gestion de la base de données cartographique.</li>
                               <li>Mise en place d’une procédure de collecte de données</li>
                               <li>Centralisation et Consolidation des données et intégration des données dans la Base de Données</li>
                               <li>Analyse des données et production de divers rapports</li>
                               <li>Membre du Working Group (OCHA)</li>
                               <li>Rédaction de la documentation de conception du logiciel et du manuel d’utilisation</li>
                               <li>Formation et encadrement des utilisateurs de l’application</li> 
                             </ul>
                        </li>
                      </ul>
                     
                  </div>
              </div>
            </div>
            <hr>
            <!-- end pnud -->

            <!-- label start -->
            <div class="entry-content" id="label">  
              <div class="media">
                  <img src="{{asset('template/uploads/imgs/label.jpg')}}" class="rounded-circle mr-3" alt="Label" width="80" height="60" style="float: left; padding:5px 20px">
                  <div class="media-body">
                      <h5>Label</h5>
                      <p style="margin:-10px 20px 5px 00">Août 2010 – Juin 2011 : {{$d->getDate('1 august 2010', '31 july 2011')}}</p>
                      
                          <h6 style="padding-top: 10px; margin-bottom:5px"><i class="fas fa-star"></i> INFORMATICIEN - DÉVELOPPEUR D’APPLICATION WINDOWS</h6>
                             <ul>
                               <li>Maintenance corrective et évolutives d’applications spécifiques</li>
                               <li>Conception et Réalisation d’applications spécifiques.</li>
                               <li>Implémentation de fonctions complémentaires Sage Ligne 100 (Gestion Commerciale et Comptabilité)</li>
                               <li>Gestion du planning et de l’avancement</li>
                                
                             </ul>
                        </li>
                      </ul>
                     
                  </div>
              </div>
            </div>
            <hr>
            <!-- label end -->
           

            <!-- cnpra suite with logo -->
            <div class="entry-content" id="rci">  
              <div class="media">
                  <img src="{{asset('template/uploads/imgs/rci.jpg')}}" class="rounded-circle mr-3" alt="Sample Image" width="80" height="60" style="float: left; padding:5px 20px">
                  <div class="media-body">
                      <h5>Cabinet du Premier Ministre - Comité National de Pilotage du Redéploiement de l’Administration (CNPRA)</h5>
                      <p style="margin:-10px 20px 5px 00">Mai 2007 - Mars 2009 : {{$d->getDate('1 may 2007', '30 march 2009')}}</p>
                      
                          <h6 style="padding-top: 10px; margin-bottom:5px"><i class="fas fa-star"></i> ASSISTANT CHARGÉ DES BASES DE DONNÉES</h6>
                             <ul>
                               <li>Conception et Réalisation d’un système de gestion des paiements de primes aux fonctionnaires redéployés dans les zones Ex-CNO (Centre, Nord, Ouest)</li>
                               <li>Rédaction de manuels d’utilisation</li>
                               <li>Missions de sédentarisation des fonctionnaires redéployés</li>
                               <li>Maintenance des bases de données</li>
                               
                             </ul>
                        </li>
                      </ul>
                     
                     <h6 style="padding-top: 10px; margin-bottom:5px"><i class="fas fa-star"> MEMBRE DE L’ÉQUIPE DE GESTION DU PROJET FISDES CIV10 00069581 – VOLET CNPRA</i> 
                     </h6>
                     <p style="margin:5px 20px 5px 00">Mars 2009 - Juin 2011 : {{$d->getDate('1 march 2009', '30 june 2011')}}</p>
                     <ul>
                       <li>Conception et réalisation de la cartographie des projets du PNUD</li>
                       <li>Elaboration de dossiers d’Appel d’Offres.</li>
                       <li>Dépouillement des offres</li>
                       <li>Missions conjointes PNUD/CNPRA d’évaluation d’édifices détruits</li>
                       <li>Missions conjointes PNUD/CNPRA d'installation de chantiers</li>
                       <li>Missions conjointes PNUD/CNPRA de suivi et contrôle des travaux de réhabilitation d’édifices socio-éducatifs, centres de santé en Ex-Zone CNO et des sites d’encasernement et de cantonnement des Ex-Combattants</li>
                       
                     </ul>
                  </div>
              </div>
            </div>
            <hr>
            <!--end -->
            <!-- codinorm  logo -->
            <div class="entry-content" id="cin">  
              <div class="media">
                  <img src="{{asset('template/uploads/imgs/cin.jpg')}}" class="rounded-circle mr-3" alt="Sample Image" width="80" height="60" style="float: left; padding:5px 20px">
                  <div class="media-body">
                      <h5>Côte d’Ivoire Normalisation (CODINORM)</h5>
                      <p style="margin:-10px 20px 5px 00">Fév. 2008 - Nov. 2010 : {{$d->getDate('1 february 2008', '30 november 2010')}}</p>
                      
                          <h6 style="padding-top: 10px; margin-bottom:5px"><i class="fas fa-star"></i> MEMBRE DU COMITÉ TECHNIQUE 19</h6>
                             <ul>
                               <li>Participation aux travaux sur la normalisation d’Office Open XML</li>
                               <li>Participation aux travaux sur la norme ISO 27000</li>
                               <li>Participation aux travaux du sous-comité 27 (Ingénierie du logiciel et des systèmes – Techniques de sécurité)</li>
                              
                               
                               <li>Participation aux travaux du sous-comité 34 (Description des documents et langages de traitement)</li>
                               <li>Séminaire intitulé « Gouvernance IT et Normalisation »</li>
                               <li>Séminaires et Ateliers de formation</li>                               
                               <li>Réunion d’étude de projets de Normes</li>
                               
                             </ul>
                        </li>
                      </ul>
                     
                  </div>
              </div>
            </div>
            <hr>
            <!--end -->

            <!-- gia  logo -->
            <div class="entry-content" id="gia">  
              <div class="media">
                  <img src="{{asset('template/uploads/imgs/gia.jpg')}}" class="rounded-circle mr-3" alt="Sample Image" width="80" height="60" style="float: left; padding:5px 20px">
                  <div class="media-body">
                      <h5>Groupe Ivoire Académie – Abidjan, Côte d’Ivoire</h5>
                      <p style="margin:-10px 20px 5px 00">Nov. 2006 – Déc. 2011 : {{$d->getDate('1 november 2006', '31 december 2011')}}</p>
                      
                          <h6 style="padding-top: 10px; margin-bottom:5px"><i class="fas fa-star"></i> ENSEIGNANT VACATAIRE EN CYCLE INGÉNIEUR</h6>
                             <ul>
                               <li>Matière enseignées : Architecture DotNet, VB.net, UML, Merise, Algorithme et Langage C</li>
                               <li>Administrateur Microsoft IT Academy</li>
                               <li>Moniteur de Microsoft Student Club</li>
                               <li>Participation à Imagine Cup (championnats du monde étudiants de l’innovation numérique) :
                                 <ul>
                                   <li style="list-style-type: circle;">Imagine Cup 2008 : Coach 2ème Meilleure Equipe de l’Afrique de l’Ouest et du Centre</li>
                                   <li style="list-style-type: circle;">Imagine Cup 2009 : Coach 4ème Meilleure Equipe de l’Afrique de l’Ouest et du Centre</li>
                                   <li style="list-style-type: circle;">Imagine Cup 2010 et 2011 : Membre du Jury</li>
                                   
                                 </ul>
                               </li>
                               <li>Réunion d’étude de projets de Normes</li>
                               <li>Séminaires et Ateliers de formation</li>
                               
                               
                             </ul>
                        </li>
                      </ul>
                     
                  </div>
              </div>
            </div>
            <hr>
            <!--end -->
            <div class="entry-content">  
              <div class="media">
                  <img src="{{asset('template/uploads/imgs/no-image-icon.png')}}" class="rounded-circle mr-3" alt="Sample Image" width="80" height="60" style="float: left; padding:5px 20px">
                  <div class="media-body">
                      <h5>Direction Général de l’Administration du Territoire</h5>
                      <p style="margin:-10px 20px 5px 00">MARS 2006 – AOUT 2008 : {{$d->getDate('1 march 2006', '30 august 2008')}}</p>
                      
                          <h6 style="padding-top: 10px; margin-bottom:5px"><i class="fas fa-star"></i> DÉVELOPPEMENT ET INTÉGRATION DE PROGICIELS ET SITES WEB</h6>
                             <ul>
                              <li>Direction Général de l’Administration du Territoire

                                <ul>
                                  <li style="list-style-type: circle;">Conception et Réalisation d’un système de Gestion des Ressources Humaines</li>
                                  <li style="list-style-type: circle;">Rédaction du manuel d’utilisation</li>
                                  
                                </ul>
                              </li>
                              <li>
                                CESA-Banking SARL
                                <ul>
                                  <li style="list-style-type: circle;">Conception et Réalisation d’un système de Contrôle des Opérations Bancaires</li>
                                  <li style="list-style-type: circle;">Déploiement de l’application sur sites client</li>
                                  <li style="list-style-type: circle;">Rédaction du manuel d’utilisation et Formation des commerciaux</li>
                                </ul>
                              </li>
                              <li>Optimum Conseil Côte d’Ivoire (Octobre 2006 – Juin 2007)
                                <ul>
                                  <li style="list-style-type: circle;">Chef de Projets Windows</li>
                                  <li style="list-style-type: circle;">Conception et Réalisation d’applications spécifiques</li>
                                  
                                </ul>
                              </li>
                              
                                
                             </ul>
                        </li>
                      </ul>
                     
                  </div>
              </div>
            </div>


         </article>
         <!-- #post-## -->
      </main>
      <!-- #main -->
   </div>
   <!-- #primary -->

 <!-- Sidebar left -->
 @include('inc.left_sidebar')

</div>


@endsection


