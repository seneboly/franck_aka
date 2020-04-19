
<!DOCTYPE html>
<html lang="fr-FR">

    <head>
        @include('partials.head')
    </head>

<body class="home page-template page-template-template-frontpage page-template-template-frontpage-php page page-id-382 wp-custom-logo sticky-header header-transparent" >
    <div id="page" class="hfeed site">
        <a class="skip-link screen-reader-text" href="#content">Aller au contenu</a>
        <header id="masthead" class="site-header" role="banner">
            <div class="container">
                <div class="site-branding">
                    <div>
                        <div class="site-logo-div">
                            <a href="{{route('home')}}" class="custom-logo-link" rel="home" itemprop="url">
                                <img width="175" height="25" src="{{asset('template/uploads/imgs/franck_logo.png')}}" class="custom-logo wp-image-409" alt="Aka Franck" itemprop="logo" srcset="{{asset('template/uploads/imgs/franck_logo.png')}} 175w, {{asset('template/uploads/imgs/franck_logo.png')}} 150w" sizes="(max-width: 175px) 100vw, 175px" mwl-img-id="409" />
                            </a>
                        </div>
                    </div>
                </div>
                <!-- .site-branding -->

                <div class="header-right-wrapper">
                    <a href="#0" id="nav-toggle">Menu<span></span></a>
                    <nav id="site-navigation" class="main-navigation" role="navigation">
                        @include('inc.nav')
                    </nav>
                    <!-- #site-navigation -->
                </div>
            </div>
        </header><!-- #masthead -->
    <div id="content" class="site-content" >                                         
        <main id="main" class="site-main" role="main">
            @yield('content')
        <!-- #main -->
        </div><!-- #content -->
        <footer id="colophon" class="site-footer" role="contentinfo">
           @include('partials.footer')

  
</body>
</html>

