@extends('layout.app', ['title'=> 'Franck AKA | Spécialiste en Gestion des Organisations &amp; Projets, Spécialiste en Management de Systèmes d’Information - Formateur en Techniques &amp; Opérations bancaires - Concepteur &amp; Développeur d’application Windows - Administrateur de bases de données - Collecteur &amp; Administrateur de données'])

@push('css')
<style>

  .bg_qui_suis_je_phone{
    display: none;
  }

 
  @media screen and (max-width: 768px){
    
    #je-suis{
        height:370px !important;
    }

    .mb-50{
      margin-bottom:-50px;
    }

    .hero-large-text{
        margin-top:-20px !important;
    }

     div#parallax-hero {
    width: 100% !important;
    background-image: url(./template/uploads/imgs/akafranck-banner.jpg) !important;
    display: block !important;
    background-size:100% auto !important;
    background-repeat: no-repeat !important;
    background-position: top center !important;
}


    .bg_qui_suis_je{
       display: none;
    }

    #about{
      display: block !important;
    }


     .bg_qui_suis_je_phone{
      display:block !important;
     }

    
  }

</style>
@endpush
@section('content')


<div id="parallax-hero" class="parallax-hero parallax-window" data-over-scroll-fix="true" data-z-index="1" data-speed="0.3" data-image-src="{{asset('/template/uploads/imgs/akafranck-banner.jpg')}}" data-position="center" data-bleed="0">
<section id="je-suis" class="hero-slideshow-wrapper hero-slideshow-fullscreen">
<div class="sk-cube-grid ">
<div class="sk-cube sk-cube1"></div>
<div class="sk-cube sk-cube2"></div>
<div class="sk-cube sk-cube3"></div>
<div class="sk-cube sk-cube4"></div>
<div class="sk-cube sk-cube5"></div>
<div class="sk-cube sk-cube6"></div>
<div class="sk-cube sk-cube7"></div>
<div class="sk-cube sk-cube8"></div>
<div class="sk-cube sk-cube9"></div>
</div>
<div class="container">
<div class="row hero__content hero-content-style1">
  
    <div class="col-sm-8 col-xs-8 hero-large-text">
       <h3 class="uppercase">Je suis,</h3>
       <p class="js-rotating">Spécialiste en Gestion des Organisations et Projets | Spécialiste en Management de Systèmes d’Information | Formateur en Techniques et Opérations bancaires | Concepteur et Développeur d’application Windows | Administrateur de bases de données | Collecteur et Administrateur de données </p>
       <br>
       <p class="hero-small-text"> Bienvenue sur mon CV en ligne</p> 
    </div>
  </div>
   <div class="row container hero__content mb-50">
    <a href="#qui-suis-je" class="btn btn-theme-primary" >Qui suis-je ?</a>
    <a href="#parcours" class="btn btn-secondary-outline">Mon Parcours</a>
  </div>                

</div>
</section>
</div>


<div class="container-fluid" >
  <div class="row" id="qui-suis-je">
    <p class="bg_qui_suis_je">
      <img src="{{asset('template/qui-suis-je/franck_bg.png')}}" class="img-responsive responsive" alt="">
    </p>
    <p class="bg_qui_suis_je_phone">
      <img src="{{asset('template/qui-suis-je/version-mobile.jpg')}}" class="img-responsive responsive" style="width: 100%">
    </p>
  </div>
</div>

<section id="parcours" class="section-features section-padding section-meta onepage-section">
<div class="container">
<div class="section-title-area">
<h5 class="section-subtitle">En Savoir Plus Sur</h5>
<h3 class="section-title">Mon Parcours</h3>
</div>
<div class="section-content">
<div class="row">
    <div class="feature-item col-lg-4 col-sm-6 wow slideInUp">
        <div class="feature-media">
            <a href="{{route('experience')}}">
                <span class="fa-stack fa-5x">
                    <i class="fa fa-circle fa-stack-2x icon-background-default"></i>
                    <i class="feature-icon fa fa fa-suitcase fa-stack-1x"></i>
                </span>
            </a>                    
        </div>
        <h4><a href="{{route('experience')}}">EXPÉRIENCES</a></h4>
        <div class="feature-item-content">
            <p>Consultant Senior FINance Expertise TECHnologies chez AMOA, Chef ...</p>
        </div>
    </div>
    <div class="feature-item col-lg-4 col-sm-6 wow slideInUp">
        <div class="feature-media">
            <a href="{{route('formation')}}">
                <span class="fa-stack fa-5x">
                    <i class="fa fa-circle fa-stack-2x icon-background-default"></i>
                    <i class="feature-icon fa fa fa-graduation-cap fa-stack-1x"></i>
                </span>
            </a>                    
        </div>
        <h4><a href="{{route('formation')}}">FORMATION</a></h4>
        <div class="feature-item-content">
            <p>EM Lyon Business School - Lyon,France, Growth Continue Consulting ...</p>
        </div>
    </div>
    <div class="feature-item col-lg-4 col-sm-6 wow slideInUp">
        <div class="feature-media">
            <a href="{{route('competences')}}">
                <span class="fa-stack fa-5x">
                    <i class="fa fa-circle fa-stack-2x icon-background-default"></i>
                    <i class="feature-icon fa fa fa-tasks fa-stack-1x"></i>
                </span>
            </a>                    
        </div>
        <h4><a href="{{route('competences')}}">COMPÉTENCES</a></h4>
        <div class="feature-item-content">
            <p>Conduite de projet, Mise en Oeuvre, Spécifications (Rédaction des ...)</p>
        </div>
    </div>
</div>
</div>
</div>
</section>
<section id="portfolio" class="section-gallery section-padding onepage-section">
<div class="g-layout-full-width container">
<div class="section-title-area">
<h5 class="section-subtitle">Quelques unes des</h5>
<h3 class="section-title">Logos des entreprises</h3>
<div class="section-desc">
 
</div>
</div>
<div class="gallery-content">
<div class="gallery-grid g-zoom-in  _enable-lightbox  g-col-4">
         @include('inc.parteners_slide')                       
</div>
</div>

</div>
</section>
</main>


@endsection

@push('js')

<script src="{{asset('template/js/slider_menu.js')}}"></script>



@endpush