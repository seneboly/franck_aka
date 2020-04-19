<div class="card-body">
  @foreach($categories as $categorie)
    <p style="text-align: center;">
    	<a href="{{route('article_by_cat', $categorie)}}" class="text-danger">{{$categorie->nom_categorie}}</a>
    </p>

  @endforeach

  <p class="pt-2" style="text-align: center;">
  	<a href="{{$categories->nextPageUrl()}}"> <i class="fa fa-arrow-left"></i></a>
  	<a href="{{$categories->previousPageUrl()}}"> <i class="fa fa-arrow-right"></i></a>
  </p>
</div>