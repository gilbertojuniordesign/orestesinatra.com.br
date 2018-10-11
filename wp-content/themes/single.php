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
<span id="destaques" class="ancora"></span> 
<div class="container container-post">
                      
		<?php while ( have_posts() ) : the_post(); ?>

          
          <div class="row">   
          
                   
                <div class="col-sm-12">
                
                <article class="post"> 
                
                    <header>     	
                        <h1><?php the_title(); ?></h1>
                        <h3 class="data"><time><?php the_date(); ?></time></h3>
                    </header>                      	

					<?php the_content(); ?>            
                 
                </article>
                
                <h3>Compartilhe</h3>
                
                <div class="share"><?php echo do_shortcode('[supsystic-social-sharing id="1"]') ?></div>   
                        
                </div> 
                
  		</div>     
          
		<?php endwhile; // end of the loop. ?>
        
        <aside> 
            <h3>Outros eventos</h3>                                      
        	<?php include TEMPLATEPATH . '/includes/eventos-aside.php';?>                 
        </aside>        

</div>

</main>
<?php get_footer(); ?>