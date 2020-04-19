<div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright &#169; {{now()->year}} Franck Aka All rights reserved.</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
    <!-- Chat Box Start-->
    <div class="chat-list-wrap">
        <div class="chat-list-adminpro">
            <div class="chat-button">
                <span data-toggle="collapse" data-target="#chat" class="chat-icon-link"><i class="fa fa-comments"></i></span>
            </div>
           
        </div>
    </div>
    <!-- Chat Box End-->
    <!-- jquery
		============================================ -->
    <script src="{{asset('dashboard_template/js/vendor/jquery-1.11.3.min.js')}}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{asset('dashboard_template/js/bootstrap.min.js')}}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{asset('dashboard_template/js/jquery.meanmenu.js')}}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{asset('dashboard_template/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{asset('dashboard_template/js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{asset('dashboard_template/js/jquery.scrollUp.min.js')}}"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{asset('dashboard_template/js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('dashboard_template/js/counterup/waypoints.min.js')}}"></script>
    <script src="{{asset('dashboard_template/js/counterup/counterup-active.js')}}"></script>
    <!-- peity JS
		============================================ -->
    <script src="{{asset('dashboard_template/js/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('dashboard_template/js/peity/peity-active.js')}}"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{asset('dashboard_template/js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('dashboard_template/js/sparkline/sparkline-active.js')}}"></script>
    <!-- flot JS
		============================================ -->
    <script src="{{asset('dashboard_template/js/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('dashboard_template/js/flot/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('dashboard_template/js/flot/jquery.flot.spline.js')}}"></script>
    <script src="{{asset('dashboard_template/js/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('dashboard_template/js/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('dashboard_template/js/flot/Chart.min.js')}}"></script>
    <script src="{{asset('dashboard_template/js/flot/flot-active.js')}}"></script>
    <!-- map JS
		============================================ -->
    <script src="{{asset('dashboard_template/js/map/raphael.min.js')}}"></script>
    <script src="{{asset('dashboard_template/js/map/jquery.mapael.js')}}"></script>
    <script src="{{asset('dashboard_template/js/map/france_departments.js')}}"></script>
    <script src="{{asset('dashboard_template/js/map/world_countries.js')}}"></script>
    <script src="{{asset('dashboard_template/js/map/usa_states.js')}}"></script>
    <script src="{{asset('dashboard_template/js/map/map-active.js')}}"></script>
    <!-- data table JS
		============================================ -->
    <script src="{{asset('dashboard_template/js/data-table/bootstrap-table.js')}}"></script>
    <script src="{{asset('dashboard_template/js/data-table/tableExport.js')}}"></script>
    <script src="{{asset('dashboard_template/js/data-table/data-table-active.js')}}"></script>
    <script src="{{asset('dashboard_template/js/data-table/bootstrap-table-editable.js')}}"></script>
    <script src="{{asset('dashboard_template/js/data-table/bootstrap-editable.js')}}"></script>
    <script src="{{asset('dashboard_template/js/data-table/bootstrap-table-resizable.js')}}"></script>
    <script src="{{asset('dashboard_template/js/data-table/colResizable-1.5.source.js')}}"></script>
    <script src="{{asset('dashboard_template/js/data-table/bootstrap-table-export.js')}}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{asset('dashboard_template/js/main.js')}}"></script>
    <script src="{{asset('public/js/app.js')}}"></script>

    <!-- summernote JS
        ============================================ -->
    <script src="{{asset('dashboard_template/js/summernote.min.js')}}"></script>
    <script src="{{asset('dashboard_template/js/summernote-active.js')}}"></script>

     
    <!-- select2 JS
        ============================================ -->
    <script src="{{asset('dashboard_template/js/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('dashboard_template/js/select2/select2-active.js')}}"></script>

    <script src="{{asset('public/js/larails.js')}}"></script>
    @stack('js')