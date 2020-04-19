<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('partials.backoffice.head')
</head>

<body class="darklayout">

    <div id="ts-preloader-absolute22">
        <div class="tsperloader22" id="first_tsperloader22"></div>
        <div class="tsperloader22" id="second_tsperloader22"></div>
        <div class="tsperloader22" id="third_tsperloader22"></div>
    </div>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                @include('inc.backoffice.sidebar')
            </nav>
        </div>
        <div class="content-inner-all">
            <div class="header-top-area">
                <div class="fixed-header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="admin-logo logo-wrap-pro">
                                    <a href="#"><img src="/img/logo/log.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                                <div class="header-top-menu tabl-d-n">
                                   @include('inc.backoffice.main_nav')
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                        
                                      
                                        <li class="nav-item">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                                <span class="admin-name">{{$auth->name ?? ''}}</span>
                                                <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                                
                                                <li><a href="{{route('dashboard')}}">Tableau de bord</a>
                                                </li>
                                                 <li><a href="{{route('tous-les-articles')}}">Gérer articles</a>
                                                </li>
                                                <li><a href="{{route('articles.create')}}">Créer</a>
                                                </li>
                                                <li><a href="{{route('galerie.create')}}">Galerie</a>
                                                </li>
                                                <li><a href="{{route('logout')}}" data-method="POST" data-confirm="Êtes-vous sûr de vouloir vous déconnecter ?"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Se déconnecter</a>
                                                </li>
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header top area end-->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    @include('inc.backoffice.breadcrumb')
                </div>
            </div>
            <!-- Breadcome End-->
            <!-- Mobile Menu start -->
           
            <!-- Mobile Menu end -->
            <!-- Breadcome start-->
            <div class="breadcome-area des-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            @include('inc.backoffice.breadcrumb')
                        </div>
                    </div>


                </div>
            </div>
            <!-- Breadcome End-->
            <!-- welcome Project, sale area start-->
            <div class="welcome-adminpro-area">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
         
        </div>
    </div>
    <!-- Footer Start-->
    @include('partials.backoffice.footer')
</body>

</html>