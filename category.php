<?php
  /*
    Template Name: blogs
  */
?>
<?php get_header();?> 


        <div class="container">

          <!-- Begin Breadcrumb-->

          
          <div id="breadcrumb" class="breadcrumb-holder">
  
    <div class="col-md-6 col-sm-6 col-xs-12">
        
            <div class="page-title">News</div>
        
    </div>
  
    <div class="col-md-6 col-sm-6 col-xs-12">
        <ul class="breadcrumb">

            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                <a itemprop="url" href="../handy-theme_myshopify_default.html">
                    <span itemprop="title" class="hide">Handy</span>Home
                </a>
            </li>

            

                <li class="active">News</li>

            

        </ul>
    </div>
  
</div>
          

          <!-- End Breadcrumb-->


          

            <!-- Begin Left Column -->

            

            <!-- End Left Column-->


            <!-- Begin Main Content -->

            <div id="main-content" >

              <!-- Begin Slideshow -->

              

              <!-- End Slideshow -->

              <div class="main-content">
                
                <div id="col-main" class="page-blog">
  <div class="row">

    

    

    
    <div class="col-md-9 col-sm-8 col-xs-12">
      <div class="blog-grid">
     
          <?php
            $posts_per_page = 2;
            $args = array(
              'category_name' => 'blog',                                         
              'posts_per_page' => $posts_per_page,
              'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1)
            );
            query_posts($args);

         if(have_posts()) : 
          while (have_posts()) :
              the_post();
              
              
           ?>

         <article class="post">
          
          <div class="post-image">
            
            <a href="<?php the_permalink();?>">
              <?php the_post_thumbnail('img-feature');?>
            </a>
            
          </div>

          <div class="post-content">
            <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>

            <div class="post-meta">
              <div class="author">By&nbsp;<span>Arena Themes</span></div>
              
              <div class="tags">Tags&nbsp;
                
                <a href="news/tagged/love.htm">Love<span>,</span></a>
                
                <a href="news/tagged/success.htm">Success</a>
                
              </div>
              
              <div class="date">Posted&nbsp;<span><?php the_time('l, F j, Y');?></span></div>
            </div>

            <div class="post-des"><?php the_content();?></div>

            <div class="buttons-wrapper">
              <a class="link-to-post" href="news/130490567-post-with-images/130490567-post-with-images.htm" title="Read more"><i class="fa fa-chevron-right"></i></a>
              <div class="post-comment">
                <i class="fa fa-comments"></i><span>(2)</span>
              </div>
            </div>
          </div>

        </article>
 <?php  
 endwhile;
 endif;
        ?>
      </div>
<div>
    <div class="wrap-paging">
      <?php 
          page_nav();
      ?>
    </div>

  <?php
    wp_reset_query();
  ?>                                 
</div>
      




      

    </div>
    

    
    <div id="sidebar-blog" class="col-md-3 col-sm-4 col-xs-12 left-column-container">
  
  
  <div class="sb-search">
    <div class="sb-widget">
      
      
      <h4 class="sb-title">Site Search</h4>
      
      
      <div class="search-blog">
        <form action="../search.htm" method="get">

          <input type="hidden" name="type" value="article">
          <input type="text" name="q" class="form-control" placeholder="Search..." autocomplete="off">
          <button type="submit" class="btn btn-default">Search</button>

        </form>
      </div>
      
    </div>
  </div>
  

  
  <div class="sb-blog-recent">
    <div class="sb-widget">

      
      <h4 class="sb-title">Recent Posts</h4>
      

      <div class="recent-post-list">
        

        

        <div class="recent-post-item">
          <div class="recent-media-thumb">
            
            
            <a href="news/130490567-post-with-images/130490567-post-with-images.htm"><img src="https://cdn.shopify.com/s/files/1/1195/5258/articles/news-1_1024x1024.jpg?v=1457324830" alt="Post with images" /></a>
            
          </div>

          <div class="recent-media-content">
            <a href="news/130490567-post-with-images/130490567-post-with-images.htm">Post with images</a>
            <span class="date">Mar 06, 2016</span>
            <div class="comment"><i class="fa fa-comments-o"></i><span>(2)</span></div>
          </div>
        </div>

        

        

        <div class="recent-post-item">
          <div class="recent-media-thumb">
            
            
            <a href="news/130490375-simple-post/130490375-simple-post.htm"><img src="https://cdn.shopify.com/s/files/1/1195/5258/articles/news-2_1024x1024.jpg?v=1457324788" alt="Simple Post" /></a>
            
          </div>

          <div class="recent-media-content">
            <a href="news/130490375-simple-post/130490375-simple-post.htm">Simple Post</a>
            <span class="date">Mar 06, 2016</span>
            <div class="comment"><i class="fa fa-comments-o"></i><span>(0)</span></div>
          </div>
        </div>

        

        

        <div class="recent-post-item">
          <div class="recent-media-thumb">
            
            
            <a href="news/130490311-markup-examples/130490311-markup-examples.htm"><img src="https://cdn.shopify.com/s/files/1/1195/5258/articles/news-3_1024x1024.jpg?v=1457324717" alt="Markup Examples" /></a>
            
          </div>

          <div class="recent-media-content">
            <a href="news/130490311-markup-examples/130490311-markup-examples.htm">Markup Examples</a>
            <span class="date">Mar 06, 2016</span>
            <div class="comment"><i class="fa fa-comments-o"></i><span>(0)</span></div>
          </div>
        </div>

        
      </div>

    </div>
  </div>
  
   
  
  <div class="sb-blog-tag">
    <div class="sb-widget">

      
      <h4 class="sb-title">Tags Cloud</h4>
      

      <ul class="list-inline">
        <li><a href="http://handy-theme.myshopify.com/blogs/news/tagged/all">All</a></li>
        
        
        <li><a title="Narrow search to articles also having tag Fun" href="news/tagged/fun.htm">Fun</a></li>
        
        
        
        <li><a title="Narrow search to articles also having tag Love" href="news/tagged/love.htm">Love</a></li>
        
        
        
        <li><a title="Narrow search to articles also having tag Must Read" href="news/tagged/must-read.htm">Must Read</a></li>
        
        
        
        <li><a title="Narrow search to articles also having tag Pictures" href="news/tagged/pictures.htm">Pictures</a></li>
        
        
        
        <li><a title="Narrow search to articles also having tag Success" href="news/tagged/success.htm">Success</a></li>
        
        
      </ul>

    </div>
  </div>
  

</div>
    

  </div>
</div>
                          
              </div>

            </div>

            <!-- End Main Content -->

            

        </div>
      </div>
      
      
      <!-- Begin Bottom -->

      

      <!-- End Bottom -->
      
      
      <!-- Begin Partner -->
      
      
     
      
       <?php get_footer(); ?>
