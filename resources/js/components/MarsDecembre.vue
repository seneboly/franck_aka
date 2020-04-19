<template>

	<div>
		 <h6 class="fontfamily lineHeight">
			<img class="alignright size-full wp-image-431 mwl-img pull-left none custom-padding" src="/template/uploads/imgs/sg.jpg" alt="" width="100" height="150" mwl-index="0">                     	                     	
		 	Mars 2012 – Déc. 2013 : Concepteur - Paramétreur
		 </h6>
		 <p class="custom-margin lineHeight font">
		       <span style="color: #cf0000;">
		          <em>Société Générale - Centre de Service Mutualisé Système d’Information (CSM-SI)</em>
		       </span><br>
		       Mars 2012 – Décembre 2013 : {{date}}.
		 </p>
		<dl>
		  <dt>
		  	<iconify-icon data-icon="fa:stop"></iconify-icon>
		  	Gestion d’application (support et analyse fonctionnelles)
		  </dt>
		  <dt>
		  	<iconify-icon data-icon="fa:stop"></iconify-icon>
		  	Définition et formalisation des besoins utilisateurs.</dt>
		  <dt>
		  	<iconify-icon data-icon="fa:stop"></iconify-icon>
		  	Paramétrage des évolutions et élaboration des scénarios</dt>
		  <dt>
		  	<iconify-icon data-icon="fa:stop"></iconify-icon>
		  	Recette Utilisateur et Exécution des cas de tests</dt>
		  <dt>
		  	<iconify-icon data-icon="fa:stop"></iconify-icon>
		  	Planification et organisation des tests</dt>
		  <dt>
		  	<iconify-icon data-icon="fa:stop"></iconify-icon>
		  	Formation et assistance aux utilisateurs</dt>
		  <dt>
		  	<iconify-icon data-icon="fa:stop"></iconify-icon>
		  	Conduite de Changement</dt>
		  <dt>
		  	<iconify-icon data-icon="fa:stop"></iconify-icon>
		  	Formalisation des écarts entre le fonctionnement standard et les besoins exprimés</dt>
		  <dt>
		  	<iconify-icon data-icon="fa:stop"></iconify-icon>
		  	Recensement et détermination des dysfonctionnements</dt>
		</dl>
		<!-- Ancre section =>  Juil. 2011 – Déc. 2011 : Expert en Base de Données -->
		<a id="pnud"></a>

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