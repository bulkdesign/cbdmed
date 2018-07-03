<?php /* Template Name: Encartes */ ?>
<?php get_header();?>

<?php $encartes = new WP_Query( array( 'post_type' => 'textos_encartes', 'posts_per_page' => '1' )); ?>
<?php while ( $encartes->have_posts() ) : $encartes->the_post(); ?>
<div class="container">
	<div class="row">
		<div class="col m12 s12">
			<h1 class="blue-text margin20">Encartes</h1>
		</div>
    <div class="col s12 margin50">
      <h1 class="left-align">Personagens</h1>
        <div class="col s12 l7 margin20">
          <h5 class="left-align blue-text"><?php the_field('titulo_3'); ?></h5>
          <p class="left-align"><?php the_field('texto_3'); ?></p>
        </div>
        <div class="col s12 l5 margin20">
          <img class="z-depth-3" src="<?php bloginfo('template_url'); ?>/images/encartes/2.png" />
        </div>
    </div>
    <div class="col s12">
      <h1 class="left-align">Jogos</h1>
      <div class="col s12 l8 margin20">
        <img class="z-depth-3" src="<?php bloginfo('template_url'); ?>/images/encartes/0.png" />
      </div>
      <div class="col s12 l4 margin20">
        <h5 class="right-align blue-text"><?php the_field('titulo_1'); ?></h5>
        <p class="right-align"><?php the_field('texto_1'); ?></p>
      </div>
    </div>
    <div class="col s12 margin50">
      <div class="col s12 l4 margin20">
        <h5 class="left-align blue-text"><?php the_field('titulo_2'); ?></h5>
        <p class="left-align"><?php the_field('texto_2'); ?></p>
      </div>
      <div class="col s12 l8 margin20">
        <img class="z-depth-3" src="<?php bloginfo('template_url'); ?>/images/encartes/1.png" />
      </div>
    </div>
    <div class="col s12 margin50">
      <h1><?php the_field('titulo_4'); ?></h1>
      <div class="col s12">
        <p class="left-align"><?php the_field('texto_4'); ?></p>
      </div>
      <div class="col s12 l4 margin20">
        <img class="z-depth-3" src="<?php bloginfo('template_url'); ?>/images/encartes/7.png" />
      </div>
      <div class="col s12 l4 margin20">
        <img class="z-depth-3" src="<?php bloginfo('template_url'); ?>/images/encartes/8.png" />
      </div>
      <div class="col s12 l4 margin20">
        <img class="z-depth-3" src="<?php bloginfo('template_url'); ?>/images/encartes/9.png" />
      </div>
    </div>
    <div class="col s12 margin50">
      <h1><?php the_field('titulo_5'); ?></h1>
      <div class="col s12">
        <p class="left-align"><?php the_field('texto_5'); ?></p>
      </div>
      <div class="col s12 l4 margin20">
        <img class="z-depth-3" src="<?php bloginfo('template_url'); ?>/images/encartes/3.png" />
      </div>
      <div class="col s12 l4 margin20">
        <img class="z-depth-3" src="<?php bloginfo('template_url'); ?>/images/encartes/4.png" />
      </div>
      <div class="col s12 l4 margin20">
        <img class="z-depth-3" src="<?php bloginfo('template_url'); ?>/images/encartes/5.png" />
      </div>
      <div class="col s12 margin20">
        <img class="z-depth-3" src="<?php bloginfo('template_url'); ?>/images/encartes/6.png" />
      </div>
    </div>
  </div>
</div>
<?php endwhile; ?>
<?php wp_reset_query(); ?>

<?php get_footer(); ?>