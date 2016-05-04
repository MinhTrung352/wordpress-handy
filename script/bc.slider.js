var AT_Slider ={
  
    owlSlider : function(){
      
      	jQuery(".product-list").length && jQuery('.product-list').owlCarousel({
          	nav		: true
          	,dots 		: false
      		,items		: 3
          	,margin		: 30
			,responsive : {
              	0:{
                	items: 1
                }
            	,480:{
              		items: 2
            	}
              	,980:{
              		items: 3
            	}
          	}
          	,navText	: ['<span class="button-prev"></span>', '<span class="button-next"></span>']
        });
      
      	jQuery(".post-list-slider").length && jQuery('.post-list-slider').owlCarousel({
          	loop 		: true
          	,nav		: true
          	,dots 		: false
      		,items		: 3
          	,margin		: 30
			,responsive : {
              	0:{
                	items: 1
                }
              	,480:{
                	items: 2
                }
            	,992:{
              		items: 3
            	}
          	}
          	,navText	: ['<span class="button-prev"></span>', '<span class="button-next"></span>']
        });
      
      	jQuery(".banner-list").length && jQuery('.banner-list').owlCarousel({
          	autoplay	: true
          	,loop		: true
          	,dots 		: true
      		,items		: 1
          	,animateOut	: 'fadeOut'
          	,animateIn	: 'fadeIn'
        });
      
      	jQuery(".featured-list").length && jQuery('.featured-list').owlCarousel({
          	autoplay	: true
          	,loop		: true
          	,dots 		: false
      		,items		: 1
        });
      
      	jQuery("#widget-partner").length && jQuery('#widget-partner').owlCarousel({
          	nav			: true
          	,dots 		: false
      		,items		: 5
          	,margin		: 30
			,responsive : {
              	0:{
                	items: 1
                }
            	,480:{
              		items: 2
            	}
            	,991:{
              		items: 3
            	}
              	,1024:{
              		items: 4
            	}
              	,1200:{
              		items: 5
            	}
          	}
          	,navText	: ['<span class="button-prev"></span>', '<span class="button-next"></span>']
        });
      
      	jQuery(".related-items").length && jQuery('.related-items').owlCarousel({
          	nav			: true
          	,dots 		: false
      		,items		: 3
          	,margin		: 30
			,responsive : {
                0:{
                	items: 1
                }
              	,480:{
                	items: 2
                }
                ,992:{
                  items: 3
                }
          	}
          	,navText	: ['<span class="button-prev"></span>', '<span class="button-next"></span>']
        });
      
      	jQuery(".same-vendor-items").length && jQuery('.same-vendor-items').owlCarousel({
          	nav			: true
          	,dots 		: false
      		,items		: 3
          	,margin		: 30
			,responsive : {
                0:{
                	items: 1
                }
              	,480:{
                	items: 2
                }
                ,992:{
                  items: 3
                }
          	}
          	,navText	: ['<span class="button-prev"></span>', '<span class="button-next"></span>']
        });
      
      	jQuery(".product-image-gallery").length && jQuery('.product-image-gallery').owlCarousel({
          	loop			: true
            ,margin			: 0
            ,responsiveClass: true
            ,nav			: true
            ,dots			: false
            ,center			: true
            ,items			: 1
            ,mouseDrag		: false
          	,navText		: ['<span class="button-prev"></span>', '<span class="button-next"></span>']
        });

        jQuery("#gallery-image").length && jQuery('#gallery-image').owlCarousel({
            nav			: false
          	,dots 		: false
          	,margin		: 20
          	,mouseDrag	: true
			,responsive : {
                0:{
                	items: 3
                }
              	,480:{
                	items: 5
                }
                ,768:{
                      items: 3
                }
            	,1199:{
              		items: 5
            	}
          	}
			
        });

	}
  
  	,init : function(){
      this.owlSlider();
    }
  
}

/* Check IE */
var bcMsieVersion = {

  MsieVersion: function() {

    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer, return version number
      return parseInt(ua.substring(msie + 5, ua.indexOf(".", msie)));
    else                 // If another browser, return 0
      {
      return 0;
    }
  }

  ,init : function(){
    this.MsieVersion();
  }
}

jQuery.fn.extend({
  scrollToMe: function() {
    if (jQuery(this).length) {
      var top = jQuery(this).offset().top - 250;
      jQuery('html,body').animate({
        scrollTop: top
      }, 500);
    }
  },
});;

jQuery(document).ready(function($) {
	
	AT_Slider.init();
  
    $('.rating-links a').click(function() {
      $('.product-simple-tab ul li').removeClass('active');
      $('#tab_review_tabbed').addClass('active');
      $('.product-simple-tab .tab-content .tab-pane').removeClass('active');
      $('#tab_review').show();
      $('#tab_review_tabbed').scrollToMe();
      return false;
    });
      
});