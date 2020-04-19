<template>
  
  <div>

     <h6 class="fontfamily lineHeight">
        <img class="size-full wp-image-431 mwl-img pull-left none custom-padding" src="/template/uploads/imgs/gia.jpg" alt="" width="100" height="150" mwl-index="0">                                                
      Nov. 2006 – Déc. 2011 : Enseignant vacataire en cycle Ingénieur
     </h6>
     <p class="custom-margin lineHeight font">
       <span class="font lineHeight text-danger">
          <em>Groupe Ivoire Académie – Abidjan, Côte d’Ivoire</em>
       </span><br>
       Nov. 2006 – Déc. 2011 : {{periode}}
     </p>
      <dl>
        <dt>
          <iconify-icon data-icon="fa:stop"></iconify-icon>
          Matière enseignées : Architecture DotNet, VB.net, UML, Merise, Algorithme et Langage C
        </dt>
        <dt>
          <iconify-icon data-icon="fa:stop"></iconify-icon>
          Administrateur Microsoft IT Academy</dt>
        <dt>
          <iconify-icon data-icon="fa:stop"></iconify-icon>
          Moniteur de Microsoft Student Club</dt>
        <dt>
          <iconify-icon data-icon="fa:stop"></iconify-icon>
          Participation à Imagine Cup (championnats du monde étudiants de l’innovation numérique)
        </dt>
          <dd>
            <iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
            Imagine Cup 2008 : Coach <iconify-icon data-icon="dashicons:arrow-right-alt"></iconify-icon> 2ème Meilleure Equipe de l’Afrique de l’Ouest et du Centre
          </dd>
          <dd>
            <iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
            Imagine Cup 2009 : Coach <iconify-icon data-icon="dashicons:arrow-right-alt"></iconify-icon> 4ème Meilleure Equipe de l’Afrique de l’Ouest et du Centre
          </dd>
          <dd>
            <iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
            Imagine Cup 2010 et 2011 : Membre du Jury
            </dd>
        <dt>
          <iconify-icon data-icon="fa:stop"></iconify-icon>
          Réunion d’étude de projets de Normes</dt>
        <dt>
          <iconify-icon data-icon="fa:stop"></iconify-icon>
          Séminaires et Ateliers de formation</dt>
      </dl>
      
    
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
