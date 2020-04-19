@extends('layout.backoffice_layout')

@section('title')
	Galerie | Franck Aka
@endsection

@section('page_name')

Ajouter images

@endsection

@section('content')

<div class="row">
   @include('message.message')
</div>

 <div class="row">
    <div class="col-lg-8 col-md-offset-2 col-md-8 col-lg-offset-2 col-sm-12 col-xs-12">
        <div class="welcome-wrapper shadow-reset res-mg-t mg-b-30">
            <div class="welcome-adminpro-title">
                <h1 class="text-center pt-2 pb-2">Uploader vos images</h1>
                
            </div>
            <div class="adminpro-message-list">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <form method="POST" action="{{route('galerie.store')}}" class="form-inline" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="file" class="form-control" name="nom_image[]" multiple="multiple">

                            </div>
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-primary" value="Enregistrer">

                            </div>

                        </form>
                    </div>
                </div>





            </div>
        </div>
    </div>    
</div>

<div class="row">
    @foreach($images as $img)
       <div class="income-dashone-total shadow-reset nt-mg-b-30 col-md-4 col-lg-4">
            
            <div class="income-dashone-pro">
                <div class="income-rate-total">
                    @if($img->state)
                    <span class="pull-right">
                        <a class="btn btn-success btn-xs">
                           Publiée
                            
                        </a>
                    </span>
                    @endif
                    <div class="price-adminpro-rate" >
                        <img class="d-block w-100 img-responsive" style="height: 250px!important;" src="{{asset('storage/app/images/'.$img->nom_image)}}" >
                    </div>
                    
                </div>
                
                <div class="clear"></div>
            </div>
            <div class="income-title">
                <div class="main-income-head"> 
                    @if($img->state)
                    <a class="mg-b-10" href="{{route('galerie.update', $img->id)}}" data-method="PUT"><i class="fa fa-eye-slash text-primary"></i> Retirer cette image</a>
                    @else
                    <a class="mg-b-10" href="{{route('galerie.update', $img->id)}}" data-method="PUT"><i class="fa fa-eye text-primary"></i> Pulier cette image</a>
                    @endif
                    
                    <a href="{{route('galerie.destroy', $img->id)}}" class="danger mg-b-10 pull-right" data-confirm="Êtes-vous sûr de vouloir supprimé cette image ?" data-method="DELETE"><i class="fa fa-trash text-danger"></i> Supprimer</a>
                   
                </div>
            </div>
            
        </div>
       
    @endforeach   
</div>
<div class="row">
    <div class="col-lg-8">
        {{$images->links()}}
    </div>
</div>
@endsection