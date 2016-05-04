<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <title><?php
         // Print the <title> tag based on what is being viewed.
         global $page, $paged;
         wp_title( '|', true, 'right' );

         // Add the blog name.
         bloginfo( 'name' );

         // Add the blog description for the home/front page.
         $site_description = get_bloginfo( 'description', 'display' );
         if ( $site_description && ( is_home() || is_front_page() ) ) echo " | {$site_description}";

         // Add a page number if necessary:
         if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Trang %s', 'agilsun' ), max( $paged, $page ) );
     ?></title><?php wp_head(); ?>
    <meta content="" name="author">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href=
    "<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/jquery.swiper.css"
    media="all" rel="stylesheet" type="text/css">
    <link href=
    "<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/jquery-ui.css"
    media="all" rel="stylesheet" type="text/css">
    <link href=
    "<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/bootstrap.3x.css"
    media="all" rel="stylesheet" type="text/css">
    <link href=
    "<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/jquery.owl.carousel.css"
    media="all" rel="stylesheet" type="text/css">
    <link href=
    "<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/jquery.countdown.css"
    media="all" rel="stylesheet" type="text/css">
    <link href=
    "<?php echo get_bloginfo( 'stylesheet_directory' ); ?>css/normalize.css"
    media="all" rel="stylesheet" type="text/css">
    <link href=
    "<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/jquery.jgrowl.css"
    media="all" rel="stylesheet" type="text/css">
    <link href=
    "<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/jquery.fancybox-buttons.css"
    media="all" rel="stylesheet" type="text/css">
    <link href=
    "<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/animate.min.css"
    media="all" rel="stylesheet" type="text/css">
    <link href=
    "<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/animate.css"
    media="all" rel="stylesheet" type="text/css">
    <link href=
    "<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/jquery.fancybox.css"
    media="all" rel="stylesheet" type="text/css">
    <link href=
    "<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/swatch.css"
    media="all" rel="stylesheet" type="text/css">
    <link href=
    "<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/granada.css"
    media="all" rel="stylesheet" type="text/css">
    <link href=
    "<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/bc.toggle.scss.css"
    media="all" rel="stylesheet" type="text/css">
    <link href=
    "<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/bc.global.scss.css"
    media="all" rel="stylesheet" type="text/css">
    <link href=
    "<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/bc.style.scss.css"
    media="all" rel="stylesheet" type="text/css">
    <link href=
    "<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/bc.responsive.scss.css"
    media="all" rel="stylesheet" type="text/css">
    <link href=
    "http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
    rel='stylesheet' type='text/css'>
    <link href=
    "http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
    rel='stylesheet' type='text/css'>
    <link href=
    "http://fonts.googleapis.com/css?family=Roboto:400,100,500,300,300italic,600,700,400italic,600italic,700italic"
    rel='stylesheet' type='text/css'>
    <link href=
    "http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
    rel='stylesheet' type='text/css'>
    <link href=
    "http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"
    rel="stylesheet">
    <link href=
    "<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/main.css" media=
    "all" rel="stylesheet" type="text/css">
    <script src=
    "%3C?php%20echo%20get_bloginfo(%20'stylesheet_directory'%20);%20?%3E/script/jquery-1.9.1.min.js">
    </script>
    <script src=
    "%3C?php%20echo%20get_bloginfo(%20'stylesheet_directory'%20);%20?%3E/script/jquery-ui.js">
    </script>
    <script defer src=
    "%3C?php%20echo%20get_bloginfo(%20'stylesheet_directory'%20);%20?%3E/script/bootstrap.3x.min.js">
    </script>
    <script defer src=
    "%3C?php%20echo%20get_bloginfo(%20'stylesheet_directory'%20);%20?%3E/script/jquery.easing.1.3.js">
    </script>
    <script async src=
    "%3C?php%20echo%20get_bloginfo(%20'stylesheet_directory'%20);%20?%3E/script/modernizr.js">
    </script>
    <script defer src=
    "%3C?php%20echo%20get_bloginfo(%20'stylesheet_directory'%20);%20?%3E/script/mobile-detect.min.js">
    </script>
    <script src=
    "%3C?php%20echo%20get_bloginfo(%20'stylesheet_directory'%20);%20?%3E/script/jquery.swiper.js">
    </script>
    <script src=
    "%3C?php%20echo%20get_bloginfo(%20'stylesheet_directory'%20);%20?%3E/script/cookies.js">
    </script>
    <script defer src=
    "%3C?php%20echo%20get_bloginfo(%20'stylesheet_directory'%20);%20?%3E/script/wow.min.js">
    </script>
    <script src=
    "%3C?php%20echo%20get_bloginfo(%20'stylesheet_directory'%20);%20?%3E/script/jquery.fancybox.min.js">
    </script>
    <script defer src=
    "%3C?php%20echo%20get_bloginfo(%20'stylesheet_directory'%20);%20?%3E/script/jquery.jgrowl.min.js">
    </script>
    <script defer src=
    "%3C?php%20echo%20get_bloginfo(%20'stylesheet_directory'%20);%20?%3E/script/jquery.elevatezoom.min.js">
    </script>
    <script defer src=
    "%3C?php%20echo%20get_bloginfo(%20'stylesheet_directory'%20);%20?%3E/script/jquery.owl.carousel.min.js">
    </script>
    <script defer src=
    "%3C?php%20echo%20get_bloginfo(%20'stylesheet_directory'%20);%20?%3E/script/jquery.scrollTo-min.js">
    </script>
    <script defer src=
    "%3C?php%20echo%20get_bloginfo(%20'stylesheet_directory'%20);%20?%3E/script/jquery.serialScroll.js">
    </script>
    <script defer src=
    "%3C?php%20echo%20get_bloginfo(%20'stylesheet_directory'%20);%20?%3E/script/jquery.plugin.js">
    </script>
    <script defer src=
    "%3C?php%20echo%20get_bloginfo(%20'stylesheet_directory'%20);%20?%3E/script/jquery.countdown.js">
    </script>
    <script defer src=
    "%3C?php%20echo%20get_bloginfo(%20'stylesheet_directory'%20);%20?%3E/script/cart.js">
    </script>
    <script defer src=
    "%3C?php%20echo%20get_bloginfo(%20'stylesheet_directory'%20);%20?%3E/script/rivets-cart.min.js">
    </script>
    <script defer src=
    "%3C?php%20echo%20get_bloginfo(%20'stylesheet_directory'%20);%20?%3E/script/bc.ajax-search.js">
    </script>
    <script defer src=
    "%3C?php%20echo%20get_bloginfo(%20'stylesheet_directory'%20);%20?%3E/script/option_selection.js">
    </script>
    <script defer src=
    "%3C?php%20echo%20get_bloginfo(%20'stylesheet_directory'%20);%20?%3E/script/bc.global.js">
    </script>
    <script src=
    "%3C?php%20echo%20get_bloginfo(%20'stylesheet_directory'%20);%20?%3E/script/bc.slider.js">
    </script>
    <script src=
    "%3C?php%20echo%20get_bloginfo(%20'stylesheet_directory'%20);%20?%3E/script/bc.script.js">
    </script>
    <script>
    //<![CDATA[
      var Shopify = Shopify || {};
      Shopify.shop = "handy-theme.myshopify.com";
      Shopify.theme = {"name":"Handy","id":107511047,"theme_store_id":null,"role":"main"};

    //]]>
    </script>
    <script>
    //<![CDATA[
    (function() {
      function asyncLoad() {
        var urls = ["\/\/productreviews.shopifycdn.com\/assets\/v4\/spr.js?shop=handy-theme.myshopify.com"];
        for (var i = 0; i < urls.length; i++) {
          var s = document.createElement('script');
          s.type = 'text/javascript';
          s.async = true;
          s.src = urls[i];
          var x = document.getElementsByTagName('script')[0];
          x.parentNode.insertBefore(s, x);
        }
      }
      window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad, false);
    })();

    //]]>
    </script>
    <script id="__st">
    //<![CDATA[
    var __st={"a":11955258,"offset":-14400,"reqid":"5f67445e-c14a-4336-83fd-1f19783dcfd3","pageurl":"handy-theme.myshopify.com\/","u":"fe11c2d989fb","p":"home"};
    //]]>
    </script>
    <script>
    //<![CDATA[
      (function() {
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
        s.src = 'http://cdn.shopify.com/s/javascripts/shopify_stats.js?v=6';
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
      })();

    //]]>
    </script>
    <script type="text/javascript">
        
      window.ShopifyAnalytics = window.ShopifyAnalytics || {};
      window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
      window.ShopifyAnalytics.meta.currency = 'USD';

    </script>
    <script type="text/javascript">
        window.ShopifyAnalytics.merchantGoogleAnalytics = function() {
          
        };
    </script>
    <script class="analytics" type="text/javascript">
        
        
        (function () {
          var customDocumentWrite = function(content) {
            var jquery = null;

            if (window.jQuery) {
              jquery = window.jQuery;
            } else if (window.Checkout && window.Checkout.$) {
              jquery = window.Checkout.$;
            }

            if (jquery) {
              jquery('body').append(content);
            }
          };

          var analytics = document.createElement('script');
          var loaded = false;
          var trekkie_version = 1;
          var onload = function() {
            if (loaded) return;
            loaded = true;
            window.ShopifyAnalytics.lib = window.trekkie.noConflict();
            window.ShopifyAnalytics.lib.initialize(
              {"Trekkie":{"appName":"storefront","environment":"production","defaultAttributes":{"shopId":11955258}}}
            );

            window.ShopifyAnalytics.lib.ready(function() {
              

              var originalDocumentWrite = document.write;
              document.write = customDocumentWrite;
              try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
              document.write = originalDocumentWrite;

              
        window.ShopifyAnalytics.lib.page(
          null,
          {}
        );
      
              
            });
          }
          analytics.onload = onload;
          analytics.onreadystatechange = function() {
            if (!/complete|loaded/.test(analytics.readyState)) return;
            onload();
          }
          analytics.async = true;
          analytics.src = "https://cdn.shopify.com/s/javascripts/trekkie.storefront.min.js?v=" + trekkie_version;
          document.getElementsByTagName('head')[0].appendChild(analytics);
          
        })();
    </script>
