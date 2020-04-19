@extends('layout.backoffice_layout')

@section('title')
Modifier article | Franck Aka
@endsection

@section('page_name')

	{{$article->title}}
	
@endsection

@push('css')
<link href="{{asset('template/css/select2.css')}}" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
   @include('message.message')
</div>


<div class="row" style="color:#fff">
    <div class="container welcome-wrapper shadow-reset res-mg-t mg-b-30 col-md-8 col-lg-8 col-xs-12">
        <div class="col-md-7">
            <div class="card">
                
               <form method="POST" action="{{route('articles.update', $article)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                   <div class="card-body">
                       <div class="form-group">
                           <label for="" class="control-label">Titre</label>
                           <input type="text" class="form-control" value="{{old($article->title) ?? $article->title}}" name="title">
                       </div>
                       <div class="form-group">
                           <label for="" class="control-label">sous-titre</label>
                           <input type="text" class="form-control" value="{{$article->subtitle}}" name="subtitle">
                       </div>
                       <div class="form-group">
                           <label for="" class="control-label">Catégories</label>
                           <select required="required" name="category_id" class="form-control categories" style="cursor: pointer;">
                              <option class="form-control" selected="selected" value="{{$article->category_id}}">{{$article->category->nom_categorie}}</option>
                           </select>
                       </div>
                        <div class="form-group">
                           <label for="" class="control-label">Statut</label>
                           <select name="status" id="" class="form-control" style="cursor: pointer;">
                              
                               <option value="1">Publié</option>
                               <option value="0">En attente de publication</option>
                              
                           </select>
                       </div>
                       <div class="form-group" style="padding-bottom:70px">
                           <input type="file" name="galleries[]" id="dropzone1" multiple="multiple">
                           @if($article->galleries->count() > 0)
                             <p class="pull-right">
                              @foreach($article->galleries as $img)
                               <img class="img-thumbnail img-responsive" width="100" height="70" src="{{asset('/storage/app/img_articles/'.$img->nom_image)}}" alt="{{$img->nom_image}}"> 
                               @endforeach
                             </p>
                             
                          @endif
                       </div>
                       <div class="form-group">
                        <textarea name="content" class="form-control" id="editor1" cols="30" rows="10">
                          {!! old(html_entity_decode($article->content)) ?? html_entity_decode($article->content) !!}
                        </textarea>
                          
                       </div>
                   </div>
                   <div class="form-group">
                       <input type="submit" class="form-control btn-primary" value="Modifier">
                   </div>
               </form>
            </div>
        </div>

        <div class="col-md-1"></div>
        <div class="col-md-3">
          <div id="app">
            <category-component :data-categories="{{$categories}}"></category-component>
          </div>
        </div>
    </div>   
</div>

@push('js')
<script src="{{asset('template/js/select2.js')}}"></script>

<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace( 'editor1' );
</script>

<script type="text/javascript">

      $('.categories').select2({
        multiple: false,
        placeholder: 'Choisissez une categorie',
        ajax: {
          url: "{{route('getCategories')}}",
          dataType: 'json',
          delay:250,

          processResults: function (data) {
            return {
              results:  $.map(data, function (item) {
               
                    return {
                        text:item.nom_categorie,
                        id: item.id
                    }
                })
            };
          },
          cache: true
        }
      });


</script>
@endpush
 
@endsection