<?php /* Template Name: Arquivo de eventos */ ?>
<?php get_header(); ?>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">

<?php include TEMPLATEPATH . '/includes/navbar-top.php';?>

<main>  

<div class="container">
                      
 		<?php // loop para eventos
        $args = array(
            'event_start_after'=>'today',
            'showpastevents'=>true,
            'post_type'=>'event',
            'suppress_filters'=>false
    	);
        $eventloop = new WP_Query( $args );
        if ( $eventloop->have_posts() ) :
                while ( $eventloop->have_posts() ) : $eventloop->the_post();?>
                
          <div class="row">
              <div class="col-sm-12">        
                  <h1>Próximos eventos</h1>
              </div>	
          </div>	   
          
          <a href="<?php the_permalink(); ?>">    
          <div class="row">        
              <article class="col-sm-12 eventos evento-destaque"> 
              
                  <header>     	
                      <h3><?php the_title(); ?></h3>
                      <h4><time><span class="glyphicon glyphicon-calendar"></span> <?php  eo_the_start('d \d\e F \à\s G:i\h');?></time></h4>
                  </header>                      	
              
				<?php 
                   if ( has_post_thumbnail() ) {
                $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
                        echo '<div class="thumb-evento center-block" style="background-image:url('.$feat_image_url.')"></div>';
                   }
                ?>
              
                  <p class="evento-desc text-center">
                      
                      <?php the_excerpt_max_charlength(300); ?>       
                  </p>
                  
              </article>        
  		</div>        
		</a>
        
		<hr>        
            
        <?php endwhile; ?>
        <?php   wp_reset_postdata(); ?>   
        <?php else : ?>
        <?php endif; ?> 
           
    
        <div class="row">
            <div class="col-sm-12">        
          		<h1>Eventos passados</h1>
        	</div>	
        </div>
        
  <div class="row">
        
		<?php // loop para eventos passados (post padrão)
    	$args = array_merge( $wp_query->query, array(  'posts_per_page' => 4, 'post_type' => array('post')));
		
        query_posts( $args ) ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>        
        <a href="<?php the_permalink(); ?>">

              <article class="col-sm-12 col-md-6 eventos"> 
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
              </article>

		</a>

		<?php endwhile;?> 
          
<?php echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="4" pause="true" scroll="false" button_label="Mais eventos" button_loading_label="Carregando eventos..." container_type="div" transition="none"]'); ?>    
                  
        <?php else : ?>
        <p class="text-center">Nenhum evento para exibir.</p>
        <?php endif; ?>  
 	
    </div>     

</div>

</main>
<?php get_footer(); ?>