</head>
<body class="templateIndex">
    <div class="boxes-wrapper">
        <!-- Begin Menu Mobile-->
        <div class="mobile-version visible-xs visible-sm">
            <div class="menu-mobile navbar">
                <div class="nav-collapse is-mobile-nav">
                    <ul class="main-nav">
                        <li class="li-on-mobile"><span>All
                        Department</span></li>
                        <li class="active">
                            <a href=
                            "handy-theme_myshopify_default.html"><span>Home</span></a>
                        </li>
                        <li class="dropdown mega-menu new">
                            <a class="dropdown-link" href=
                            "collections/all.htm"><span>Shop</span></a>
                            <span class="expand"><i class=
                            "fa fa-angle-down hidden-xs hidden-sm"></i>
                            <i class=
                            "fa fa-plus visible-xs visible-sm"></i></span>
                            <div class="dropdown-menu dropdown-menu-1 column-4"
                            style="min-height: 100px; background: #ebebeb;">
                                <div class="row">
                                    <div class="mega-col mega-col-1 col-sm-2">
                                        <div class="dropdown mega-sub-link">
                                            <a class="dropdown-link" href=
                                            "collections.htm"><span>Collections</span></a>
                                            <span class="expand"><i class=
                                            "fa fa-angle-down hidden-xs hidden-sm">
                                            </i> <i class=
                                            "fa fa-plus visible-xs visible-sm"></i></span>
                                            <ul class=
                                            "dropdown-menu dropdown-menu-sub">
                                                <li>
                                                    <a href=
                                                    "handy-theme_myshopify_default.html">
                                                    Birthday Gifts</a>
                                                </li>
                                                <li>
                                                    <a href=
                                                    "handy-theme_myshopify_default.html">
                                                    Furniture</a>
                                                </li>
                                                <li>
                                                    <a href=
                                                    "handy-theme_myshopify_default.html">
                                                    Vintage</a>
                                                </li>
                                                <li>
                                                    <a href=
                                                    "handy-theme_myshopify_default.html">
                                                    Citchen Things</a>
                                                </li>
                                                <li>
                                                    <a href=
                                                    "handy-theme_myshopify_default.html">
                                                    Party</a>
                                                </li>
                                                <li>
                                                    <a href=
                                                    "handy-theme_myshopify_default.html">
                                                    Decor Art</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mega-col mega-col-2 col-sm-2">
                                        <div class="dropdown mega-sub-link">
                                            <a class="dropdown-link" href=
                                            "collections/all.htm"><span>Products</span></a>
                                            <span class="expand"><i class=
                                            "fa fa-angle-down hidden-xs hidden-sm">
                                            </i> <i class=
                                            "fa fa-plus visible-xs visible-sm"></i></span>
                                            <ul class=
                                            "dropdown-menu dropdown-menu-sub">
                                                <?php
                                                                        do_shortcode('[main_menu]');
                                                                        ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mega-col mega-col-3 col-sm-3">
                                        <div class="dropdown mega-sub-link">
                                            <a href=
                                            "handy-theme_myshopify_default.html#">
                                            <span>Bestseller</span></a>
                                            <span class="expand"><i class=
                                            "fa fa-angle-down hidden-xs hidden-sm">
                                            </i> <i class=
                                            "fa fa-plus visible-xs visible-sm"></i></span>
                                            <ul class=
                                            "dropdown-menu dropdown-menu-sub fix">
                                            <li class="bp-item">
                                                    <div class="row">
                                                        <div class=
                                                        "sb-product-head col-sm-5 col-xs-4">
                                                        <a href=
                                                        "collections/vintage/products/black-fashion-zapda-shoes.htm">
                                                            <img alt=
                                                            "Black Fashion Zapda"
                                                            src=
                                                            "http://cdn.shopify.com/s/files/1/1195/5258/products/bigstock-Merry-Christmas-Scandinavian-76638917_compact.jpg?v=1457418371"></a>
                                                        </div>
                                                        <div class=
                                                        "sb-product-content col-sm-7 col-xs-8">
                                                        <div class=
                                                        "bp-content-inner">
                                                                <a href=
                                                                "collections/vintage/products/black-fashion-zapda-shoes.htm">
                                                                Black Fashion
                                                                Zapda</a>
                                                                <div class=
                                                                "sb-price">
                                                                    <span class="price-compare">
                                                                    <span class='money'>
                                                                    $500.00</span></span>
                                                                    <span class="price-sale">
                                                                    <span class='money'>
                                                                    $449.99</span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="bp-item">
                                                    <div class="row">
                                                        <div class=
                                                        "sb-product-head col-sm-5 col-xs-4">
                                                        <a href=
                                                        "collections/vintage/products/daltex-product-example.htm">
                                                            <img alt=
                                                            "Daltex Product Example"
                                                            src=
                                                            "http://cdn.shopify.com/s/files/1/1195/5258/products/004_compact.jpg?v=1457418616"></a>
                                                        </div>
                                                        <div class=
                                                        "sb-product-content col-sm-7 col-xs-8">
                                                        <div class=
                                                        "bp-content-inner">
                                                                <a href=
                                                                "collections/vintage/products/daltex-product-example.htm">
                                                                Daltex Product
                                                                Example</a>
                                                                <div class=
                                                                "sb-price">
                                                                    <span class="price-compare">
                                                                    <span class='money'>
                                                                    $250.00</span></span>
                                                                    <span class="price-sale">
                                                                    <span class='money'>
                                                                    $200.00</span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mega-col mega-col-4 col-sm-5">
                                        <div class=
                                        "dropdown mega-sub-link banners">
                                            <a class="visible-xs" href=
                                            "handy-theme_myshopify_default.html#">
                                            <span>Clearance Sale</span></a>
                                            <span class="expand"><i class=
                                            "fa fa-angle-down hidden-xs hidden-sm">
                                            </i> <i class=
                                            "fa fa-plus visible-xs visible-sm"></i></span>
                                            <ul class=
                                            "dropdown-menu dropdown-menu-sub">
                                                <li>
                                                    <a href=
                                                    "collections.htm"><img alt=
                                                    "" src=
                                                    "http://cdn.shopify.com/s/files/1/1195/5258/t/3/assets/mega_menu_1_image_col_4.jpg?7472155404521155336"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <a href="blogs/news.htm"><span>Blog</span></a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-link" href=
                            "pages/about-us.htm"><span>Pages</span></a>
                            <span class="expand"><i class=
                            "fa fa-angle-down hidden-xs hidden-sm"></i>
                            <i class=
                            "fa fa-plus visible-xs visible-sm"></i></span>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="pages/about-us.htm" tabindex=
                                    "-1"><span>About us</span></a>
                                </li>
                                <li>
                                    <a href="pages/contact-us.htm" tabindex=
                                    "-1"><span>Contact us</span></a>
                                </li>
                                <li>
                                    <a href="pages/brands.htm" tabindex=
                                    "-1"><span>Vendor list</span></a>
                                </li>
                                <li>
                                    <a href=
                                    "https://handy-theme.myshopify.com/page-404"
                                    tabindex="-1"><span>Page 404</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="pages/brands.htm"><span>Vendors</span></a>
                        </li>
                        <li class="dropdown mega-menu new">
                            <a class="dropdown-link" href=
                            "blogs/news.htm"><span>New posts</span></a>
                            <span class="expand"><i class=
                            "fa fa-angle-down hidden-xs hidden-sm"></i>
                            <i class=
                            "fa fa-plus visible-xs visible-sm"></i></span>
                            <div class="dropdown-menu dropdown-menu-2 column-4"
                            style="min-height: 100px; background: #eeede6;">
                                <div class="row">
                                    <div class="mega-col mega-col-1 col-sm-3">
                                        <div class=
                                        "dropdown mega-sub-link banners">
                                            <a href=
                                            "handy-theme_myshopify_default.html#">
                                            <span>Post with images</span></a>
                                            <span class="expand"><i class=
                                            "fa fa-angle-down hidden-xs hidden-sm">
                                            </i> <i class=
                                            "fa fa-plus visible-xs visible-sm"></i></span>
                                            <ul class=
                                            "dropdown-menu dropdown-menu-sub">
                                                <li>
                                                    <a href=
                                                    "handy-theme_myshopify_default.html">
                                                    <img alt="" src=
                                                    "http://cdn.shopify.com/s/files/1/1195/5258/t/3/assets/mega_menu_2_image_col_1.jpg?7472155404521155336"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mega-col mega-col-2 col-sm-3">
                                        <div class=
                                        "dropdown mega-sub-link banners">
                                            <a href=
                                            "handy-theme_myshopify_default.html#">
                                            <span>Markup Examples</span></a>
                                            <span class="expand"><i class=
                                            "fa fa-angle-down hidden-xs hidden-sm">
                                            </i> <i class=
                                            "fa fa-plus visible-xs visible-sm"></i></span>
                                            <ul class=
                                            "dropdown-menu dropdown-menu-sub">
                                                <li>
                                                    <a href=
                                                    "handy-theme_myshopify_default.html">
                                                    <img alt="" src=
                                                    "http://cdn.shopify.com/s/files/1/1195/5258/t/3/assets/mega_menu_2_image_col_2.jpg?7472155404521155336"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mega-col mega-col-3 col-sm-3">
                                        <div class=
                                        "dropdown mega-sub-link banners">
                                            <a href=
                                            "handy-theme_myshopify_default.html#">
                                            <span>Simple Post</span></a>
                                            <span class="expand"><i class=
                                            "fa fa-angle-down hidden-xs hidden-sm">
                                            </i> <i class=
                                            "fa fa-plus visible-xs visible-sm"></i></span>
                                            <ul class=
                                            "dropdown-menu dropdown-menu-sub">
                                                <li>
                                                    <a href=
                                                    "collections.htm"><img alt=
                                                    "" src=
                                                    "http://cdn.shopify.com/s/files/1/1195/5258/t/3/assets/mega_menu_2_image_col_3.jpg?7472155404521155336"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mega-col mega-col-4 col-sm-3">
                                        <div class=
                                        "dropdown mega-sub-link banners">
                                            <a href=
                                            "handy-theme_myshopify_default.html#">
                                            <span>Pagebuilder
                                            examples</span></a> <span class=
                                            "expand"><i class=
                                            "fa fa-angle-down hidden-xs hidden-sm">
                                            </i> <i class=
                                            "fa fa-plus visible-xs visible-sm"></i></span>
                                            <ul class=
                                            "dropdown-menu dropdown-menu-sub">
                                                <li>
                                                    <a href=
                                                    "collections.htm"><img alt=
                                                    "" src=
                                                    "http://cdn.shopify.com/s/files/1/1195/5258/t/3/assets/mega_menu_2_image_col_4.jpg?7472155404521155336"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=" new">
                            <a href=
                            "collections/birthday-gifts.htm"><span>Features</span></a>
                        </li>
                        <li class="">
                            <a href="pages/contact-us.htm"><span>Contact
                            us</span></a>
                        </li>
                        <li class="">
                            <a href=
                            "http://themeforest.net/item/handy-handmade-shop-shopify-theme/15515080?ref=arenatheme">
                            <span>Download Now</span></a>
                        </li>
                         <li class="">
                            <a href=
                            "http://themeforest.net/item/handy-handmade-shop-shopify-theme/15515080?ref=arenatheme">
                            <span>News Post</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!-- End Menu Mobile-->
        <div class="cart-sb">
            <div id="cart-info">
                <div class="cart-content" id="cart-content">
                    <div class="loading"></div>
                </div>
            </div>
        </div>
        <div id="page-body">
            <!-- Begin Header -->
            <header class="header-content" data-stick="true">
                <div class="header-container">
                    <div class="top-bar hidden-xs">
                        <div class="container">
                            <div class="row">
                                <div class=
                                "top-bar-left col-md-4 col-sm-4 col-xs-12">
                                    <ul class="top-bar-list">
                                        <li class="customer-account">
                                            <a href="login.htm" title=
                                            "Login"><span>Login</span></a>
                                        </li>
                                        <li class="customer-wishlist">
                                            <a href="login.htm" title=
                                            "Wishlist"><span>Wishlist</span></a>
                                        </li>
                                        <li class="customer-checkout">
                                            <a href=
                                            "https://handy-theme.myshopify.com/checkout">
                                            <span>Checkout</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class=
                                "top-bar-info col-md-4 col-sm-4 col-xs-12">
                                    <i class="fa fa-map-marker"></i> 102580
                                    Santa Monica BLVD Los Angeles
                                </div>
                                <div class=
                                "top-bar-right col-md-4 col-sm-4 col-xs-12">
                                    <ul class="list-inline">
                                        <li class=
                                        "currency dropdown-parent uppercase currency-block">
                                        <a class=
                                        "currency_wrapper dropdown-toggle"
                                        data-toggle="dropdown" href=
                                        "javascript:;"><span class=
                                        "currency_code">USD</span>
                                            <i class="fa fa-angle-down"></i></a>
                                            <ul class=
                                            "currencies dropdown-menu">
                                                <li class=
                                                "currency-USD active">
                                                    <a href=
                                                    "javascript:;"><i class=
                                                    "flag-usd"></i><span>USD</span></a>
                                                    <input type="hidden" value=
                                                    "USD">
                                                </li>
                                                <li class="currency-EUR">
                                                    <a href=
                                                    "javascript:;"><i class=
                                                    "flag-eur"></i><span>EUR</span></a>
                                                    <input type="hidden" value=
                                                    "EUR">
                                                </li>
                                                <li class="currency-GBP">
                                                    <a href=
                                                    "javascript:;"><i class=
                                                    "flag-gbp"></i><span>GBP</span></a>
                                                    <input type="hidden" value=
                                                    "GBP">
                                                </li>
                                            </ul><select class=
                                            "currencies_src hide" name=
                                            "currencies">
                                                <option selected="selected"
                                                value="USD">
                                                    USD
                                                </option>
                                                <option value="EUR">
                                                    EUR
                                                </option>
                                                <option value="GBP">
                                                    GBP
                                                </option>
                                            </select>
                                        </li>
                                        <li class="customer-login">
                                            <a href="account/register.htm"
                                            title="Register"><i class=
                                            "fa fa-pencil"></i>
                                            <span>Register</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-main">
                        <div class="container">
                            <div class="visible-xs">
                                <div class="logo-mobile">
                                    <a class="logo-site" href=
                                    "handy-theme_myshopify_default.html" title=
                                    "Handy"><img alt="Handy" class=
                                    "mobile-logo" height="28" src=
                                    "http://cdn.shopify.com/s/files/1/1195/5258/t/3/assets/logo@2x.png?7472155404521155336"
                                    width="209"></a>
                                </div>
                                <div class="header-mobile">
                                    <div class="navbar navbar-responsive-menu">
                                        <div class="btn-navbar responsive-menu"
                                        data-toggle="offcanvas">
                                            <span class="bar"></span>
                                            <span class="bar"></span>
                                            <span class="bar"></span>
                                        </div>
                                    </div>
                                    <div class=
                                    "header-mobile-icon customer-account">
                                        <a href=
                                        "https://handy-theme.myshopify.com/account"
                                        title="My Account"></a>
                                    </div>
                                    <div class=
                                    "header-mobile-icon customer-wishlist">
                                        <a href="login.htm" title=
                                        "Wishlist"></a>
                                    </div>
                                    <div class=
                                    "currency dropdown-parent uppercase currency-block">
                                    <a class="currency_wrapper dropdown-toggle"
                                        data-toggle="dropdown" href=
                                        "javascript:;"><span class=
                                        "currency_code">USD</span> <i class=
                                        "fa fa-angle-down"></i></a>
                                        <ul class="currencies dropdown-menu">
                                            <li class="currency-USD active">
                                                <a href=
                                                "javascript:;"><i class="flag-usd">
                                                </i><span>USD</span></a>
                                                <input type="hidden" value=
                                                "USD">
                                            </li>
                                            <li class="currency-EUR">
                                                <a href=
                                                "javascript:;"><i class="flag-eur">
                                                </i><span>EUR</span></a>
                                                <input type="hidden" value=
                                                "EUR">
                                            </li>
                                            <li class="currency-GBP">
                                                <a href=
                                                "javascript:;"><i class="flag-gbp">
                                                </i><span>GBP</span></a>
                                                <input type="hidden" value=
                                                "GBP">
                                            </li>
                                        </ul><select class=
                                        "currencies_src hide" name=
                                        "currencies">
                                            <option selected="selected" value=
                                            "USD">
                                                USD
                                            </option>
                                            <option value="EUR">
                                                EUR
                                            </option>
                                            <option value="GBP">
                                                GBP
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class=
                                "header-logo col-md-3 col-sm-12 hidden-xs">
                                    <a class="logo-site" href=
                                    "handy-theme_myshopify_default.html" title=
                                    "Handy"><img alt="Handy" class="logo" src=
                                    "http://cdn.shopify.com/s/files/1/1195/5258/t/3/assets/logo.png?7472155404521155336"></a>
                                </div>
                                <div class=
                                "header-other col-lg-9 col-md-9 col-sm-12">
                                    <div class="searchbox">
                                        <form action="search.htm" class=
                                        "navbar-form search" id="search"
                                        method="get" name="search">
                                            <input name="type" type="hidden"
                                            value="product">
                                            <input autocomplete="off" class=
                                            "form-control" id=
                                            "bc-product-search" name="q"
                                            placeholder="Search" type="text">
                                            <button class="search-icon" type=
                                            "submit"></button>
                                        </form>
                                        <div class="hidden-xs" id=
                                        "result-ajax-search">
                                            <ul class="search-results"></ul>
                                        </div>
                                    </div>
                                    <div class="header-text-widget hidden-xs">
                                        <div class="widget-description">
                                            <i class="fa fa-phone"></i>
                                            <span class="text-1">Online
                                            Consultation</span> <span class=
                                            "text-2">Call: + 0123 456
                                            789</span>
                                        </div>
                                    </div>
                                    <div class="top-cart-holder">
                                        <div class="cart-target">
                                            <a class="basket cart-toggle" href=
                                            "javascript:void(0)" title=
                                            "cart"><span class=
                                            "number"><span class=
                                            "n-item">0</span> <span class=
                                            "item">item(s)</span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="horizontal-menu-wrapper">
                            <div class="container">
                                <div class="horizontal-menu dropdown-fix">
                                    <div class="sidemenu-holder">
                                        <div class="navigation">
                                            <nav class="navbar">
                                                <div class=
                                                "collapse navbar-collapse">
                                                    <ul class="main-nav">
                                                       <?php
                                                          do_shortcode('[main_menu]');
                                                          ?>
                                                        <li class="dropdown">
                                                            <a href=""><span>News post</span></a>
                                                            <div class="dropdown-content">
                                                                <?php
                                                                    $posts_per_page = 4;
                                                                    $args = array(
                                                                      'category_name' => 'post',                                      
                                                                      'posts_per_page' => $posts_per_page,
                                                                      'orderby' => date,
                                                                      'order' => DESC
                                                                    
                                                                    );
                                                                    query_posts($args);

                                                                 if(have_posts()) : 
                                                                  while (have_posts()) :
                                                                      the_post();
                                                                      
                                                                      
                                                                   ?>
                                                                <div>
                                                                   <div class="post-content"> 
                                                                        <span>
                                                                            <?php the_title();?>
                                                                        </span>
                                                                        <a href="<?php the_permalink();?>">
                                                                        <?php the_post_thumbnail('img-newspost');?></a>
                                                                     </div>
                                                                </div>
                                                            <?php endwhile; endif; wp_reset_query();?>
                                                
                                                          </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header><!-- End Header -->
            <div id="body-content"></div>
        </div>
    </div>
</body>
</html>