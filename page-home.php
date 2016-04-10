<?php /* Template Name: WPEmpty Homepage */ ?>

<?php get_header(); ?>

<div class="col-md-12">

  <div class="row header-blocks">
    <div class="col-md-8 col-lg-9 block block-big block-silver block-dark">
      <h1 class="header-big"><?php bloginfo('description'); ?></h1>
    </div><!-- .col -->

    <div class="col-md-4 col-lg-3 block block-big block-sea block-light">
      <h2 class="header-big">How awesome</h2>
    </div><!-- .col -->
  </div><!-- .row -->

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>

  <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>

</div><!-- .col -->


<?php get_footer(); ?>
