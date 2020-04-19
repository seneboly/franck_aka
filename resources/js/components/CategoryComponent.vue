<template>

	<div class="container">
		<div class="row">
		    <div class="col-lg-4 col-md-4">
	            <div class="card">
	                <h1 class="categories-title">Toutes les categories</h1>
	                <p class="title"><button class="btn btn-danger" @click="displayForm"><i class="fa fa-plus-circle"></i></button></p>
	            </div>
	            <div class="adminpro-message-list" v-if="showCategoryForm">
	                <form @submit.prevent="storeCategories" class="form-inline">
	                	<div class="form-group">
	                		
	                		<input type="text" class="form-control" v-model="nom_categorie" placeholder="Ajouter une categorie">
	                	</div>
	                	<div class="form-group">
	                		<input type="submit" class="form-control btn btn-primary" value="Enregistrer">
	                	</div>
	                </form>
	            </div>
		    </div>    
		</div>
            <div class="welcome-adminpro-title pt-5 pb-5" v-for="(categorie, index) in categories">
               <div class="card">
               	
               	<p>
               		<a href="" class="hoverMe text-white">
               			{{categorie.nom_categorie}}
               		</a>
               	</p>
               </div>
            </div>
		</div>

	
</template>

<style>
	.categories-title, .title{
		padding:10px 00;
	}

	.hoverMe{

		color:#000;
		font-size: 15px;
	}

	.text-white {
		color:#fff;
		padding:20px 00;
	}
</style>

<script>
	export default {

		mounted(){

		},

		props: ['dataCategories'],

		data(){

			return {

				nom_categorie: '',
				showCategoryForm:false,
				message: '',
				categories : this.dataCategories,
				

			} 
		},
		methods: {

			displayForm: function(){

				this.showCategoryForm = true;
			},

			storeCategories(){
				axios.post('/categorie', {

					nom_categorie: this.nom_categorie,
				}).then(res => {

                    this.categories.push({
                    	nom_categorie:this.nom_categorie
                    })

                  
                    this.nom_categorie= '';
                    

                }).catch(err => {

                console.log(err)
           		 });
			},

			
		}
		
	}
</script>
