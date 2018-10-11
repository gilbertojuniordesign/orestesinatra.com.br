<?php /* Template Name: A escola */ ?>
<?php get_header(); ?>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">

<?php include TEMPLATEPATH . '/includes/navbar-top.php';?>

<?php 
   if ( has_post_thumbnail() ) {
$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
        echo '<div class="fill fill-page" style="background-image:url('.$feat_image_url.')"><span style="display: block; position: absolute; right: 40px; bottom: 20px; font-size: 0.675em; color: #beb9ad;">Composition VII - Wassily Kandinsky</span></div>';
   }
?>

<main>  
<div class="container">

  <article>
	<div class="row">
  
    <div class="col-sm-3 animated fadeInLeft">
       <nav>
       <ul class="nav nav-pills nav-stacked">
        <li><a href="#section1">História</a></li>
        <li><a href="#section2">Corpo docente</a></li>
        <li><a href="#section3">Direção</a></li>       
        <li><a href="#section4">Estrutura</a></li>
      </ul>
      </nav>
    </div> 
    
     
	<span id="section1" class="ancora"></span>
	<div class="col-sm-6">
        <section id="historia">             
		<h2>Nossa história</h2>    
			<?php if(get_field('historia')){ //if the field is not empty
                echo '
						<p>' . get_field('historia') . '</p>'; //display it
            } ?>           
        </section>
        
    	<hr>

		 <span id="section2" class="ancora"></span>
         <section id="professores">
  		  <h2>Corpo docente</h2>
          
          
			<?php if(get_field('professor01')){ //if the field is not empty
                echo '
					 <button class="btn-collapse center-block" data-toggle="collapse" data-target="#professor01">Adaonir <span class="caret"></span></button>
					 <p id="professor01" class="collapse collapse-info">' . get_field('professor01') . '</p>'; //display it
            } ?>
			
			<?php if(get_field('professor02')){ 
                echo '
					 <button class="btn-collapse center-block" data-toggle="collapse" data-target="#professor02">Alessandro <span class="caret"></span></button>
					 <p id="professor02" class="collapse collapse-info">' . get_field('professor02') . '</p>'; //display it
            } ?> 			
			
			<?php if(get_field('professor03')){ //if the field is not empty
                echo '
					 <button class="btn-collapse center-block" data-toggle="collapse" data-target="#professor03">Bete<span class="caret"></span></button>
					 <p id="professor03" class="collapse collapse-info">' . get_field('professor03') . '</p>'; //display it
            } ?>	
			
			<?php if(get_field('professor04')){ //if the field is not empty
                echo '
					 <button class="btn-collapse center-block" data-toggle="collapse" data-target="#professor04">Carlos <span class="caret"></span></button>
					 <p id="professor04" class="collapse collapse-info">' . get_field('professor04') . '</p>'; //display it
            } ?>			
          
			<?php if(get_field('professor05')){ 
                echo '
					 <button class="btn-collapse center-block" data-toggle="collapse" data-target="#professor05">Claudia Sinatra <span class="caret"></span></button>
					 <p id="professor05" class="collapse collapse-info">' . get_field('professor05') . '</p>'; //display it
            } ?>
            
			<?php if(get_field('professor06')){ 
                echo '
					 <button class="btn-collapse center-block" data-toggle="collapse" data-target="#professor06">Damásio <span class="caret"></span></button>
					 <p id="professor06" class="collapse collapse-info">' . get_field('professor06') . '</p>'; //display it
            } ?>    
            
			<?php if(get_field('professor07')){ 
                echo '
					 <button class="btn-collapse center-block" data-toggle="collapse" data-target="#professor07">Eder Santos <span class="caret"></span></button>
					 <p id="professor07" class="collapse collapse-info">' . get_field('professor07') . '</p>'; //display it
            } ?> 
			
			<?php if(get_field('professor08')){ //if the field is not empty
                echo '
					 <button class="btn-collapse center-block" data-toggle="collapse" data-target="#professor08">Eduardo <span class="caret"></span></button>
					 <p id="professor08" class="collapse collapse-info">' . get_field('professor08') . '</p>'; //display it
            } ?>			
            
			<?php if(get_field('professor09')){ 
                echo '
					 <button class="btn-collapse center-block" data-toggle="collapse" data-target="#professor09">Elias <span class="caret"></span></button>
					 <p id="professor09" class="collapse collapse-info">' . get_field('professor09') . '</p>'; //display it
            } ?>   
             
			
			<?php if(get_field('professor10')){ 
                echo '
					 <button class="btn-collapse center-block" data-toggle="collapse" data-target="#professor10">Hélio <span class="caret"></span></button>
					 <p id="professor10" class="collapse collapse-info">' . get_field('professor10') . '</p>'; //display it
            } ?>  
			
			<?php if(get_field('professor11')){ 
                echo '
					 <button class="btn-collapse center-block" data-toggle="collapse" data-target="#professor11">João <span class="caret"></span></button>
					 <p id="professor11" class="collapse collapse-info">' . get_field('professor11') . '</p>'; //display it
            } ?>   
			
			<?php if(get_field('professor12')){ 
                echo '
					 <button class="btn-collapse center-block" data-toggle="collapse" data-target="#professor12">Jonathan<span class="caret"></span></button>
					 <p id="professor12" class="collapse collapse-info">' . get_field('professor12') . '</p>'; //display it
            } ?>  			
			
			<?php if(get_field('professor13')){ 
                echo '
					 <button class="btn-collapse center-block" data-toggle="collapse" data-target="#professor13">Rafael <span class="caret"></span></button>
					 <p id="professor13" class="collapse collapse-info">' . get_field('professor13') . '</p>'; //display it
            } ?>                    
            
			<?php if(get_field('professor14')){ 
                echo '
					 <button class="btn-collapse center-block" data-toggle="collapse" data-target="#professor14">Ricardo <span class="caret"></span></button>
					 <p id="professor14" class="collapse collapse-info">' . get_field('professor14') . '</p>'; //display it
            } ?> 
			
			<?php if(get_field('professor15')){ 
                echo '
					 <button class="btn-collapse center-block" data-toggle="collapse" data-target="#professor15">Rogério <span class="caret"></span></button>
					 <p id="professor15" class="collapse collapse-info">' . get_field('professor15') . '</p>'; //display it
            } ?>
			
			<?php if(get_field('professor16')){ 
                echo '
					 <button class="btn-collapse center-block" data-toggle="collapse" data-target="#professor16">Tom <span class="caret"></span></button>
					 <p id="professor16" class="collapse collapse-info">' . get_field('professor16') . '</p>'; //display it
            } ?>			
					
             

                                                                                                       
        </section>
        
        <hr>

		<span id="section3" class="ancora"></span>        
        <section id="direcao">             
		<h2>Direção</h2>    
			<?php if(get_field('direcao')){ //if the field is not empty
                echo '
						<p>' . get_field('direcao') . '</p>'; //display it
            } ?>           
        </section>
        
        <hr>

	</div>        
    
	</div>
    
    <div class="col-sm-3"></div>


		<div class="row galeria">
		<span id="section4" class="ancora"></span>                
        
            <section id="estrutura">             
            <h2>Estrutura</h2>  
                    
				<?php   
                $image = get_field('estrutura01');   
                if( !empty($image) ): ?>     
                    <div class="col-sm-6"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>       
                <?php endif; ?>  
               
                
                <?php   
                $image = get_field('estrutura02');   
                if( !empty($image) ): ?>     
                    <div class="col-sm-6"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>     
                <?php endif; ?>  
                
                
                <?php   
                $image = get_field('estrutura03');   
                if( !empty($image) ): ?>     
                    <div class="col-sm-6"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>
                <?php endif; ?>  
                
                
                <?php   
                $image = get_field('estrutura04');   
                if( !empty($image) ): ?>     
                    <div class="col-sm-6"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>       
                <?php endif; ?>  
                
                
                <?php   
                $image = get_field('estrutura05');   
                if( !empty($image) ): ?>     
                    <div class="col-sm-6"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>    
                <?php endif; ?>  
                
                
                <?php   
                $image = get_field('estrutura06');   
                if( !empty($image) ): ?>     
                    <div class="col-sm-6"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>     
                <?php endif; ?> 
                                                                                                     
            </section>
		</div>
            
        <hr>    
        
  </article>  
  
</div>

</main>
<?php get_footer(); ?>