@extends('layout.app', ['title'=> 'Contact | Franck AKA Spécialiste en Gestion des Organisations &amp; Projets, Spécialiste en Management de Systèmes d’Information - Formateur en Techniques &amp; Opérations bancaires - Concepteur &amp; Développeur d’application Windows - Administrateur de bases de données - Collecteur &amp; Administrateur de données'])



@section('content')



<div class="page-header" style="padding-top: 75px">
	<div class="container">
		<h1 class="entry-title">Contact</h1>
	</div>
</div>
<div id="content-inside" class="container left-sidebar" style="padding-bottom: 70px">
   <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">

         <article id="post-62" class="post-62 page type-page status-publish hentry">
            <header class="entry-header">

            </header>
            <!-- .entry-header -->
            <div class="entry-content">
               <div class="col-md-8 col-sm-12">
                  <div class="row">
                     <div class="col-md-12">
                        <h3 class="std">
                          @if(session('message'))
                          <div class="row pt-2 pb-5">@include('message.message')</div>
                          @endif
                           <iconify-icon data-icon="emojione-monotone:envelope-with-arrow"></iconify-icon>
                           N'hésitez pas à nous tenir au courant
                        </h3>
                        <form action="{{route('send-message')}}" method="post" class="contactForm ajax-form">
                          @csrf
                           <div class="form-group">
                             <label for="name" class="control-label">Prénom & Nom *</label>
                             <input type="text" name="name" id="name" class="form-control" required="required">
                           </div>
                            <div class="form-group">
                             <label for="subject" class="control-label">Sujet *</label>
                             <input type="text"  name="subject" class="form-control" id="subject" required="required">
                           </div>

                            <div class="form-group">
                             <label for="content" class="control-label">Message *</label>
                             <textarea name="content" id="content" cols="30" rows="10" required="required"></textarea>
                           </div>
                           <div class="form-group">
                             <input type="submit" class="form-control" value="Envoyer" class="btn btn-primary">
                           </div>
                           <div class="alert alert-success" style="display:none;">
                              Message has been sent successfully!
                           </div>
                           <div class="alert alert-error" style="display:none;">
                              An error occurred, please try again later.
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-12">
                  <div class="content-contacter">
                     <p style="white-space: nowrap;  padding:00 10px;">
                        <iconify-icon data-icon="si-glyph:mail-box"></iconify-icon>
                        11 BP 1286 Abidjan 11
                     </p>
                     <p style="white-space: nowrap;   padding:00 10px;">
                        <iconify-icon data-icon="ic:baseline-phone-android"></iconify-icon>
                        +225 O8 35 92 87
                     </p>
                     <p style="white-space: nowrap;    padding:00 10px;">
                        <iconify-icon data-icon="ic:baseline-phone-android"></iconify-icon>
                        +221 78 608 42 34
                     </p>
                     <p style="white-space: nowrap;  padding:00 10px;">
                        <iconify-icon data-icon="simple-icons:mail-dot-ru"></iconify-icon>
                        aka_franck@hotmail.com
                     </p>
                  </div>
               </div>
            </div>
            <!-- .entry-content -->
         </article>
         <!-- #post-## -->
      </main>
      <!-- #main -->
   </div>
   <!-- #primary -->

 <!-- Sidebar left -->
 @include('inc.left_sidebar')

</div>


<script>
$('#myTab a[href="#competences_techniques-tab"]').tab('show');
</script>



@endsection