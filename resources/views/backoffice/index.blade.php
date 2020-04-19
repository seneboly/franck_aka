@extends('layout.backoffice_layout')

@section('title')
	Tableau de bord | Franck Aka
@endsection

@section('page_name')

	Tableau de bord
	
@endsection

@section('content')

<div class="container col-md-10 col-md-offset-1">
	<div class="income-dashone-total shadow-reset nt-mg-b-30 res-mg-t-30">
        <div class="income-title">
            <div class="main-income-head">
                <h2>Nombre d'article </h2> 
                
            </div>
        </div>
        <div class="income-dashone-pro">
            <div class="income-rate-total">
                <div class="price-adminpro-rate">
                    <h3>
                        <span class="counter">{{$articles->count()}}</span> {{Str::plural('article', $articles->count()) }}
                    </h3>
                    <p>
                        <a href="{{route('articles.create')}}" class="btn btn-primary btn-circle btn-xs pull-right"><i class="fa fa-plus-circle"></i> Nouveau article</a>
                    </p>
                </div>
           
            <div class="clear"></div>
        </div>
    </div>

    	 <div class="income-dashone-total shadow-reset nt-mg-b-30">
            <div class="income-title">
                <div class="main-income-head">
                    <h2 style="padding:10px 00">Toutes les catégories</h2>
                    <div class="main-income-phara low-value-cl">
                    	@foreach($categories as $categorie)

                        <span class="text-white text-center" style="padding:5px 10px">{{$categorie->nom_categorie}}</span>
                        @endforeach
                    </div>
                </div>
            </div>
    	 </div>
    
     <div class="income-dashone-total shadow-reset nt-mg-b-30">
        <div class="income-title">
            <div class="main-income-head">
                <h2 style="padding:10px 00">Articles par catégories 
                   
                </h2>
                <div class="main-income-phara low-value-cl">
                	@foreach($categories as $categorie)

                    <span class="text-white text-center" style="padding:5px 10px">{{$categorie->nom_categorie}} : {{$categorie->posts->count()}} ;</span>
                    @endforeach
                </div>
            </div>
        </div>
	 </div>
	
        <div class="income-dashone-total shadow-reset nt-mg-b-30">
            <div class="income-title">
                <div class="main-income-head">
                    <h2>Nombre d'image dans la galerie 
                       
                    </h2>
                    <div class="main-income-phara low-value-cl">
                       
                    </div>
                </div>
            </div>
            <div class="income-dashone-pro">
                <div class="income-rate-total">
                    <div class="price-adminpro-rate">
                        <h3><span class="counter">{{$galleries->count()}}</span></h3>
                    </div>
                    <div class="price-graph">
                        <span id="sparkline5"><canvas width="59" height="19" style="display: inline-block; width: 59px; height: 19px; vertical-align: top;"></canvas></span>
                    </div>
                </div>
                
                <div class="clear"></div>
            </div>
        </div>
        <div class="income-dashone-total shadow-reset nt-mg-b-30">
            <div class="income-title">
                <div class="main-income-head">
                    <h2>Messages envoyés depuis le site</h2>
                    <div class="main-income-phara low-value-cl">
                       
                    </div>
                </div>
            </div>
            <div class="income-dashone-pro">
                <div class="income-rate-total">
                    <div class="price-adminpro-rate">
                        <h3><span class="counter">{{$messages->count()}}</span></h3>
                    </div>
                    <div class="price-graph">
                        <span id="sparkline5"><canvas width="59" height="19" style="display: inline-block; width: 59px; height: 19px; vertical-align: top;"></canvas></span>
                    </div>
                </div>
                
                <div class="clear"></div>
            </div>
        </div>

    </div>
</div>
@endsection