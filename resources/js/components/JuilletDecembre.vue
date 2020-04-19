<template>

<div>
     <h6 class="fontfamily lineHeight">
		<img class="alignright size-full wp-image-431 mwl-img pull-left none" style="padding: 15px 15px;"  src="template/uploads/imgs/pnud.jpg" alt="" width="100"  mwl-index="0">          
     	Juil. 2011 – Déc. 2011 : Expert en Base de Données
     </h6>
     <p class="custom-margin lineHeight font" >
       <span style="color: #cf0000;">
          <em>Programmes des Nations Unies pour le Développement (PNUD) - Unité Post-Crise Projet Early Recovery</em>
       </span>
       	<p class="font custom-margin lineHeight" >Juillet 2011 – Décembre 2011 : {{date}} </p>
     </p>
	<dl>
	  <dt>
	  	<iconify-icon data-icon="fa:stop"></iconify-icon>
	  	Développement d’un système de gestion de l’évaluation des besoins des populations affectées par la crise post-électorale
	  </dt>
	  <dt>
	  	<iconify-icon data-icon="fa:stop"></iconify-icon>
	  	Développement d’un système de gestion de la base de données cartographique</dt>
	  <dt>
	  	<iconify-icon data-icon="fa:stop"></iconify-icon>
	  	Mise en place d’une procédure de collecte de données</dt>
	  <dt>
	  	<iconify-icon data-icon="fa:stop"></iconify-icon>
	  	Centralisation et Consolidation des données et intégration des données dans la Base de Données</dt>
	  <dt>
	  	<iconify-icon data-icon="fa:stop"></iconify-icon>
	  	Analyse des données et production de divers rapports</dt>
	  <dt>
	  	<iconify-icon data-icon="fa:stop"></iconify-icon>
	  	Membre du Working Group (OCHA)</dt>
	  <dt>
	  	<iconify-icon data-icon="fa:stop"></iconify-icon>
	  	Rédaction de la documentation de conception du logiciel et du manuel d’utilisation</dt>
	  <dt>
	  	<iconify-icon data-icon="fa:stop"></iconify-icon>
	  	Formation et encadrement des utilisateurs de l’application</dt>
	</dl>
	<!-- Ancre section => Août 2010 – Juin 2011 : Informaticien - Développeur d’application Windows -->
    <a id="label"></a>

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

			}
		},

		methods:{

			showHiddenInfos(){
				return this.hiddenInfos = !this.hiddenInfos;
			}

		}
	}
</script>