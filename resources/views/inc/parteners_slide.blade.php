<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

<div class="container pb-5">
  
   <section class="customer-logos slider">
      <div class="slide">
         <a href="{{route('experience')}}/#finetech"  title="FINETECH"><img src="{{asset('template/uploads/imgs/finetech.jpg')}}" alt="">
         </a>
      </div>
      <div class="slide">
         <a href="{{route('experience')}}/#sgbs" title="SOCIETE GENERERALE SENEGAL">
            <img src="{{asset('template/uploads/imgs/sg-o.jpg')}}" alt="">
         </a>
      </div>
      <div class="slide">
         <a href="{{route('experience')}}/#pnud"  title="PNUD">
            <img src="{{asset('template/uploads/imgs/pnud.jpg')}}" alt="">
         </a>
      </div>
      <div class="slide">
         <a href="{{route('experience')}}/#label" title="LABEL">
            <img src="{{asset('template/uploads/imgs/label.jpg')}}"  alt="">
         </a>
      </div>
      <div class="slide">
          <a href="{{route('experience')}}/#rci"  title="Côte d’Ivoire Normalisation">
            <img src="{{asset('template/uploads/imgs/rci.jpg')}}" alt="">
          </a>
    </div>
      <div class="slide">
          <a href="{{route('experience')}}/#cin" title="Côte d’Ivoire Normalisation (CODINORM)">
            <img src="{{asset('template/uploads/imgs/cin.jpg')}}" alt="">
          </a>
    </div>
      <div class="slide">
         <a href="{{route('experience')}}/#gia">
            <img src="{{asset('template/uploads/imgs/gia.jpg')}}" alt="" title="Groupe Ivoire Académie – Abidjan, Côte d’Ivoire">
         </a>
   </div>
      
   </section>
</div>

<script type="text/javascript">
  $(document).ready(function(){
      $('.customer-logos').slick({
          slidesToShow: 6,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 1500,
          arrows: false,
          dots: false,
          pauseOnHover: false,
          responsive: [{
              breakpoint: 768,
              settings: {
                  slidesToShow: 4
              }
          }, {
              breakpoint: 520,
              settings: {
                  slidesToShow: 3
              }
          }]
      });
  });
</script>