<div class="sidebar-header">
    <a href="#"><img src="{{asset('template/uploads/imgs/akafranck-chef-projet-150x150.jpg')}}" style="width:70px !important; height: 70px !important" alt="" />
    </a>
    <h3>{{$auth->name ?? ''}}</h3>
    <p>Admin</p>
    
</div>
<div class="left-custom-menu-adp-wrap">
    <ul class="nav navbar-nav left-sidebar-menu-pro">
        <li class="nav-item">
            <a href="{{route('dashboard')}}"  role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Tableau de bord</span> <span class="indicator-right-menu mini-dn"></span></a>
           
        </li>
   
   <li class="nav-item">
       <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-file"></i> <span class="mini-dn">Articles</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
       <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
           <a href="{{route('articles.create')}}" class="dropdown-item">Nouveau article</a>
           <a href="{{route('tous-les-articles')}}" class="dropdown-item">Gérer les articles</a>
           
       </div>
       </li>
        <li class="nav-item"><a href="{{route('galerie.create')}}"  role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-image"></i> <span class="mini-dn">Médiathèque </span> <span class="indicator-right-menu mini-dn"></span>
        </a>
          
           
        </li>


      
    </ul>
</div>