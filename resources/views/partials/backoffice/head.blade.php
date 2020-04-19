   <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
     <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('dashboard_template/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('dashboard_template/css/font-awesome.min.css')}}">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('dashboard_template/css/adminpro-custon-icon.css')}}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('dashboard_template/css/meanmenu.min.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('dashboard_template/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('dashboard_template/css/animate.css')}}">
    <!-- data-table CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('dashboard_template/css/data-table/bootstrap-table.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard_template/css/data-table/bootstrap-editable.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('dashboard_template/css/normalize.css')}}">
    <!-- charts C3 CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('dashboard_template/css/c3.min.css')}}">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('dashboard_template/css/form/all-type-forms.css')}}">
     <!-- modals CSS 
            ============================================ -->
    <link rel="stylesheet" href="{{asset('dashboard_template/css/modals.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('dashboard_template/style.cs')}}s">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('dashboard_template/css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('dashboard_template/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <!-- summernote CSS
            ============================================ -->
    <link rel="stylesheet" href="{{asset('dashboard_template/css/summernote.css')}}">

    <!-- select2 CSS
            ============================================ -->
    <link rel="stylesheet" href="{{asset('dashboard_template/css/select2/select2.min.css')}}">

    @stack('css')