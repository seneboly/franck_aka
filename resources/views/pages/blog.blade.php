     @extends('layout.app', ['title'=> 'Blog | Franck AKA Spécialiste en Gestion des Organisations &amp; Projets, Spécialiste en Management de Systèmes d’Information - Formateur en Techniques &amp; Opérations bancaires - Concepteur &amp; Développeur d’application Windows - Administrateur de bases de données - Collecteur &amp; Administrateur de données'])

     @section('content')

     @push('css')

     <link rel="stylesheet" href="{{asset('template/css/blog.css')}}">

     @endpush

     <div class="page-header" style="padding-top: 90px">
     <div class="container" >
          <h1 class="entry-title">Blog</h1>
     </div>
     </div>
     
     <div class="container">

           <div class="row" style="margin-bottom: 100px">

             <!-- Blog Entries Column -->
             <div class="col-md-10 pt-5 pb-2">
               
               <section class="details-card">
                   <div class="container">
                       <div class="row">
                         @foreach($articles as $article)
                           <div class="col-md-6" style="height: 550px !important;">
                               <div class="card-content">
                                
                                   <div class="card-img" style="height: 275px">
                                    @foreach($article->galleries->take(1) as $img)
                                      @if($img->isNotEmpty())
                                         <img class="img-responsive" style="width:100%; min-height:180px ; max-height:275px; " src="{{asset('/storage/app/img_articles/'.$img->nom_image)}}" alt="{{$img->nom_image}}">
                                      @endif
                                    @endforeach
                                   </div>
                                   
                                   <div class="card-desc" style="height: 250px">
                                       <h3 class="text-danger pt-2 pb-2">{{$article->title ?? ''}}</h3>
                                       <p>{!! html_entity_decode(Str::words($article->content, 40) ) !!}</p>
                                      
                                        <div class="pb-5">
                                          <a href="{{route('articles.show', $article)}}" class="btn-card">Lire suite</a>  
                                        </div>
                                          
                                   </div>
                                   @if(!$loop->last)
                                   <hr size="1" class="pt-2 pb-2">
                                   @endif
                               </div>
                           </div>
                          @endforeach
                       
                   </div>
               </section>
              <p class="pt-2 pb-5">{{$articles->links()}}</p>
             </div>

             <!-- Sidebar Widgets Column -->
             
             <div class="col-md-2">

               <!-- Search Widget -->
               

               <!-- Categories Widget -->
               <div class="card my-3" style="margin-top:8%">
                 <h5 class="card-header" style="text-align:center;">Categories</h5>
                 @include('inc.inc_categories')
               </div>

               <!-- Side Widget -->
               <div class="card my-4">
                  <h5 class="card-header">Galerie</h5>
                  <div class="card-body">

                    @include('inc.inc_galerie')
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

