<template>

	<div>
		 <h6 class="fontfamily lineHeight"">
			<img class="alignright ize-full wp-image-431 mwl-img pull-left none custom-padding" src="/template/uploads/imgs/sg.jpg" alt="" width="100" height="250" mwl-index="0">                     	
		 	Chef de Projet
		 </h6>
		 <p class="custom-margin lineHeight">
		   <span class="font lineHeight text-danger">
		      <em>Société Générale - Centre de Service Mutualisé Système d’Information (CSM-SI)</em>
		   </span>
		   <p class="font custom-margin">Janvier 2014 à Novembre 2015 : {{date}}.</p>
			
		 </p>
		
		<dl>
		  <dt>
		  	<iconify-icon data-icon="fa:stop"></iconify-icon>
		  	Surveillance Permanente (NARVAL) SGBCI: Manager Déclarant
		  </dt>
			  <dd class="m-l">
			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
			  	Réalisation et déclaration de contrôles de SP
			  </dd>
			  <dd class="m-l">
			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
			  	Soumission de contrôles dans l’outil Narval
			  </dd>
			  <dd class="m-l">
			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
			  	Soumission de contrôles dans l’outil Narval
		  	  </dd>
			  <dd class="m-l">
			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
			  	Vérification des déclarations de surveillance permanente
			  </dd>
		  <dt >
		  	<iconify-icon data-icon="fa:stop"></iconify-icon>
		  	Conduite de plusieurs projets dans le respect des délais
		  </dt>
			  <dd class="m-l">
			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
			  	Projet Mono - Création de la Société Générale Togo (Déploiement de la solution Amplitude version 10.1 ) : Responsable Domaine Engagement Projet Mono - Création de la Société Générale Togo (Déploiement de la
			  	solution Amplitude version 10.1) : Responsable Domaine Engagement
			  </dd>
			  <dd class="m-l">
			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
			  	Projets Migration P. Lease (Crédit leasing) : Chef de Projet pour les filiales SGBCI (côte d’Ivoire), SGGH (Ghana)
			  </dd>
			  <dd class="m-l">
			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
			  	Projet B2B SGBCI : Chef de Projet
			  </dd>
			  <dd class="m-l">
			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
			  	Projet IBE – Cash Management : Chef de Projet pour les filiales SGBF (Burkina Faso), SGGH (Ghana)
			  </dd>
			  <dd class="m-l">
			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
			  	Projet TradeNet SGBCI - Outil Front de gestion de l’activité de commerce international (CREDOC et REMDOC) : Chef de Projet
			  </dd>
			  <dd class="m-l">
			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
			  	Projet ARMONI SGBCI : Chef de Projet et référent CSM-S
			  </dd>
			  <dd class="m-l">
			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
			  	Projet Mise à niveau de Patch Delta V9.0 2008Q4 SGBG (Guinée Conakry) : Responsable Campagne 4 (Interface Spécifique)
			  </dd>
			  <dd class="m-l">
			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
			  	Programme Migration SironAML V10 : Référent CSM-SI
			  </dd>
			  <dd class="m-l">
			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
			  	Filiales : SGBG (Guinée), SGBF (Burkina Faso), SGBCI (côte d’Ivoire), BFV-SG(Madagascar), SGM (Mauritanie), SGT (Tchad)
			  </dd>
			  <dd class="m-l">
			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
			  	Projet Migration Delta Bank V10.0 SGBCI : Maitrise d’ouvrage.
			  </dd>

			  
		       <a @click="showInfos" v-if="noMoreInfos" class="btn btn-default btn-sm text-danger captalize pb-2 pt-2"><i class="fa fa-arrow-circle-down"></i> Voir Détails</a>
			  
		  	
		  	<div v-if="hiddenInfos">
		  		  <dt>
		  		  	<iconify-icon data-icon="fa:stop"></iconify-icon>
		  		  	Travaux et taches réalisés
		  		  </dt>
		  			  <dd class="m-l">
		  			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
		  			  	Déploiement de la solution Amplitude (version 9.1, 10.0, 10.1)
		  			  </dd>
		  			  <dd class="m-l">
		  			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
		  			  	Formalisations de plusieurs procédures couvrant plusieurs domaines de la banque (Engagements, Moyens de paiements, International, Agence)
		  			  </dd>
		  			  <dd class="m-l">
		  			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
		  			  	Rédaction de dossier de Cadrage
		  			  </dd>
		  			  <dd class="m-l">
		  			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
		  			  	Définition et formalisation des besoins utilisateurs.
		  			  </dd>
		  			  <dd class="m-l">
		  			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
		  			  	Définition des spécifications fonctionnelles
		  			  </dd>
		  			  <dd class="m-l">
		  			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
		  			  	Rédaction de cahiers de tests et Exécution des cas de tests
		  			  </dd>
		  			  <dd class="m-l">
		  			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
		  			  	Rédaction du document de paramétrage
		  			  </dd>
		  			  <dd class="m-l">
		  			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
		  			  	Mise en place du paramétrage
		  			  </dd>
		  			  <dd class="m-l">
		  			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
		  			  	Homologation Fonctionnelle et Technique
		  			  </dd>
		  			  <dd class="m-l">
		  			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
		  			  	Recette utilisateurs et validation
		  			  </dd>
		  			  <dd class="m-l">
		  			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
		  			  	Planification et organisation des tests
		  			  </dd>
		  			  <dd class="m-l">
		  			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
		  			  	Formation et assistance aux utilisateurs
		  			  </dd>
		  			  <dd class="m-l">
		  			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
		  			  	Conduite de changement et Suivi post-production
		  			  </dd>
		  			  <dd class="m-l">
		  			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
		  			  	Recensement et détermination des dysfonctionnements
		  			  </dd>
		  			  <dd class="m-l">
		  			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
		  			  	Résolution d’anomalies
		  			  </dd>
		  			  <dd class="m-l">
		  			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
		  			  	Assistance et Conseil
		  			  </dd>
		  			  <dd class="m-l">
		  			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
		  			  	Pilotage, préparation, accompagnement (recette, bascule, déploiement).
		  			  </dd>
		  			  <dd class="m-l">
		  			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
		  			  	Suivi et contrôle de l’avancement du projet.
		  			  </dd>
		  		  <dt>
		  		  	<iconify-icon data-icon="fa:stop"></iconify-icon>
		  		  	Définition des spécifications fonctionnelles</dt>
		  		  <dt>
		  		  	<iconify-icon data-icon="fa:stop"></iconify-icon>
		  		  	Rédaction de cahiers de tests et Exécution des cas de tests</dt>
		  		  <dt>
		  		  	<iconify-icon data-icon="fa:stop"></iconify-icon>
		  		  	Planification et organisation des tests (Unitaires, Homologations, Recette)</dt>
		  		  <dt>
		  		  	<iconify-icon data-icon="fa:stop"></iconify-icon>
		  		  	Formation et assistance aux utilisateurs</dt>
		  		  <dt>
		  		  	<iconify-icon data-icon="fa:stop"></iconify-icon>
		  		  	Conduite de Changement et Suivi post-production</dt>
		  		  <dt>
		  		  	<iconify-icon data-icon="fa:stop"></iconify-icon>
		  		  	Recensement et détermination des dysfonctionnements</dt>
		  		  <dt>
		  		  	<iconify-icon data-icon="fa:stop"></iconify-icon>
		  		  	Résolution d’anomalies</dt>
		  		  <dt>
		  		  	<iconify-icon data-icon="fa:stop"></iconify-icon>
		  		  	Assistance et Conseil</dt>
		  		 </div>
		  		</dl>

		  		  	<a @click="hideInfos" v-if="allInfos" class="btn btn-default btn-sm text-danger captalize pb-2"><i class="fa fa-arrow-circle-up"></i> Voir moins</a>
		  	</div>
		


	</div>
	
</template>

<style>
    .p-l {
        padding-left:20px;
    }

    

    a{
      text-decoration: none;
    }

    .padding-top{
      padding-top:20px;
    }

    .captalize{
      text-transform: capitalize;
    }

    .p-r{
        padding-right:10px;
    }

    .pb-2{
      padding-bottom: 10px;
    }

    .m-l{
      margin-left: 40px !important;
    }

    .font{
      font-size:12px !important;
    }

    .lineHeight{
      line-height:20px;
    }

    .custom-margin{
      margin-top:-12px !important;
    }

    .none{
      text-decoration:none;
    }

    dt, dd{
        line-height:30px!important;
    }
</style>

<script>
	export default {

		props: ['differences'],

		data(){

			return {

				date: this.differences,
				hiddenInfos: false,
				novembre: this.date,
                hiddenInfos:false,
                noMoreInfos: true,
                allInfos: false,

			}
		},

		 methods:{

            showInfos(){

                  this.noMoreInfos = !this.noMoreInfos;
                  this.allInfos = !this.allInfos;

                return this.hiddenInfos = ! this.hiddenInfos ;
            },

            hideInfos(){
              
              return this.showInfos();
            }
       }
	}
</script>