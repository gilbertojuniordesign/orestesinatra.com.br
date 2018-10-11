<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<title>

<?php wp_title(''); ?>

</title>
<meta charset="utf-8">
<meta name="author" content="Gilberto Junior">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/custom.css" rel="stylesheet" type="text/css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Josefin+Slab:300%7CDroid+Sans:400,700' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5-modernizr.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/wow.js"></script>

<script>
//smooth scroll
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>
<?php wp_head()?>
</head>