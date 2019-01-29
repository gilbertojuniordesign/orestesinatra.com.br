<?php get_header(); ?>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">

<?php include TEMPLATEPATH . '/includes/navbar-top.php';?>

<?php 
   if ( has_post_thumbnail() ) {
$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
        echo '<div class="fill fill-page" style="background-image:url('.$feat_image_url.')"><div class="filtro"></div></div>';
   }
?>

<main>
<span id="destaques" class="ancora"></span> 
  <div class="container-fluid">
                        
		<?php while ( have_posts() ) : the_post(); ?>
            
    <div class="row">           
      <div class="col-sm-12">
        <article class="post"> 
          <header>     	
              <h1><?php the_title(); ?></h1>
              <p class="data text-center"><time><?php the_date(); ?></time></p>
          </header>                      	
          <div class="container">
            <div class="row">
              <div class="col-sm-12">                      
                <?php the_content(); ?> 
              </div>
            </div>
          </div>
        </article>

        <h3>Compartilhe</h3>
        <div class="share"><?php echo do_shortcode('[supsystic-social-sharing id="1"]') ?></div>  
        
        <?php endwhile; // end of the loop. ?>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <aside> 
                <?php include TEMPLATEPATH . '/includes/eventos-aside.php';?>                 
              </aside>
            </div>
          </div>
        </div>
      </div>
    </div>
                  
  </div>     
</main>
<?php get_footer(); ?>