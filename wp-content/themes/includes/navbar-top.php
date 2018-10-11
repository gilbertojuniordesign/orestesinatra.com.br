<header class="header-page">

<nav class="navbar navbar-fixed-top">

<!--LOGO FIXO-->
<div><a href="<?php echo get_site_url(); ?>" class="logo logo-page animated slideInTop"></a></div>

    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar top-bar"></span>
      <span class="icon-bar middle-bar"></span>
      <span class="icon-bar bottom-bar"></span> 
    </button>
  <div class="collapse navbar-collapse" id="myNavbar">
  
  
  <?php wp_nav_menu( array('menu' => 'menu-top', 'container' => '', 'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>' )); ?>

  
  </div>
  <div class="nav-social">
  	<a class="icone-fb" href="<?php echo esc_url( __('https://www.facebook.com/Conservatorio-Oreste-Sinatra-336116876416630/?ref=ts&fref=ts', 'mytheme'));?>" title="curta-nos no Facebook!"></a>    
  </div>
</nav>

</header>