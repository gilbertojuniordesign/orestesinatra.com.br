<?php /* Template Name: Cursos */ ?>
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
  
    <div class="col-sm-3 animated fadeInLeft">
       <nav>
       <ul class="nav nav-pills nav-stacked">
        <li><a href="#Piano-popular">Piano popular</a></li>
        <li><a href="#Piano-erudito">Piano erudito</a></li>  
        <li><a href="#Orgao">Órgão</a></li>                 
        <li><a href="#Teclado">Teclado</a></li>
        <li><a href="#Acordeon">Acordeão</a></li>
        <li><a href="#Guitarra">Guitarra</a></li>     
        <li><a href="#Violao">Violão</a></li>
        <li><a href="#Viola-caipira">Viola caipira</a></li>                 
        <li><a href="#Baixo">Baixo</a></li>
        <li><a href="#Cavaco">Cavaco</a></li>
        <li><a href="#Bateria">Bateria</a></li>                             
        <li><a href="#Percussao">Percussão</a></li>          
        <li><a href="#Violino">Violino</a></li>      
        <li><a href="#Violoncelo">Violoncelo</a></li>        
        <li><a href="#Viola">Viola de arco</a></li>
        <li><a href="#Canto">Canto</a></li>                
        <li><a href="#Saxofone">Saxofone</a></li>
        <li><a href="#Flauta">Flauta transversal</a></li>
        <li><a href="#Trombone">Trombone</a></li>
        <li><a href="#Trompete">Trompete</a></li>          
        <li><a href="#Gaita">Gaita</a></li>                                                          
      </ul>
      </nav>
    </div> 
    
     
	<div class="col-sm-6">

	<span id="Piano-popular" class="ancora"></span> 
        <section>                    
		<h2>Piano popular<br> <small class="curso-tipo curso-tecnico">Técnico</small></h2>    
			<?php if(get_field('piano-popular')){ //if the field is not empty
                echo '
						<p>' . get_field('piano-popular') . '</p>'; //display it
            } ?>          
        </section>
    	<hr>
        
	<span id="Piano-erudito" class="ancora"></span> 
        <section>                    
		<h2>Piano erudito<br> <small class="curso-tipo curso-tecnico">Técnico</small></h2>    
			<?php if(get_field('piano-erudito')){ //if the field is not empty
                echo '
						<p>' . get_field('piano-erudito') . '</p>'; //display it
            } ?>          
        </section>
    	<hr>        
        
	<span id="Orgao" class="ancora"></span> 
        <section>                    
		<h2>Órgão <br><small class="curso-tipo curso-livre">Livre</small> <small class="curso-tipo curso-tecnico">Técnico</small></h2>    
			<?php if(get_field('orgao')){ //if the field is not empty
                echo '
						<p>' . get_field('orgao') . '</p>'; //display it
            } ?>           
        </section>
    	<hr>
        
	<span id="Teclado" class="ancora"></span> 
        <section>                    
		<h2>Teclado <br><small class="curso-tipo curso-livre">Livre</small> <small class="curso-tipo curso-tecnico">Técnico</small></h2>    
			<?php if(get_field('teclado')){ //if the field is not empty
                echo '
						<p>' . get_field('teclado') . '</p>'; //display it
            } ?>        
        </section>
    	<hr>      

	<span id="Acordeon" class="ancora"></span> 
        <section>                    
		<h2>Acordeão <br><small class="curso-tipo curso-livre">Livre</small> <small class="curso-tipo curso-tecnico">Técnico</small></h2>    
			<?php if(get_field('acordeon')){ //if the field is not empty
                echo '
						<p>' . get_field('acordeon') . '</p>'; //display it
            } ?>            
        </section>
    	<hr> 

	<span id="Guitarra" class="ancora"></span> 
        <section>                    
		<h2>Guitarra <br><small class="curso-tipo curso-livre">Livre</small> <small class="curso-tipo curso-tecnico">Técnico</small></h2>    
			<?php if(get_field('guitarra')){ //if the field is not empty
                echo '
						<p>' . get_field('guitarra') . '</p>'; //display it
            } ?>        
        </section>
    	<hr>          

	<span id="Violao" class="ancora"></span> 
        <section>                    
		<h2>Violão <br><small class="curso-tipo curso-livre">Livre</small> <small class="curso-tipo curso-tecnico">Técnico</small></h2>    
			<?php if(get_field('violao1')){ //if the field is not empty
                echo '
						<p>' . get_field('violao1') . '</p>'; //display it
            } ?>        
        </section>
    	<hr>
        
	<span id="Viola-caipira" class="ancora"></span> 
        <section>                    
		<h2>Viola caipira<br> <small class="curso-tipo curso-tecnico">Técnico</small></h2>    
			<?php if(get_field('viola-caipira')){ //if the field is not empty
                echo '
						<p>' . get_field('viola-caipira') . '</p>'; //display it
            } ?>      
        </section>
    	<hr>   

	<span id="Baixo" class="ancora"></span> 
        <section>                    
		<h2>Baixo <br> <small class="curso-tipo curso-tecnico">Técnico</small></h2>    
			<?php if(get_field('baixo')){ //if the field is not empty
                echo '
						<p>' . get_field('baixo') . '</p>'; //display it
            } ?>            
        </section>
    	<hr> 

	<span id="Cavaco" class="ancora"></span> 
        <section>                    
		<h2>Cavaco <br><small class="curso-tipo curso-livre">Livre</small> <small class="curso-tipo curso-tecnico">Técnico</small></h2>    
			<?php if(get_field('cavaco')){ //if the field is not empty
                echo '
						<p>' . get_field('cavaco') . '</p>'; //display it
            } ?>        
        </section>
    	<hr>                 
        
	<span id="Bateria" class="ancora"></span> 
        <section>                    
		<h2>Bateria <br><small class="curso-tipo curso-livre">Livre</small> <small class="curso-tipo curso-tecnico">Técnico</small></h2>    
			<?php if(get_field('bateria')){ //if the field is not empty
                echo '
						<p>' . get_field('bateria') . '</p>'; //display it
            } ?>            
        </section>
    	<hr>   

	<span id="Percussao" class="ancora"></span> 
        <section>                    
		<h2>Percussão <br> <small class="curso-tipo curso-tecnico">Técnico</small></h2>    
			<?php if(get_field('percussao')){ //if the field is not empty
                echo '
						<p>' . get_field('percussao') . '</p>'; //display it
            } ?>            
        </section>
    	<hr>  
                  
	<span id="Violino" class="ancora"></span> 
        <section>                    
		<h2>Violino <br> <small class="curso-tipo curso-tecnico">Técnico</small></h2>    
			<?php if(get_field('violino')){ //if the field is not empty
                echo '
						<p>' . get_field('violino') . '</p>'; //display it
            } ?>      
        </section>
    	<hr>
        
	<span id="Violoncelo" class="ancora"></span> 
        <section>                    
		<h2>Violoncelo <br> <small class="curso-tipo curso-tecnico">Técnico</small></h2>    
			<?php if(get_field('violoncelo')){ //if the field is not empty
                echo '
						<p>' . get_field('violoncelo') . '</p>'; //display it
            } ?>      
        </section>
    	<hr>        
        
	<span id="Viola" class="ancora"></span> 
        <section>                    
		<h2>Viola de arco<br> <small class="curso-tipo curso-tecnico">Técnico</small></h2>    
			<?php if(get_field('viola')){ //if the field is not empty
                echo '
						<p>' . get_field('viola') . '</p>'; //display it
            } ?>      
        </section>
    	<hr>            

	<span id="Canto" class="ancora"></span>    
        <section>             
		<h2>Canto <br><small class="curso-tipo curso-livre">Livre</small> <small class="curso-tipo curso-tecnico">Técnico</small></h2>    
			<?php if(get_field('canto')){ //if the field is not empty
                echo '
						<p>' . get_field('canto') . '</p>'; //display it
            } ?>           
        </section>
    	<hr>
                
	<span id="Saxofone" class="ancora"></span> 
        <section>                    
		<h2>Saxofone <br> <small class="curso-tipo curso-tecnico">Técnico</small></h2>    
			<?php if(get_field('saxofone')){ //if the field is not empty
                echo '
						<p>' . get_field('saxofone') . '</p>'; //display it
            } ?>        
        </section>
    	<hr>
        
	<span id="Flauta" class="ancora"></span> 
        <section>                    
		<h2>Flauta transversal<br> <small class="curso-tipo curso-tecnico">Técnico</small></h2>    
			<?php if(get_field('flauta')){ //if the field is not empty
                echo '
						<p>' . get_field('flauta') . '</p>'; //display it
            } ?>          
        </section>
    	<hr>
        
	<span id="Trombone" class="ancora"></span> 
        <section>                    
		<h2>Trombone<br> <small class="curso-tipo curso-tecnico">Técnico</small></h2>    
			<?php if(get_field('trombone')){ //if the field is not empty
                echo '
						<p>' . get_field('trombone') . '</p>'; //display it
            } ?>          
        </section>
    	<hr>  
        
	<span id="Trompete" class="ancora"></span> 
        <section>                    
		<h2>Trompete<br> <small class="curso-tipo curso-tecnico">Técnico</small></h2>    
			<?php if(get_field('trompete')){ //if the field is not empty
                echo '
						<p>' . get_field('trompete') . '</p>'; //display it
            } ?>          
        </section>
    	<hr>                                                                         

	<span id="Gaita" class="ancora"></span> 
        <section>                    
		<h2>Gaita<br> <small class="curso-tipo curso-tecnico">Técnico</small></h2>    
			<?php if(get_field('gaita')){ //if the field is not empty
                echo '
						<p>' . get_field('gaita') . '</p>'; //display it
            } ?>          
        </section>
    	<hr>     
        
	</div>        
    
	</div>
    
    <div class="col-sm-3"></div>   
        
  </article>  
  
</div>

</main>
<?php get_footer(); ?>