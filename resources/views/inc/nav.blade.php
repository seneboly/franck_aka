<ul class="onepress-menu">
    <li ><a href="{{route('experience')}}"  class="{{Route::is('experience') ? 'active' : ''}}">Expérience</a></li>
    <li  ><a href="{{route('formation')}}" class="{{Route::is('formation') ? 'active' : ''}}">Formation</a></li>
    <li  ><a href="{{route('competences')}}" class="{{Route::is('competences') ? 'active' : ''}}">Compétences</a></li>
    <li  ><a href="{{route('loisirs')}}" class="{{Route::is('loisirs') ? 'active' : ''}}">Loisirs</a></li>
    <li  ><a href="{{route('galerie.index')}}" class="{{Route::is('galerie.index') ? 'active' : ''}}">Mediathèque</a></li>
    <li  ><a href="{{route('articles.index')}}" class="{{Route::is('articles.index') ? 'active' : ''}}">Mon Blog</a></li>
    <li  ><a href="{{route('contact')}}"  class="{{Route::is('contact') ? 'active' : ''}}">Contact</a></li>
</ul>