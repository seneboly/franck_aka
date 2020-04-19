<template>
  
    <div>
            
     <h6 class="fontfamily">
        <img class="size-full wp-image-431 mwl-img pull-left p-l p-r pt-2 none custom-padding" src="/template/uploads/imgs/cin.jpg" alt="" width="100" height="150" mwl-index="0">                                                
      Fév. 2008 - Nov. 2010 : Membre du Comité Technique 19
     </h6>
     <p class="custom-margin lineHeight font">
       <span class="font lineHeight text-danger">
          <em>Côte d’Ivoire Normalisation (CODINORM)</em>
       </span><br>
       Fév. 2008 - Nov. 2010 : {{periode}}
     </p>
    <dl>
      <dt>
        <iconify-icon data-icon="fa:stop"></iconify-icon>
        Participation aux travaux sur la normalisation d’Office Open XML
      </dt>
      <dt>
        <iconify-icon data-icon="fa:stop"></iconify-icon>
        Participation aux travaux sur la norme ISO 27000</dt>
      <dt>
        <iconify-icon data-icon="fa:stop"></iconify-icon>
        Séminaire intitulé « Gouvernance IT et Normalisation »</dt>
      <dt>
        <iconify-icon data-icon="fa:stop"></iconify-icon>
        Participation aux travaux du sous-comité 27 (Ingénierie du logiciel et des systèmes – Techniques de sécurité)</dt>
      <dt>
        <iconify-icon data-icon="fa:stop"></iconify-icon>
        Réunion d’étude de projets de Normes</dt>
      <dt>
        <iconify-icon data-icon="fa:stop"></iconify-icon>
        Séminaires et Ateliers de formation</dt>
    </dl>
    <!-- Ancre section => Nov. 2006 – Déc. 2011 : Enseignant vacataire en cycle Ingénieur -->
      <a id="gia"></a>          
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
