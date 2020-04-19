<div class="col-lg-6  col-md-6 elementToFadeInAndOut"> 
    @if(session('message'))
    <div class="adminpro-message-list alert {{session('class') ?? ''}}">
       <p style="color:#000">{{session('message')}}</p>
    </div>
    @endif 
</div>    


