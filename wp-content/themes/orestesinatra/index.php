<?php get_header(); ?>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">
<script>
//add/remove class
$(function() {
    //caches a jQuery object containing the header element
    var header = $('.navbar-fixed-bottom');
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 100) {
            if(header.hasClass('navbar-fixed-bottom')) {
                header.hide();
                header.removeClass('navbar-fixed-bottom')
               .addClass('navbar-fixed-top').fadeIn(500);
            }
        } else {
            if(header.hasClass('navbar-fixed-top'))  {   
                header.hide();
                header.removeClass('navbar-fixed-top')
               .addClass('navbar-fixed-bottom').fadeIn(500);
            }
        }
    });
});
</script>
<header class="header-home">

<!--LOGO TOPO-->
<div><a href="<?php echo get_site_url(); ?>" class="logo logo-home"></a></div>

<nav class="navbar navbar-fixed-bottom">

    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar top-bar"></span>
      <span class="icon-bar middle-bar"></span>
      <span class="icon-bar bottom-bar"></span> 
    </button>
  <div class="collapse navbar-collapse" id="myNavbar">
  
  
  <?php wp_nav_menu( array('menu' => 'menu-top', 'container' => '', 'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>' )); ?>

  
  </div>
  <div class="nav-home">
    <a class="icone-home" href="<?php echo get_site_url(); ?>" title="&#171; Home"></a>    
  </div>  
  <div class="nav-social">
  	<a class="icone-fb" href="<?php echo esc_url( __('https://www.facebook.com/Conservatorio-Oreste-Sinatra-336116876416630/?ref=ts&fref=ts', 'mytheme'));?>" title="curta-nos no Facebook!"></a>    
  </div>
</nav>

<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol> 

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

    <div class="item active">
      <div class="item1 fill-home"><div class="filtro"></div></div>
      <div class="carousel-caption">
        <p>Cursos livres e técnicos para todas as idades.</p>
      </div>
    </div>

    <div class="item">
      <div class="item2 fill-home"><div class="filtro"></div></div>
      <div class="carousel-caption">
        <p>Mais de 50 anos de tradição e qualidade no ensino musical e dramático.</p>
      </div>
    </div>

    <div class="item">
      <div class="item3 fill-home"><div class="filtro"></div></div>
      <div class="carousel-caption">
        <p>Sem a música, a vida seria um erro.<br><small>Friedrich Nietzsche</small></p>
      </div>
    </div>
  </div>
</div> 

<div class="scrolldown text-center"><a href="#destaques">role para baixo e nos conheça!</a></div>

</header>

<main>  
<span id="destaques" class="ancora"></span> 
<div class="container wow animated zoomIn">

  <div class="row">
  	<div class="col-sm-4 text-center mb-40">
    <h3>50+ anos de tradição</h3>
    <p class="text-left">Conheça a nossa história e saiba  porque somos a maior referência no ensino musical em São Miguel Paulista.</p>
    <a href="<?php echo get_site_url(); ?>/escola/#section1" class="btn">Saiba mais</a>
    </div>
    
  	<div class="col-sm-4 text-center mb-40">
    <h3>Cursos técnicos e livres</h3>
    <p class="text-left">Veja os 21 cursos oferecidos pelo Conservatório Oreste Sinatra em nível técnico e também opções de cursos livres.</p>
    <a href="<?php echo get_site_url(); ?>/cursos/" class="btn">Saiba mais</a>
    </div>
  
  	<div class="col-sm-4 text-center mb-40">
    <h3>Cursos de teoria musical</h3>
    <p class="text-left">Cursos de 6 meses: Regência para Maestros de Igreja e Harmonização + Improvisação.</p>
      <a href="<?php echo get_site_url(); ?>/cursos-de-teoria-musical/" class="btn">Saiba mais</a>    
  	</div>    
  </div>  
   
</div>

<hr>

<div class="container-fluid wow animated zoomIn">
  <div class="row">
  	<div class="col-sm-12">
       <h2>Cursos</h2>
    </div>
  </div> 
  <div class="row">
    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3"><a class="ico ico-piano" href="<?php echo get_site_url(); ?>/cursos/">Piano</a></div>
    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3"><a class="ico ico-orgao" href="<?php echo get_site_url(); ?>/cursos/">Órgão</a></div>
    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3"><a class="ico ico-teclado" href="<?php echo get_site_url(); ?>/cursos/">Teclado</a></div>
    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3"><a class="ico ico-acordeon" href="<?php echo get_site_url(); ?>/cursos/">Acordeão</a></div> 
    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3"><a class="ico ico-violao" href="<?php echo get_site_url(); ?>/cursos/">Violão / Guitarra</a></div> 
    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3"><a class="ico ico-baixo" href="<?php echo get_site_url(); ?>/cursos/">Baixo</a></div>     
    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3"><a class="ico ico-bateria" href="<?php echo get_site_url(); ?>/cursos/">Bateria</a></div>         
    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3"><a class="ico ico-violino" href="<?php echo get_site_url(); ?>/cursos/">Violino</a></div>
    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3"><a class="ico ico-canto" href="<?php echo get_site_url(); ?>/cursos/">Canto</a></div>    
    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3"><a class="ico ico-saxofone" href="<?php echo get_site_url(); ?>/cursos/">Saxofone</a></div>
    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3"><a class="ico ico-flauta" href="<?php echo get_site_url(); ?>/cursos/">Flauta transversal</a></div>
    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3"><a class="ico ico-todos" href="<?php echo get_site_url(); ?>/cursos/">Veja todos os cursos</a></div>    
    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3"></div>
  </div>
</div>  

<hr>

<div class="container wow animated zoomIn">
  
  <div class="row">
  
  	<div class="col-sm-12">
       <h2>Próximos eventos</h2>
    </div>    
  <?php // loop para eventos
  $args = array(
      'numberposts'=>2,
      'event_start_after'=>'today',
      'showpastevents'=>true,
      'post_type'=>'event',
      'suppress_filters'=>false
  );
  $eventloop = new WP_Query( $args );
      if ( $eventloop->have_posts() ) :
      while ( $eventloop->have_posts() ) : $eventloop->the_post();
  ?>      
          <a href="<?php the_permalink(); ?>">
        
              <article class="col-xs-12 col-md-6 col-md-offset-3 eventos evento-destaque"> 
                  <header>     	
                      <h3 class="text-center"><?php the_title(); ?></h3>
                      <p class="text-center"><time><span class="glyphicon glyphicon-calendar"></span> <?php  eo_the_start('d \d\e F \à\s G:i\h');?></time></p>
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
              
          </a>
 
	<?php endwhile; else : ?>

	<?php query_posts('showposts=1'); // loop para eventos passados (post padrão) ?> 

	<?php if ( have_posts() )
    {
        while(have_posts())
        {
            the_post(); ?>


  	<div class="col-sm-12">
       <h2>Evento recente</h2>
    </div>  
          <a href="<?php the_permalink(); ?>">
         
              <article class="col-sm-12 eventos evento-destaque">    
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
                  
                  <?php the_excerpt_max_charlength(300); ?>
    
              </p>
              </article>
              
          </a>
	
    <div class="col-sm-12 text-center"><a href="<?php echo get_site_url(); ?>/eventos/" class="btn btn-sm">Mais eventos</a></div> 
    
            
	<?php             
        }
    }
    else
    {
        print '<p class="text-center">Em breve, novos eventos serão postados aqui!</p>';
    }	
     ?>		

  
	<?php endif; ?>
    
  
  </div> 
   
</div>

</main>
<?php get_footer(); ?>