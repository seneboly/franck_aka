     @extends('layout.app', ['title'=> "{$article->category->nom_categorie} | $article->title | Franck AKA Spécialiste en Gestion des Organisations &amp; Projets, Spécialiste en Management de Systèmes d’Information - Formateur en Techniques &amp; Opérations bancaires - Concepteur &amp; Développeur d’application Windows - Administrateur de bases de données - Collecteur &amp; Administrateur de données"])

      @section('content')

     @push('css')

     <link rel="stylesheet" href="{{asset('template/css/blog.css')}}">

     @endpush

     <div class="page-header" style="padding-top: 100px">
     <div class="container" >
          <h4 class="entry-title">{{$article->category->nom_categorie}} | {{$article->title}}</h4>
     </div>
     </div>
     
     <div class="container">

           <div class="row">

             <!-- Blog Entries Column -->
             <div class="pt-5 pb-2">
               
              <div class="card-content pb-2 pt-2 col-md-10">
                <h3 class="text-danger" style="text-align: left; font-size:22px; margin-bottom:20px;">{{$article->title ?? ''}}</h3>
                
                  <div class="card-img">
                     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                       <ol class="carousel-indicators">
                        @foreach($article->galleries as $img)
                         <li data-target="#{{$img->nom_image}}" data-slide-to="{{$loop->index}}" class="active"></li>
                         @endforeach
                       </ol>
                       
                       <div class="carousel-inner">
                        @foreach($article->galleries as $img)
                         <div class="carousel-item {{$loop->index == 0 ? 'active' : ''}}">
                           <img class="d-block w-100" src="{{asset('/storage/app/img_articles/'.$img->nom_image)}}" alt="{{$img->nom_image}}">
                           <div class="carousel-caption d-none d-md-block">
                               <h5 style="color:#fff">{{$article->subtitle}}</h5>
                               
                             </div>
                         </div>
                        @endforeach
                       </div>
                       

                       @foreach($article->galleries as $img)
                       <a class="carousel-control-prev" href="#{{$img->nom_image}}"  role="button" data-slide="prev">
                       
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="sr-only">Previous</span>
                       </a>
                       <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                         <span class="sr-only">Next</span>
                       </a>
                       @endforeach
                     </div>
                      <h3 class="pb-2 pt-2">{{$article->subtitle ?? ''}}</h3>
                  </div>
                  <div class="card-desc col-md-12">
                      
                      <p style="font-size: 16px; text-align: justify-all;">{!!html_entity_decode($article->content) !!}
                     </p>
                           
                  </div>
              </div>

             </div>

             <!-- Sidebar Widgets Column -->
             
             <div class="col-md-2">

               <!-- Search Widget -->
               

               <!-- Categories Widget -->
               <div class="card my-3" style="margin-top:15%">
                 <h5 class="card-header" style="text-align:center;">Categories</h5>
                 @include('inc.inc_categories')
               </div>

               <!-- Side Widget -->
               
      <!-- Side Widget -->
               <div class="card my-4">
                 <h5 class="card-header">Galerie</h5>
                 <div class="card-body">

                   @include('inc.inc_galerie')
                 </div>
               </div>
   
             </div>
               
           </div>
           <!-- /.row -->

         </div>

        <div class="row">
          <div class="container col-md-8 col-md-offset-1" style="padding-bottom: 100px!important;">
            <div id="disqus_thread"></div>
            <script>

            /**
            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
            
            var disqus_config = function () {
            this.page.url = '{{Request::url()}}';  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = '{{$article->slug}}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            
            (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://http-akafranck-com.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
            })();
            </script>
            <noscript><a href="https://disqus.com/?ref_noscript"></a></noscript>                             
          </div>
        </div>


        @push('js')

        <script src="{{asset('template/js/poper.js')}}"></script>

        <script src="{{asset('template/js/bootstrap.js')}}"></script>

        @endpush

     @endsection
   

  