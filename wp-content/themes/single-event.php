<?php /* Template Name: Página do evento */ ?>
<?php get_header(); ?>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">

<?php include TEMPLATEPATH . '/includes/navbar-top.php';?>

<?php 
   if ( has_post_thumbnail() ) {
$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
        echo '<div class="fill fill-page" style="background-image:url('.$feat_image_url.')"></div>';
   }
?>

<main>

<div class="container container-post">
                      
	<?php while ( have_posts() ) : the_post(); ?>
       
	<div class="row">         
        <div class="col-sm-12">    
        	<article class="post"> 
                <header>     	
                    <h1><?php the_title(); ?></h1>
                </header>                      	            
                	<?php the_content(); ?> 
			</article>                 
        </div>      
	</div>  
</div>                         

<div class="container container-post">
	<div class="row">         
        <div class="col-sm-12">    
                    <div class="evento-info">
					<h3>Onde e quando</h3>                                            
                        <time>
                        <strong><span class="glyphicon glyphicon-calendar"></span> <span class="UPPER"><?php eo_the_start('d \d\e F \à\s G:i\h');?></span></strong><br>  
                        </time> 
                           
                        <address>
                        <strong><span class="glyphicon glyphicon-map-marker"></span> <?php eo_venue_name(); ?></strong><br>
						<?php $address = eo_get_venue_address(eo_get_venue()); echo $address['address'] . "<br>" . $address['city'] . ", " . $address['state'] . ' ' . $address['postcode']; ?>                
						</address>                                                                     
        
 						<?php echo eo_get_venue_map( eo_get_venue() ); ?>
                                                                 
                    </div>
                 
                
                <h4>Compartilhe</h4>
                
                <div class="share"><?php echo do_shortcode('[supsystic-social-sharing id="1"]') ?></div>  
		</div>
	</div>           
</div>                                                        
            
		<?php endwhile; // end of the loop. ?>

 

</main>
<?php get_footer(); ?>