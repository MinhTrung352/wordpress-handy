<?php get_header(); ?>
  <div class="background-single">
    <?php 
      if (have_posts()) : the_post();
        $category = get_the_category();
        switch ($category[0]->slug) {
          case 'product':
            include 'product.php';
            break;
          
          case 'blog':
            include 'blog.php';
            break;
         
          default:
            # code...
            break;
        }
        
      endif;
    ?>
  </div>
<?php get_footer(); ?>