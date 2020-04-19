<template>

	<div class="container">
		<div class="row">
		    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		        <div class="welcome-wrapper shadow-reset res-mg-t mg-b-30">
		            <div class="welcome-adminpro-title">
		                <h1 class="categories-title">Toutes les categories</h1>
		                <p class="title"><button class="btn btn-danger pull-right" @click="displayForm"><i class="fa fa-plus-circle"></i></button></p>

		                <div class="alert alert-success" v-if="successMessage">
		                		{{message}}
		                </div>
		            </div>
		            <div class="adminpro-message-list" v-if="showArticleForm">
		                <form @submit.prevent="storeCategories" class="form-inline">
		                	<div class="form-group">
		                		<label for="" class="control-label">Catégorie :</label>
		                		<input type="text" class="form-control" v-model="nom_categorie">
		                	</div>
		                	<div class="form-group">
		                		<input type="submit" class="form-control btn btn-primary" value="Enregistrer">
		                	</div>
		                </form>
		            </div>
		        </div>
		    </div>    
		</div>
		<div class="row">
		    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		        <div class="welcome-wrapper shadow-reset res-mg-t mg-b-30">
		            <div class="welcome-adminpro-title" v-for="categorie in categories">
		               <div class="card">
		               	<a href="" class="hoverMe text-white">
		               		{{categorie.nom_categorie}}
		               	</a>
		               
		               </div>
		            </div>
		            <div class="adminpro-message-list" >
		              
		            </div>
		        </div>
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

		props: ['dataArticles'],

		data(){

			return {

				nom_categorie: '',
				showArticleForm:false,
				message: '',
				articles : this.dataArticles,
				successMessage: false,

			} 
		},
		methods: {

			displayForm: function(){

				this.showArticleForm = true;
			},

			storeArticles(){
				axios.post('/article', {

					
				}).then(res => {

					this.res.message = this.message;
					console.log(this.message);
                    
                    this.articles.push({
                    	
                    });

                  
                   

                }).catch(err => {
                console.log(err)
           		 });
			},

			
		}
		
	}
</script>
