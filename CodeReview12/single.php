<?php get_header(); ?>
   
<div class="container">

    

       <?php if(have_posts()) : ?> <!--  If there are posts available  -->

       <?php while(have_posts()) : the_post(); ?> <!-- if there are posts, iterate the posts in the loop-->
       <div class="container-fluid m-3 text-center">
        <?php if(has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('large'); ?>
        <?php endif; ?>
        </div>
        <h1><?php the_title(); ?> </h1>   <!--retrieves blog title-->

       <p><?php the_time('F j, Y g:i a'); ?></p><!--retrieves date blog entry was created-->

       <p><em> <?php the_author(); ?></em></p><!--retrieves author of blog entry-->
       
       <p><?php the_content(); ?></p><!--retrieves content-->

       <?php endwhile; ?><!--end the while loop-->

       <?php else :?> <!-- if no posts are found then: -->

       <p>No posts found</p>
       <?php endif; ?> <!-- end if -->
   </div>

 <?php get_footer(); ?>