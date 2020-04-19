@extends('layout.backoffice_layout')

@section('title')
	Tous les articles | Franck Aka
@endsection

@section('page_name')

	Toutes les articles
	
@endsection

@section('content')

 <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="welcome-wrapper shadow-reset res-mg-t mg-b-30">
            <div class="welcome-adminpro-title">
                <h1>Derniers articles</h1>
            </div>
            <div class="row">
               @include('message.message')
            </div>
            <div class="adminpro-message-list">
                <ul class="message-list-menu">
                    @foreach($articles as $article)
                    <li>
                        
                        <h4  style="color:#3575d3" style="padding:10px 20px"><span class="message-serial message-cl-one">{{++$loop->index}}</span>  {{$article->title}}</h4> 
                        
                        
                        <div style="color:#fff!important;">
                            {!!html_entity_decode(Str::words($article->content, 70))!!}
                        </div>
                        <div class="row">
                            <p class="pull-right" style="padding:00 10px">
                                <a href="{{route('articles.edit', $article)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <a data-method="DELETE" data-confirm="Êtes-vous sûr de vouloir supprimer cet article ?" href="{{route('articles.destroy', $article)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </p>

                        </div>
                        <div class="row">
                           
                            <p class="message-time">
                            @if($article->status)
                            <span class="pull-left">
                                <a class="btn btn-success btn-xs">
                                   Publiée
                                    
                                </a>
                            </span>
                            @endif 
                            Rédigé : {{$article->created_at->diffForHumans()}}</p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <p>{{$articles->links()}}</p>
        </div>
    </div>    
</div>


 
@endsection