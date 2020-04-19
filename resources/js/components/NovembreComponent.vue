<template>
    <div id="finetech">
           <a id="finetech"></a>
           <h6 class="fontfamily lineHeight custom-margin">
             <img class="alignright size-full wp-image-431 mwl-img pull-left none custom-padding" src="/template/uploads/imgs/finetech.jpg" alt="" width="100" height="150" mwl-index="0">
              Consultant Senior Finance Expertise Technologies (FINETECH)
           </h6>
            <p class="custom-margin lineHeight font">
                <span class="font lineHeight text-danger">
                   <em>Société Générale de Banque au Sénégal – Expert fonctionnel Amplitude Bank : AMOA</em>
                </span>
                <p class="font custom-margin">Novembre 2015 - Aujourd'hui : {{novembre}}.</p>
                
            </p>
           <dl>
            <dt>
               <iconify-icon data-icon="fa:stop"></iconify-icon>
               Conduite de plusieurs projets dans le respect des délais
            </dt>
               <dd class="m-l">
                  <iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
                  Projet IBE (Cash Management) : Chef de projet
               </dd>
               <dd class="m-l">
                  <iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
                  Projet Swift de Bout en Bout : Chef de Projet
               </dd>
               <dd class="m-l">
                  <iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
                  Projet Delta Monétique : Chef de Projet
               </dd>
               <dd class="m-l">
                  <iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
                  Projet Quartz (Changement de référentiel Tiers) : Chef de Projet
               </dd>
               <dd class="m-l">
                  <iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
                  Projet Image Chèque : Chef de Projet
               </dd>
               <dd class="m-l">
                  <iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
                  Projet Delta Monétique : Chef de Projet
               </dd>
               <dd class="m-l">
                  <iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
                  Projet E-Taxe : Chef de Projet
               </dd>
               <dd class="m-l">
                  <iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
                  Chantier Comptes dormants et avoirs sans maitre : Chef de Chantier
               </dd>
            <dt>
               <iconify-icon data-icon="fa:stop"></iconify-icon>
               Formalisations de plusieurs procédures couvrant plusieurs domaines de la banque</dt>
            <dt>
               <iconify-icon data-icon="fa:stop"></iconify-icon>
               Rédaction de dossier de Cadrage</dt>
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
             
             </dl>

            
              <a @click="showInfos" v-show="noMoreInfos" class="btn btn-default text-danger btn-sm captalize pb-2"><i class="fa fa-arrow-circle-down"></i> Voir Détails</a>
            
               <!--  -->
        

    </div>
</template>

<style>
    .p-l {
        padding-left:20px;
    }

    

    a{
      text-decoration: none;
    }

   
</style>

<script>
    export default {

        props:['date'],
       
       data(){

            return {

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
