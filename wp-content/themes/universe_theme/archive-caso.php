<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

    <div class="container" style="background-color: white;">
        <div class="row">
            <div class="col-lg-12">
                <?php if ( have_posts() ) : ?>
                    <table id="casos">
                    <tr>
                        <th>Fecha</th>
                        <th>Nombre del Caso</th>
                        <th>Código del Caso</th>
                    </tr>
                    <?php
                    // Start the Loop.
                    while ( have_posts() ) : the_post();

                    //mandar a traer las cosas
                        $post_id = get_the_ID();
                        $post_permalink = get_the_permalink($post_id); ?>

                        <tr>
                            <td><?php echo the_field( 'Fecha' ); ?></td>
                            <td><a href="<?php echo $post_permalink?>" target="_blank"> <?php echo the_title(); ?> </a></td>
                            <td><?php echo the_field( 'Codigo' ); ?></td>
                        </tr>




                   <?php endwhile;

                endif;
                ?>
                    </table>
            </div>
        </div>
    </div>


<?php get_footer(); ?>