 ( function( $ ) {

        if ( onepress_js_settings.onepress_disable_sticky_header != '1' ) {
            var is_top_header = $( '#page > .site-header').length ?  true : false;
            var p_to_top;
            $('.site-header').eq(0).wrap( '<div class="site-header-wrapper">' );
            var is_transparent = $( 'body').hasClass( 'header-transparent' );
            $wrap =  $( '.site-header-wrapper');
            $wrap.addClass( 'no-scroll' );

            if (! is_top_header ) {
                $( 'body').removeClass( 'header-transparent' );
            }

            $( document ).scroll( function(){
                var header_fixed = $('.site-header').eq(0);
                var header_parent = header_fixed.parent();
                var header_h = header_fixed.height() || 0;
               // $( '.site-header-wrapper').height( header_h );
                p_to_top    = header_parent.position().top;
                var topbar = $( '#wpadminbar' ).height() || 0;
                if (  topbar > 0 ) {
                    var  topbar_pos = $( '#wpadminbar').css( 'position' );
                    if ( 'fixed' !== topbar_pos ) {
                        topbar = 0;
                    }
                }

                if( $( document ).scrollTop() > p_to_top ) {
                    if ( ! is_transparent){
                        $wrap.height( header_h );
                    }

                    $wrap.addClass( 'is-fixed').removeClass( 'no-scroll' );
                    header_fixed.addClass('header-fixed');
                    header_fixed.css( 'top', topbar+'px' );
                    header_fixed.stop().animate({},400);
                } else {
                    header_fixed.removeClass('header-fixed');
                    header_fixed.css( 'top', 'auto' );
                    header_fixed.stop().animate({},400);
                    if ( ! is_transparent ) {
                        $wrap.height('');
                    }
                    $wrap.removeClass( 'is-fixed' ).addClass( 'no-scroll' );
                }
            });

        }

    })(jQuery);