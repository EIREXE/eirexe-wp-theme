<?php
/**
 * Template Name: Left Sidebar Template
 * Original from BootstrapWP
 * @author Gregor Hartmaier
 * @package WordPress
 * @subpackage Podemos Wordpress Theme
 */
?>
<?php get_header(); ?>
<div class="container main">
     <div class="row headimage">
        <?php if(function_exists('chi_display_header')) { chi_display_header(); } ?>
        
           <?php
            if (function_exists('bootstrapwp_breadcrumbs')) { 
                bootstrapwp_breadcrumbs();               
            }
            ?>
         </div><!--/.col -->
     </div><!--/.row -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
     <div class="row main-content">
              <div class="col-lg-3 col-md-3 col-sm-3 col-3 sidebar-wrapper">           
                <?php get_sidebar('page'); ?>
              </div><!--/.col -->
                <div class="col-lg-9 col-md-9 col-sm-9 col-9">     
                    <div class="content main">
                    <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
                        <article class="post" id="post-<?php the_ID(); ?>">
                            <?php echo the_content(); ?>
                        </article>
                    </div> <!-- /.content -->                  
                </div> <!-- /.col -->
          <?php endwhile;
                  endif; ?>
     </div> <!--/.row main-content -->
</div><!-- container -->
<?php get_footer('left-sidebar'); ?>