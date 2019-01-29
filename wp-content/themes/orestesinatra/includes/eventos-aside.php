<div class="row">  
  <h3>Outros eventos</h3>

  <?php
  $lastposts = get_posts( array(
      'posts_per_page' => 4
  ) );
     
  if ( $lastposts ) {
      foreach ( $lastposts as $post ) :
          setup_postdata( $post ); ?>
                <a href="<?php the_permalink(); ?>">
                  <div class="col-sm-12 col-md-6 eventos passados"> 
                    <header>      
                        <h3><?php the_title(); ?></h3>
                        <p class="data text-center"><span class="glyphicon glyphicon-ok-circle"></span>Aconteceu</p> 
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
      <?php
      endforeach; 
      wp_reset_postdata();
  }
?>
