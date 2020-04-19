<template>

<div>
	<h6 class="fontfamily lineHeight">
	<img class="size-full wp-image-431 mwl-img pull-left none custom-padding" style="margin-top:01px!important;" src="/template/uploads/imgs/label.jpg" alt="" width="100" height="150" mwl-index="0">					
	Informaticien - Développeur d’application Windows
	</h6>
	 <p class="custom-margin lineHeight font">
        <span class="font lineHeight text-danger">
           <em>Label</em>
        </span>
        <p class="font custom-margin">Août 2010 – Juin 2011 : {{date}}.</p>
        
    </p>
		<dl>
  	  <dt>
  	  	<iconify-icon data-icon="fa:stop"></iconify-icon>
  	  	Maintenance corrective et évolutives d’applications spécifiques :
  	  </dt>
  	  <dt>
  	  	<iconify-icon data-icon="fa:stop"></iconify-icon>
  	  	Conception et Réalisation d’applications spécifiques</dt>
  	  <dt>
  	  	<iconify-icon data-icon="fa:stop"></iconify-icon>
  	  	Implémentation de fonctions complémentaires Sage Ligne 100 (Gestion Commerciale et Comptabilité)</dt>
  	  <dt>
  	  	<iconify-icon data-icon="fa:stop"></iconify-icon>
  	  	Gestion du planning et de l’avancement</dt>
  	

  	<dt>
  	  	<iconify-icon data-icon="fa:stop"></iconify-icon>

  		Fév. 2008 - Nov. 2010 : Membre du Comité Technique 19 à Côte d’Ivoire Normalisation
  	</dt>

  	<dt>
  	  	<iconify-icon data-icon="fa:stop"></iconify-icon>

         		Réunion d’étude de projets de Normes
         	</dt>
     <dt>
  	  	<iconify-icon data-icon="fa:stop"></iconify-icon>

           Séminaires et Ateliers de formation
      </dt>

      <dt>
  	  	<iconify-icon data-icon="fa:stop"></iconify-icon>

           Participation aux travaux sur la normalisation d’Office Open XM
      </dt>

      <dt>
  	  	<iconify-icon data-icon="fa:stop"></iconify-icon>

           Participation aux travaux sur la norme ISO 27000
      </dt>

      <dt>
  	  	<iconify-icon data-icon="fa:stop"></iconify-icon>

           Séminaire intitulé « Gouvernance IT et Normalisation »

       </dt>

       <dt>
  	  	<iconify-icon data-icon="fa:stop"></iconify-icon>

           Participation aux travaux du sous-comité 27 (Ingénierie du logiciel et des systèmes – Techniques de sécurité)

       </dt>

       <dt>
  	  	<iconify-icon data-icon="fa:stop"></iconify-icon>
            Participation aux travaux du sous-comité 34 (Description des documents et langages de traitement)


  	</dt>
</dl>
<a id="rci"></a>

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
      margin-top:-15px !important;
    }

    .none{
      text-decoration:none;
    }

    dt{
        line-height:30px!important;
    }
</style>


<script>
	export default {

		props: ['difference'],

		data(){

			return {
				date: this.difference,
				hiddenInfos: false,
			}
		},

		methods:{

			showHiddenInfos(){

				return this.hiddenInfos = !this.hiddenInfos;
			}
		}
	}
</script>