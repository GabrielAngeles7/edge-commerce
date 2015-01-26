<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<div class="l-sidebar">
          <h4 class="l-sidebar-title">main contents</h4>
          
          <div class="l-sidebar-content">


            <ul class="list-bulleted">
 			<?php $post_type='docu' ; 
 			$taxonomies= get_object_taxonomies( (object) array( 'post_type'=> $post_type ) );
 			$cntr = 0; foreach( $taxonomies as $taxonomy ) : $terms = get_terms( $taxonomy ); 
 			foreach( $terms as $term ) : ?>

              <li>
                <div class="panel-group" id="accordion">
                      <div class="panel panel-primary">
                        <div class="panel-heading">
                          <h4 class="panel-title title">
                            <a data-toggle="collapse" class="" data-parent="#accordion" href="#sidebar-<?php echo $term->slug ?>" >
                            <?php echo $term->name ?>
                            </a>
                          </h4>
                        </div>
                        <div id="sidebar-<?php echo $term->slug ?>" class="panel-collapse collapse ">
                          <div class="panel-body">
                            <ul class="list-circle">

                    <?php $count=0 ;$query = new WP_Query( array("taxonomy" => $taxonomy, "term" => $term->slug )); 
                    if( $query->have_posts() ): while( $query->have_posts() ) : $query->the_post(); ?>

                              <li><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></li>
				     <?php $count++ ; endwhile; wp_reset_query(); endif; ?>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
              </li>

				<?php $cntr++; endforeach; endforeach; ?>
     
            </ul>

          </div>