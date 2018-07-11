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

<!-- FLOATING BUTTON -->
<div class="fixed-action-btn">
  <a href="<?php site_url(); ?>/?page_id=37" class="btn-floating btn-large green">
    <i class="large material-icons">email</i>
  </a>
</div>
<!-- DESTAQUE -->
<div class="parallax-container" style="height: 580px">
  <div class="chamada-inicio green-rgba z-depth-4">
    <h1 class="white-text bold">Qualidade de Vida, Saúde e Bem-Estar</h1>
    <a href="<?php site_url(); ?>/?page_id=37" class="btn green bold">Saiba Mais</a>
  </div>
  <div class="parallax">
    <img src="<?php bloginfo('template_url'); ?>/images/capa.jpg">
  </div>
</div>
<!-- O QUE É -->
<div id="oquee" class="parallax-container z-depth-4">
  <div class="row">
    <div class="col s12 l6 push-l1 margin140 left-align">
      <h1 class="white-text bold">O que é?</h1>
      <p class="white-text">O Epifractán é o único produto registrado como medicamento e não suplemento, possui testes realizados no Uruguai e já é comercializado em farmácias com  o preço mais em conta, comparado aos concorrentes. O CBD conquistou espaço na mídia a partir de 2014, quando uma mãe ganhou, na justiça, o direito de importar a substância, criança sofria com até 80 crises por semana e os medicamentos não surtiam o efeito desejado, o canabidiol praticamente zerou as crises da garota.</p>
    </div>
  </div>
  <div class="parallax">
    <img src="<?php bloginfo('template_url'); ?>/images/section1.jpg">
  </div>
</div>
<!-- PARA QUE SERVE -->
<div id="paraqueserve" class="parallax-container z-depth-4">
  <div class="row">
    <div class="col s12 l6 pull-l1 right margin140 right-align">
      <h1 class="white-text bold">Para que serve?</h1>
      <p class="white-text">O canabidiol, também conhecido por CBD, é um dos princípios ativos da Cannabis sativa, nome científico da maconha. Compõe até 40% dos extratos da planta e pode ser usado como medicamento para diversas doenças, que variam de epilepsia severa a fibromialgia. É uma substância canabinoide (que age nos receptores canabinóides do cérebro).</p>
    </div>
  </div>
  <div class="parallax">
    <img src="<?php bloginfo('template_url'); ?>/images/section2.jpg">
  </div>
</div>
<!-- COMO COMPRAR -->
<div class="parallax-container">
  <div class="row">
    <div class="col s12 l6 push-l1 margin120 left-align">
      <h1 class="white-text bold">Como comprar?</h1>
      <p class="white-text">O Epifractán 2%, classificado como MEDICAMENTO, pois já é vendido a meses nas farmácias do Uruguai, chegará com um preço de USD 100,00 na casa do paciente (com todas as despesas já inclusas) o fracos de 10ml e o frasco de 30ml custará USD 200,00. Enquanto os outros medicamentos demoram em média 45 dias para chegar para o cliente após a compra, o Epifractán 2%, pelo fato do laboratório estar localizado no Uruguai, a logística é mais barata e mais rápida, podendo ser realizada a importação em até 10 dias.</p>
      <a href="<?php site_url(); ?>/?page_id=28" class="btn green bold">Conheça o processo de compra</a>
    </div>
  </div>
  <div class="parallax">
    <img src="<?php bloginfo('template_url'); ?>/images/section3.jpg">
  </div>
</div>
<!-- PRODUTOS -->
<div class="container">
  <div class="row">
    <div class="col s12">
      <h1 class="green-text margin60 bold produtos">Produtos</h1>
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
<div class="container margin30 marginb50">
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