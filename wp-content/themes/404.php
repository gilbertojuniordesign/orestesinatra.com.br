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
<div class="container">


  <article>
	<div class="row">        
  
    <div class="col-sm-3"></div> 
    
     
	<div class="col-sm-6">
        <h1>Ah... 404</h1>
        <p>A página que você procura não existe mais.<br>Verifique o menu de navegação para encontrar o que precisa!</p>
    
    <hr>                                                                 
        
	</div>        
    
	</div>
    
    <div class="col-sm-3"></div>   
        
  </article>  
</div>

</main>
<?php get_footer(); ?>