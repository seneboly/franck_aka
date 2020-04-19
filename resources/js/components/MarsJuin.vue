<template>

<div>
	 <a id="rci"></a>
	 <h6 class="fontfamily pt-5">
		<img class="size-full wp-image-431 mwl-img pull-left none custom-padding"  src="/template/logos/logo_redimentionner.png" alt="" width="100" height="150" mwl-index="0">                     	                     	
	 	Mars 2009 - Juin 2011 : Membre de l’équipe de gestion du projet FISDES CIV10 00069581 – Volet CNPRA
	 </h6>
	 <p class="custom-margin font">
	       <span class="font  text-danger">
	          <em>Cabinet du Premier Ministre - Comité National de Pilotage du Redéploiement de l’Administration (CNPRA)</em>
	       </span>
	       <p class="font custom-margin">Mars 2009 - Juin 2011 : {{date}}</p>
	       
	 </p>
	<dl>
	  <dt>
	  	<iconify-icon data-icon="fa:stop"></iconify-icon>
	  	Conception et réalisation de la cartographie des projets du PNUD
	  </dt>
	  <dt>
	  	<iconify-icon data-icon="fa:stop"></iconify-icon>
	  	Elaboration de dossiers d’Appel d’Offres</dt>
	  <dt>
	  	<iconify-icon data-icon="fa:stop"></iconify-icon>
	  	IDépouillement des offres</dt>
	  <dt>
	  	<iconify-icon data-icon="fa:stop"></iconify-icon>
	  	Missions conjointes PNUD/CNPRA d’évaluation d’édifices détruits</dt>
	  <dt>
	  	<iconify-icon data-icon="fa:stop"></iconify-icon>
	  	Missions conjointes PNUD/CNPRA d'installation de chantiers</dt>
	  <dt>
	  	<iconify-icon data-icon="fa:stop"></iconify-icon>
	  	Missions conjointes PNUD/CNPRA de suivi et contrôle des travaux de réhabilitation d’édifices socio-éducatifs, centres de santé en Ex-Zone CNO et des sites d’encasernement et de cantonnement des Ex-Combattants</dt>
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