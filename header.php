<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>"/>
<meta name="Description" content="<?php bloginfo('description');?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11"/>
<link rel="icon" href="http://www.mundo-superheroes.com/wp-content/uploads/2017/12/yeah.png" type="image/png">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,700" rel="stylesheet">

<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110565109-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110565109-1');
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
</head>
	
<body>