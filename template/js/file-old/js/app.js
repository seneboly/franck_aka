(function ($) {
   'use strict';

   var cachDom ;
   var _apps = {
      cachDom: {
         $wdn: $(document),
      },
      init: function () {
         cachDom = this.cachDom;
         this.bindEvents();
      },
      bindLibrairy: function () {
         return {

         }
      },
      bindEvents: function () {
         
         cachDom.$wdn
            /*
             *  Portefolio filtre produit (home page)
            */
            .on('click', '.exp-nav', _apps.publicObjet().tabExp);
      },
      publicObjet: function () {
         return {
            tabExp: function (e) {
               e.preventDefault();
               var index = $(this).index(),
               info = $('.exp-info');
               info.hide();
               info.eq(index).fadeIn('1000');
               // info.eq(index).show('slow', function(e){
               //    $.get('/contentGetListings', function(ev) {
               //       console.log(ev);
               //       // for (var i = 0; i < e.length; i++) {
               //       //    $('#listInserts').append('<div>' + e[i].text + '<a class="del" rel="'+ e[i].id +'" href="#">X</a></div>');
               //       // }
               //    });
               // });
               $('.exp-nav').removeClass('exp-current');
               $(this).addClass('exp-current');
            }
         }
      },
      service: function () {
         return {
         }
      },
   }
   _apps.init();

})(jQuery);