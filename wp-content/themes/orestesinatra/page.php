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
<?php while ( have_posts() ) : the_post(); ?>
    <article>
    <div class="row">
        <div class="col-sm-12">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <hr>
        </div>        

    </div>   
    </article>  
    <?php endwhile; // end of the loop. ?>    
</div>
</main>
<?php get_footer(); ?>