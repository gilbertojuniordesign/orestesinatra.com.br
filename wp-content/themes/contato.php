<?php /* Template Name: Contato */ ?>

<?php get_header(); ?>

<body id="contato" data-spy="scroll" data-target="#myScrollspy" data-offset="20">

<?php include TEMPLATEPATH . '/includes/navbar-top.php';?>

<?php 
   if ( has_post_thumbnail() ) {
$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
        echo '<div class="fill fill-page" style="background-image:url('.$feat_image_url.')"></div>';
   }
?>

<main>  
<div class="container">

  <article>
	<div class="row">        
  
    <div class="col-sm-3"></div> 
    
     
	<div class="col-sm-6">
<?php while ( have_posts() ) : the_post(); ?>
    
    	<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>  
<?php endwhile; // end of the loop. ?> 

    <hr> 
	</div>        
    
	</div>
    
    <div class="col-sm-3"></div>   
        
  </article>  
  
</div>

<h2>Localização</h2>
<span id="mapa" class="ancora"></span> 
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.1210704655937!2d-46.44625908502345!3d-23.49214828471734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce616357cdeb6f%3A0x799b0092d6e2c054!2sR.+Beraldo+Marcondes%2C+58+-+S%C3%A3o+Miguel+Paulista%2C+S%C3%A3o+Paulo+-+SP%2C+08010-070!5e0!3m2!1spt-BR!2sbr!4v1462377494518" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

</main>
<?php get_footer(); ?>