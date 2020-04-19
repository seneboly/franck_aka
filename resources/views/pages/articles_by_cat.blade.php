     @extends('layout.app', ['title'=> 'Blog | Franck AKA Spécialiste en Gestion des Organisations &amp; Projets, Spécialiste en Management de Systèmes d’Information - Formateur en Techniques &amp; Opérations bancaires - Concepteur &amp; Développeur d’application Windows - Administrateur de bases de données - Collecteur &amp; Administrateur de données'])

     @section('content')

     @push('css')

     <link rel="stylesheet" href="{{asset('template/css/blog.css')}}">

     @endpush

     <div class="page-header" style="padding-top: 90px">
     <div class="container" >
          <h1 class="entry-title">Blog | {{$categorie->nom_categorie}}</h1>
     </div>
     </div>
     
     <div class="container">

           <div class="row" style="margin-bottom: 100px">

             <!-- Blog Entries Column -->
             <div class="col-md-9 pt-5 pb-2">
               
               <section class="details-card">
                   <div class="container">
                       <div class="row">
                         @foreach($categorie->posts as $article)
                           <div class="col-md-6" style="max-height: 550px !important;">
                               <div class="card-content">
                                   <div class="card-img">
                                    @foreach($article->galleries->take(1) as $img)
                                       <img  src="{{asset('/storage/app/img_articles/'.$img->nom_image)}}" width="200" style="max-width: 250px; max-height:175px; min-height: 150px;" alt="">
                                    @endforeach
                                   </div>
                                   <div class="card-desc">
                                       <h3 class="text-danger pt-2 pb-2">{{$article->title ?? ''}}</h3>
                                       <div>{!! html_entity_decode(Str::words($article->content, 40) ) !!}
                                      </div>
                                      <p class="pb-5">
                                        <a href="{{route('articles.show', $article)}}" class="btn-card">Lire suite</a>  
                                      </p>
                                            
                                   </div>
                                   @if(!$loop->last)
                                   <hr size="1" class="pt-2 pb-2">
                                   @endif
                               </div>
                           </div>
                          @endforeach
                       </div>
                   </div>
               </section>
             </div>

             <!-- Sidebar Widgets Column -->
             <div class="col-md-1"></div>
             <div class="col-md-3">

               <!-- Search Widget -->
               

               <!-- Categories Widget -->
               <div class="card my-3" style="margin-top:8%">
                 <h5 class="card-header" style="text-align:center;">Categories</h5>
                 @include('inc.inc_categories')
               </div>

               <!-- Side Widget -->
               <div class="card my-4">
                  <h5 class="card-header">Consulter ma Galerie</h5>
                  <div class="card-body">

                    @include('inc.inc_galerie')
                  </div>
                  <div class="card-footer">
                    <p class="pt-2 pb-2" style="text-align: center;">
                      <a href="{{route('galerie.index')}}" target="_blank" class="btn btn-primary"><i class="fa fa-eye"></i> Voir galerie</a>
                    </p>
                  </div>
                </div>
      <!-- Side Widget -->
               
    
             </div>
               
           </div>
           <!-- /.row -->
            
         </div>


    @push('js')

    <script src="{{asset('template/js/poper.js')}}"></script>

    <script src="{{asset('template/js/bootstrap.js')}}"></script>

   
    @endpush
     @endsection

