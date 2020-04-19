@extends('layout.app', ['title'=> 'Galerie | Franck AKA Spécialiste en Gestion des Organisations &amp; Projets, Spécialiste en Management de Systèmes d’Information - Formateur en Techniques &amp; Opérations bancaires - Concepteur &amp; Développeur d’application Windows - Administrateur de bases de données - Collecteur &amp; Administrateur de données'])


@push('css')
  <link rel="stylesheet" href="{{asset('template/galerie/galerie.css')}}">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

@endpush
@section('content')



  <div class="container" style="padding:12% 00">
      <div id="main_area">
          <!-- Slider -->
          <div class="row">
              <div class="col-sm-7" id="slider-thumbs">
                  <!-- Bottom switcher of slider -->

                  <ul class="hide-bullets">
                    @foreach($galeries as $img)
                      <li class="col-sm-3">
                          <a class="thumbnail" id="carousel-selector-{{$loop->index++}}">
                              <img src="{{asset('storage/app/images/'.$img->nom_image)}}" style="width: 150px !important; height: 125px !important">
                          </a>
                      </li>
                      @endforeach
                   
                  </ul>
              </div>
              <div class="col-sm-5">
                  <div class="col-xs-12" id="slider">
                      <!-- Top part of the slider -->
                      <div class="row">
                          <div class="col-sm-12" id="carousel-bounding-box">
                              <div class="carousel slide" id="myCarousel">
                                  <!-- Carousel items -->
                                  <div class="carousel-inner">
                                    @foreach($galeries as $img)
                                      <div class="{{$loop->index ==0 ? 'active' : ''}} item" data-slide-number="{{$loop->index++}}">

                                          <img src="{{asset('storage/app/images/'.$img->nom_image)}}">
                                        </div>

                                       @endforeach
                                  </div>
                                  <!-- Carousel nav -->
                                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                      <span class="glyphicon glyphicon-chevron-left"></span>
                                  </a>
                                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                      <span class="glyphicon glyphicon-chevron-right"></span>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!--/Slider-->
          </div>

      </div>
  </div>



@endsection

@push('js')
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script src="{{asset('template/js/galerie.js')}}"></script>



@endpush