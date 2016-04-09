<!DOCTYPE html>
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php if (is_page('Home')) { ?>
<title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
<?php } else { ?>
<title><?php bloginfo('name'); ?> - <?php wp_title(''); ?></title>
<?php } ?>

<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet">

<?php wp_head(); ?>
</head>
<body>

  <nav class="navbar" role="navigation">
    <div class="container_nav container-fluid">

      <div class="navbar-left col-sm-4">
        <p>search</p>
      </div>

      <div class="navbar-center col-sm-4">
        <div class="navbar-header">
          <button type="button" class="pull-left navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="fa fa-bars"></span>
          </button>
        </div>
        <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
      </div><!--/.nav-collapse -->

      <div id="navbar" class="navbar-right col-xs-12 col-sm-4 collapse navbar-collapse">
        <?php /* Primary navigation */
          wp_nav_menu( array(
            'depth' => 1,
            'container' => false,
            'menu_class' => 'nav navbar-nav',
            'theme_location' => 'headermenu',
            'walker' => new My_Walker_Nav_Menu()
          ));
        ?>
      </div>

    </div><!-- .container -->
  </nav>


  <div class="container-wrap">
    <div class="container-fluid container-full-rounded">
