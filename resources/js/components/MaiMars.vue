<template>
    
<div>
   <h6 class="fontfamily">
    <img class="size-full wp-image-431 mwl-img pull-left none custom-padding" src="/template/uploads/imgs/rci.jpg" alt="" width="100" height="150" mwl-index="0">                                             
              Mai 2007 - Mars 2009 : Assistant chargé des Bases de Données
    </h6>
             <p class="custom-margin lineHeight font">
                   <span class="font lineHeight text-danger">
                      <em>Cabinet du Premier Ministre - Comité National de Pilotage du Redéploiement de l’Administration (CNPRA)</em>
                   </span><br>
                   Mai 2007 - Mars 2009 : {{periode}}
             </p>
  <dl>
    <dt>
      <iconify-icon data-icon="fa:stop"></iconify-icon>
      Conception et Réalisation d’un système de gestion des paiements de primes aux fonctionnaires redéployés dans les zones Ex-CNO (Centre, Nord, Ouest)
    </dt>
    <dt>
      <iconify-icon data-icon="fa:stop"></iconify-icon>
      Rédaction de manuels d’utilisation</dt>
    <dt>
      <iconify-icon data-icon="fa:stop"></iconify-icon>
      Missions de sédentarisation des fonctionnaires redéployés</dt>
    <dt>
      <iconify-icon data-icon="fa:stop"></iconify-icon>
      Maintenance des bases de données</dt>
  </dl>                     
  <!-- Ancre section => Fév. 2008 - Nov. 2010 : Membre du Comité Technique 19 -->
  <a id="cin"></a>

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

        props:['date'],
       
       data(){

            return {

                periode: this.date,
                hiddenInfos:false,


            }

       },

       methods:{

            showInfos(){

                return this.hiddenInfos = ! this.hiddenInfos ;
            }
       }
    }
</script>
