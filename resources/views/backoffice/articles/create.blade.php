@extends('layout.backoffice_layout')

@section('title')
Créer un article | Franck Aka
@endsection

@section('page_name')

	Rediger un article.
	
@endsection



@section('content')
<div class="row">
   @include('message.message')
</div>

@push('css')
<link href="{{asset('template/css/select2.css')}}" rel="stylesheet" />
@endpush

<div class="row" style="color:#fff">
    <div class="container welcome-wrapper shadow-reset res-mg-t mg-b-30">
        <div class="col-md-8 col-lg-8 col-xs-12">
            <div class="card">
                
               <form method="POST" action="{{route('articles.store')}}" enctype="multipart/form-data">
                    @csrf
                   <div class="card-body">
                       <div class="form-group">
                           <label for="" class="control-label">Titre</label>
                           <input type="text" class="form-control" name="title">
                       </div>
                       <div class="form-group">
                           <label for="" class="control-label">sous-titre</label>
                           <input type="text" class="form-control" name="subtitle">
                       </div>
                       <div class="form-group">
                           <label for="" class="control-label">Catégories</label>
                           <select name="category_id" class="form-control categories" style="cursor: pointer;">
                              
                           </select>
                       </div>
                        <div class="form-group">
                           <label for="" class="control-label">Statut</label>
                           <select name="status" id="" class="form-control" style="cursor: pointer;">
                              
                               <option value="1">Publié</option>
                               <option value="0">En attente de publication</option>
                              
                           </select>
                       </div>
                       <div class="form-group">
                           <input type="file" name="galleries[]" id="dropzone1" multiple="multiple">
                       </div>
                       <div class="form-group">
                           <textarea name="content" class="form-control" id="editor1" cols="30" rows="10">
                             
                           </textarea>
                       </div>
                   </div>
                   <div class="form-group">
                       <input type="submit" class="form-control btn outline-primary" value="Enregistrer">
                   </div>
               </form>
            </div>
        </div>

       
        <div class="col-md-4">
          
          <div id="app">
            <category-component :data-categories="{{$categories}}"></category-component>
          </div>
        </div>
    </div>   
</div>

@push('js')
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
        CKEDITOR.replace( 'editor1' );
</script>

<script src="{{asset('template/js/select2.js')}}"></script>

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


<script>
  $(document).ready(function() {
    $('.summernote').summernote();
  });
</script>
 
@endpush

@endsection