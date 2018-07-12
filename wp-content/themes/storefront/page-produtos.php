<?php /* Template Name: Produtos */ ?>
<?php get_header();?>

<style type="text/css">

.col-full {
  max-width: 100%;
  padding: 0;
}
  
.comocomprar {
  width:100%;
  height:300px;
  text-align:center;
  display:flex;
  justify-content:center;
  align-items:center;
}

.comocomprar h1 {
  font-size:50px;
  padding:10px 10px 0;
}

</style>

<!-- <?php //$encartes = new WP_Query( array( 'post_type' => 'textos_encartes', 'posts_per_page' => '1' )); ?>
<?php // while ( $encartes->have_posts() ) : $encartes->the_post(); ?> -->
  <!-- TOPO -->
  <div class="comocomprar" style="background: url('<?php bloginfo('template_url'); ?>/images/produtos.jpg');background-size:cover;background-repeat: no-repeat;">
    <h1 class="white-text bold">Produtos</h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col s12 padding40">
        <p>Confira abaixo os nossos produtos e veja também todos os benefícios do Epifractán:</p>
        <!-- FOTO PRODUTO -->
        <div class="col s12 padding40">
          <div class="col m2"></div>
          <div class="col s9 push-s2 m3 marginb50">
            <img src="<?php bloginfo('template_url'); ?>/images/foto-produto.jpg">
            <h3 class="margint20 marginb0 bold green-text">Epifractán 2%</h3>
            <p class="green-text marginb0">Opções com 10ml ou 30ml</p>
            <a href="/cbdmed/contato" class="btn green bold margin10">COMPRAR</a>
          </div>
          <div class="col m2"></div>
          <div class="col s9 push-s2 m3">
            <img src="<?php bloginfo('template_url'); ?>/images/foto-produto.jpg">
            <h3 class="margint20 marginb0 bold green-text">Epifractán 5%</h3>
            <p class="green-text marginb0">Opções com 10ml ou 30ml</p>
            <a href="/cbdmed/contato" class="btn green bold margin10">COMPRAR</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- PARA QUE SERVE -->
  <div class="parallax-container">
    <div class="container">
      <div class="row">
        <!-- DESKTOP -->
        <div class="col hide-on-small-only center margin140">
          <h1 class="white-text bold">O primeiro medicamento extraído do cannabidiol</h1>
          <p class="white-text">O canabidiol, também conhecido por CBD, é um dos princípios ativos da Cannabis sativa, nome científico da maconha. Compõe até 40% dos extratos da planta e pode ser usado como medicamento para diversas doenças, que variam de epilepsia severa a fibromialgia. É uma substância canabinoide (que age nos receptores canabinóides do cérebro). Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <!-- MED AND DOWN -->
        <div class="col s12 hide-on-med-and-up center margin50 marginb50">
          <h1 class="white-text bold">O primeiro medicamento extraído do cannabidiol</h1>
          <p class="white-text">O canabidiol, também conhecido por CBD, é um dos princípios ativos da Cannabis sativa, nome científico da maconha. Compõe até 40% dos extratos da planta e pode ser usado como medicamento para diversas doenças, que variam de epilepsia severa a fibromialgia. É uma substância canabinoide (que age nos receptores canabinóides do cérebro). Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
    <div class="col hide-on-small-only parallax">
      <img src="<?php bloginfo('template_url'); ?>/images/produtos-1.jpg">
    </div>
    <div class="col hide-on-med-and-up parallax">
      <img src="<?php bloginfo('template_url'); ?>/images/produtos-1-mobile.jpg">
    </div>
  </div>
  <!-- O QUE É -->
  <div class="parallax-container">
    <div class="container">
      <div class="row">
        <!-- DESKTOP -->
        <div class="col hide-on-small-only center margin140">
          <h1 class="white-text bold">O que é?</h1>
          <p class="white-text">O Epifractán é o único produto registrado como medicamento e não suplemento, possui testes realizados no Uruguai e já é comercializado em farmácias com  o preço mais em conta, comparado aos concorrentes. O CBD conquistou espaço na mídia a partir de 2014, quando uma mãe ganhou, na justiça, o direito de importar a substância, criança sofria com até 80 crises por semana e os medicamentos não surtiam o efeito desejado, o canabidiol praticamente zerou as crises da garota.</p>
        </div>
        <!-- MED AND DOWN -->
        <div class="col s12 hide-on-med-and-up center margin50 marginb50">
          <h1 class="white-text bold">O que é?</h1>
          <p class="white-text">O Epifractán é o único produto registrado como medicamento e não suplemento, possui testes realizados no Uruguai e já é comercializado em farmácias com  o preço mais em conta, comparado aos concorrentes. O CBD conquistou espaço na mídia a partir de 2014, quando uma mãe ganhou, na justiça, o direito de importar a substância, criança sofria com até 80 crises por semana e os medicamentos não surtiam o efeito desejado, o canabidiol praticamente zerou as crises da garota.</p>
        </div>
      </div>
    </div>
    <div class="col hide-on-small-only parallax">
      <img src="<?php bloginfo('template_url'); ?>/images/produtos-2.jpg">
    </div>
    <div class="col hide-on-med-and-up parallax">
      <img src="<?php bloginfo('template_url'); ?>/images/produtos-2-mobile.jpg">
    </div>
  </div>
  <!-- BENEFÍCIOS -->
  <div class="parallax-container">
    <div class="container">
      <div class="row">
        <!-- DESKTOP -->
        <div class="col hide-on-small-only center margin140">
          <h1 class="white-text bold">Como que funciona/Benefícios</h1>
          <p class="white-text">O Epifractán é o único produto registrado como medicamento e não suplemento, possui testes realizados no Uruguai e já é comercializado em farmácias com  o preço mais em conta, comparado aos concorrentes. O CBD conquistou espaço na mídia a partir de 2014, quando uma mãe ganhou, na justiça, o direito de importar a substância, criança sofria com até 80 crises por semana e os medicamentos não surtiam o efeito desejado, o canabidiol praticamente zerou as crises da garota.</p>
        </div>
        <!-- MED AND DOWN -->
        <div class="col s12 hide-on-med-and-up center margin50 marginb50">
          <h1 class="white-text bold">Como que funciona/Benefícios</h1>
          <p class="white-text">O Epifractán é o único produto registrado como medicamento e não suplemento, possui testes realizados no Uruguai e já é comercializado em farmácias com  o preço mais em conta, comparado aos concorrentes. O CBD conquistou espaço na mídia a partir de 2014, quando uma mãe ganhou, na justiça, o direito de importar a substância, criança sofria com até 80 crises por semana e os medicamentos não surtiam o efeito desejado, o canabidiol praticamente zerou as crises da garota.</p>
        </div>
      </div>
    </div>
    <div class="col hide-on-small-only parallax">
      <img src="<?php bloginfo('template_url'); ?>/images/produtos-3.jpg">
    </div>
    <div class="col hide-on-med-and-up parallax">
      <img src="<?php bloginfo('template_url'); ?>/images/produtos-3-mobile.jpg">
    </div>
  </div>
  <!-- COMPOSIÇÃO -->
  <div class="parallax-container">
    <div class="container">
      <div class="row">
        <!-- DESKTOP -->
        <div class="col hide-on-small-only center margin140">
          <h1 class="white-text bold">Composição</h1>
          <p class="white-text">O óleo de cânhamo puro é o principal ingrediente do RSHO™ – e às vezes o único. Diferente de canabinoides isolados ou sintéticos, o óleo de cânhamo integral contém os mesmos canabinoides presentes na planta in natura, oferecendo um produto totalmente natural que permite que os canabinoides trabalhem em conjunto, no que é chamado de efeito entourage.<br>
          No entanto, não são apenas os canabinoides que fazem com que nosso óleo de CBD seja um forte aliado em tratamentos clínicos. O óleo de cânhamo também contém muitas vitaminas essenciais e minerais, como ácidos graxos, fibras, proteína, clorofila, flavonoides e terpenos.</p>
        </div>
        <!-- MED AND DOWN -->
        <div class="col s12 hide-on-med-and-up center margin50 marginb50">
          <h1 class="white-text bold">Composição</h1>
          <p class="white-text">O óleo de cânhamo puro é o principal ingrediente do RSHO™ – e às vezes o único. Diferente de canabinoides isolados ou sintéticos, o óleo de cânhamo integral contém os mesmos canabinoides presentes na planta in natura, oferecendo um produto totalmente natural que permite que os canabinoides trabalhem em conjunto, no que é chamado de efeito entourage.<br>
          No entanto, não são apenas os canabinoides que fazem com que nosso óleo de CBD seja um forte aliado em tratamentos clínicos. O óleo de cânhamo também contém muitas vitaminas essenciais e minerais, como ácidos graxos, fibras, proteína, clorofila, flavonoides e terpenos.</p>
        </div>
      </div>
    </div>
    <div class="col hide-on-small-only parallax">
      <img src="<?php bloginfo('template_url'); ?>/images/produtos-4.jpg">
    </div>
    <div class="col hide-on-med-and-up parallax">
      <img src="<?php bloginfo('template_url'); ?>/images/produtos-4-mobile.jpg">
    </div>
  </div>
  <!-- PROCESSO DE COMPRA -->
  <div class="container margin30 marginb50">
    <div class="row">
      <div class="col s12 padding20">
        <div class="col s12 m10 push-m1">
          <h1 class="green-text bold">Processo de compra</h1>
          <p>Para realizar a compra do Epifractán no Brasil você precisa realizar três etapas:</p>
          <p>
            1. Consulte seu médico para conseguir uma prescrição e um laudo médico.<br>
            2. Obtenha sua autorização de importação da ANVISA clicando <a class="bold" href="http://formsus.datasus.gov.br/site/formulario.php?id_aplicacao=19489">aqui.</a><br>
            3. Compre o Epifractán selecionando um dos dois produtos no topo da página.
          </p>
          <p>
            Estamos aqui para lhe ajudar em todo o processo de compra do Epifractán.
            <br>
            Em caso de dúvidas, entre em contato para que possamos melhor lhe auxiliar quanto ao procedimento e benefícios do CBD.
          </p>
          <a href="/cbdmed/contato" class="btn green-dark bold">ENTRAR EM CONTATO</a>
        </div>
      </div>
    </div>
  </div>

<!-- <?php // endwhile; ?>
<?php // wp_reset_query(); ?> -->

<?php get_footer('home'); ?>