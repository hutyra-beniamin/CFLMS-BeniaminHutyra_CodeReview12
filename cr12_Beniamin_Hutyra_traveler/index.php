<?php get_header(); ?>
<div class="container-fluid m-4">
<h1>Welcome to our Blog</h1>
</div>
    
<div class="container-fluid">
    
<div class="row">
        
        <div class="col-lg-9 col-md-12 col-sm-12">
        <div class="row">  
        <?php if(have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
    <div class="col col-lg-6">
        <div class="card">
                
            <div class="card-body">
                <div class="container text-center">
                    <?php if(has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                    <?php endif; ?>
                </div>
                    <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <p class="card-text"><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                    <br>
                    <p><?php the_time('F j, Y g:i a'); ?></p><!--retrieves date blog entry was created-->
                    <p><em> <?php the_author(); ?></em></p><!--retrieves author of blog entry-->
                    
            </div>
        </div>
    </div>    
        


        

        <?php endwhile; else: ?>
            <div class="container-fluid">  
               <h1>Sorry, no posts found</h1>
            </div>
               <?php endif; ?>

   </div>
   </div>

    <div id="sidebar" class="col-lg-3 col-md-3 col-sm-12">
        <?php
        if(is_active_sidebar('sidebar')):
        dynamic_sidebar('sidebar');
        endif;  
        ?>
</div>
</div>
</div>
 

    <?php get_footer(); ?>