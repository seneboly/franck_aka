<template>
	<div>
			 <h6 class="fontfamily lineHeight">
				<img class="size-full wp-image-431 mwl-img pull-left none custom-padding" src="/template/uploads/imgs/rci.jpg" alt="" width="100" height="100" mwl-index="0">                     	                     	
			Mars 2006 – Aout 2008 : Consulting en Freelance – Abidjan, Côte d’Ivoire <br>Développement et intégration de progiciels et sites web
			</h6>
		 <p class="custom-margin lineHeight font">
		       <span class="font lineHeight text-danger">
		          <em>Direction Général de l’Administration du Territoire</em>
		       </span>
		 </p>
		<dl>
		  <dt>
		  	<iconify-icon data-icon="fa:stop"></iconify-icon>
		  	Direction Général de l’Administration du Territoire
		  </dt>
			  <dd class="m-l">
			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
			  	Conception et Réalisation d’un système de Gestion des Ressources Humaines
			  </dd>
			  <dd class="m-l">
			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
			  	Rédaction du manuel d’utilisation
			  </dd>
		  <dt>
		  	<iconify-icon data-icon="fa:stop"></iconify-icon>
		  	CESA-Banking SARL</dt>
			  <dd class="m-l">
			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
			  	Conception et Réalisation d’un système de Contrôle des Opérations Bancaires
			  </dd>
			  <dd class="m-l">
			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
			  	Déploiement de l’application sur sites client
			  </dd>
			  <dd class="m-l">
			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
			  	Rédaction du manuel d’utilisation et Formation des commerciaux
			  </dd>
		  <dt>
		  	<iconify-icon data-icon="fa:stop"></iconify-icon>
		  	Optimum Conseil Côte d’Ivoire (Octobre 2006 – Juin 2007)</dt>
			  <dd class="m-l">
			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
			  	Chef de Projets Windows
			  </dd>
			  <dd class="m-l">
			  	<iconify-icon data-icon="mdi:record-circle-outline"></iconify-icon>
			  	Conception et Réalisation d’applications spécifiques
			  </dd>
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
      padding-top:px;
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
      margin-top:-18px !important;
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