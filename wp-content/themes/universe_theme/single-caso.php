<?php
/**
 * The default single template file.
 *
 * @package WordPress
 * @subpackage Core Framework
 */

get_header(); ?>

<div class="container">
        <div class="row">

            <!-- Here begin Main Content -->
            <div class="col-md-12" >
                <div class="row">
                	<?php if(have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="col-md-12">
                        <div class="blog-post-container">
                        	<div <?php post_class(); ?>>
	                        	<?php if (has_post_thumbnail()) { ?>
		                            <div class="blog-post-image">
		                                <?php the_post_thumbnail('blog-single'); ?>
		                                <div class="blog-post-meta">
		                                    <ul>
		                                        <li><i class="fa fa-calendar-o"></i><?php the_time('F j, Y'); ?></li>
		                                        <li><a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i><?php comments_number( __('No Comments', CORE_THEME_NAME), __('One Comment ', CORE_THEME_NAME), __('% Comments', CORE_THEME_NAME) ); ?></a></li>
		                                        <li><i class="fa fa-user"></i><?php the_author_posts_link(); ?></li>
		                                    </ul>
		                                </div> <!-- /.blog-post-meta -->
		                            </div> <!-- /.blog-post-image -->
		                            <?php } ?>
		                            <div class="blog-post-inner">
		                                <h3 class="blog-post-title"><?php the_title(); ?> </h3>
                                            <?php the_content(); ?>
                                            <p> Fecha de inicio: <?php echo the_field( 'Fecha' ); ?></p>
                                            <!--<p> <?php echo the_taxonomies('') ?></p>-->
                                            <p> Peticionario: <?php echo the_field('peticionario') ?></p>
                                            <div> <?php echo the_field( 'log' ); ?> </div>

                                        <?php wp_link_pages(); ?>
		                               		
			                               	<?php if(get_the_tag_list()) { ?>
				                                <div class="tag-items">
				                                    <span class="small-text"><?php _e('Tags: ', CORE_THEME_NAME ); ?></span>
				                                    <?php echo get_the_tag_list('',' ',''); ?>

				                                </div>
			                                <?php } ?>
		                            </div>
	                            </div> <!-- post-class -->
                        </div> <!-- /.blog-post-container -->
                    </div> <!-- /.col-md-12 -->
                    <?php endwhile; else : ?>
                    	<p><?php _e( 'No posts found.', CORE_THEME_NAME ); ?></p>
                    <?php endif ?>
                </div> <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                       <?php core_post_nav(); ?>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
                


        </div> <!-- /.row -->
    </div> <!-- /.container -->

<?php get_footer(); ?>