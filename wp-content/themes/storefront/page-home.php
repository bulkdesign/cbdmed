<?php /* Template Name: Home */ ?>

<?php get_header();?>

<style type="text/css">
  .col-full {
    padding: 0 !important;
    max-width: 100% !important;
  }

@media (max-width: 993px) {
  .col-full {
    margin: 0;
  }

  .produto-destacado {
    height: 1070px;
  }
}
</style>

<!-- DESTAQUE -->
<div class="parallax-container" style="height: 620px">
  <div class="row">
    <div class="col s12 green-rgba">
      <h1>Qualidade de Vida, Saúde e Bem-Estar</h1>
      <a href="<?php site_url(); ?>/contato" class="btn green bold">Saiba Mais</a>
    </div>
  </div>
  <div class="parallax">
    <img src="<?php bloginfo('template_url'); ?>/images/capa.jpg">
  </div>
</div>
<!-- O QUE É -->
<div class="parallax-container">
  <div class="parallax">
    <img src="<?php bloginfo('template_url'); ?>/images/section1.jpg">
  </div>
</div>
<!-- PARA QUE SERVA -->
<div class="parallax-container">
  <div class="parallax">
    <img src="<?php bloginfo('template_url'); ?>/images/section2.jpg">
  </div>
</div>
<!-- COMO COMPRAR -->
<div class="parallax-container">
  <div class="parallax">
    <img src="<?php bloginfo('template_url'); ?>/images/section3.jpg">
  </div>
</div>
<!-- PRODUTOS -->
<div class="container">
  <div class="row">
    <div class="col s12">
      <h1 class="green-text margin40 bold produtos">Produtos</h1>
    </div>
    <div class="col s12 l8 push-l2">
      <div class="col s12 m6">
        <img src="<?php bloginfo('template_url'); ?>/images/produtos/epifractan-escena-10ml-2x100.jpg" />
        <p>Epifractán 2%</p>
        <h3 class="margin0">US$200,00</h3>
        <a href="<?php site_url(); ?>/contato" class="margin20 btn green bold">COMPRAR</a>
      </div>
      <div class="col s12 m6">
        <img src="<?php bloginfo('template_url'); ?>/images/produtos/epifractan-escena-10ml-2x100.jpg" />
        <p>Epifractán 2%</p>
        <h3 class="margin0">US$200,00</h3>
        <a href="<?php site_url(); ?>/contato" class="margin20 btn green bold">COMPRAR</a>
      </div>
    </div>
  </div>
</div>
<!-- DEPOIMENTOS -->
<div class="container margin40">
  <div class="row">
    <div class="col s12">
      <h1 class="green-text margin40 bold produtos">Depoimentos</h1>
    </div>
    <div class="col s12 l10 push-l1 margin40">
      <div class="col s12 m4">
        <img src="https://stromkacentrum.blog/wp-content/uploads/2017/10/circle-person02.png" width="130" class="image-center" />
        <h3 class="margin20">João Alfredo</h3>
        <p>A bunch of text right here talking about the product.</p>
      </div>
      <div class="col s12 m4">
        <img src="https://stromkacentrum.blog/wp-content/uploads/2017/10/circle-person02.png" width="130" class="image-center" />
        <h3 class="margin20">João Alfredo</h3>
        <p>A bunch of text right here talking about the product.</p>
      </div>
      <div class="col s12 m4">
        <img src="https://stromkacentrum.blog/wp-content/uploads/2017/10/circle-person02.png" width="130" class="image-center" />
        <h3 class="margin20">João Alfredo</h3>
        <p>A bunch of text right here talking about the product.</p>
      </div>
    </div>
  </div>
</div>

<?php get_footer('home'); ?>