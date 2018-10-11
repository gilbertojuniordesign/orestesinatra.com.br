			<div class="row">
                            
                <?php // loop para eventos passados (post padrão)
                $args = array_merge( $wp_query->query, array(  'posts_per_page' => 4, 'post_type' => array('post')));
                
                query_posts( $args ) ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>        
                <a href="<?php the_permalink(); ?>">
        
                      <div class="col-sm-12 col-md-6 eventos"> 
                          <header>     	
                              <h3><?php the_title(); ?></h3>
                              <h4>
                                    <span class="glyphicon glyphicon-ok-circle"></span> Aconteceu
                              </h4>   
                          </header>                      	
                      
                        <?php 
                           if ( has_post_thumbnail() ) {
                        $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
                                echo '<div class="thumb-evento center-block" style="background-image:url('.$feat_image_url.')"></div>';
                           }
                        ?>
                      
                      <p class="evento-desc text-center">
                          
                          <?php the_excerpt_max_charlength(140); ?>
            
                      </p>
                      </div>
        
                </a>
        
                <?php endwhile;?> 
                  
        <?php echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="4" pause="true" scroll="false" button_label="Mais eventos" button_loading_label="Carregando eventos..." container_type="div" transition="none"]'); ?>    
                          
                <?php else : ?>
                <p class="text-center">Nenhum evento para exibir.</p>
                <?php endif; ?>  
            
            </div>  