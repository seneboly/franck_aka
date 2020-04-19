<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="{{route('galerie.index')}}">
      <img class="d-block w-100" src="{{asset('storage/app/images/20191020_akafranck-banner_1.jpg')}}" alt="First slide"></a>
    </div>
    <div class="carousel-item">
      <a href="{{route('galerie.index')}}">
      <img class="d-block w-100" src="{{asset('storage/app/images/20191020_akafranck-banner_4.jpg')}}" alt="Second slide">
    </a>
    </div>
   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>