<?php /* Template Name: Como Comprar */ ?>
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
  <div class="comocomprar" style="background: url('<?php bloginfo('template_url'); ?>/images/section2.jpg');background-size:cover;background-repeat: no-repeat;">
    <h1 class="white-text bold">Como Comprar o Epifractán?</h1>
  </div>


<div class="container">
  <div class="row">
    <div class="col s12 padding40">
      <p>Confira abaixo em três etapas como realizar a compra do Epifractán no Brasil:</p>
      <!-- PASSO 1 -->
      <div class="col s12 m4">
        <div class="card green">
          <div class="card-image">
            <h1 class="white-text padding20 bold">PASSO 1</h1>
          </div>
          <div class="card-content">
            <p class="white-text bold">Consulte seu médico para conseguir uma prescrição e um laudo médico.</p>
          </div>
        </div>
      </div>
      <!-- PASSO 2 -->
      <div class="col s12 m4">
        <div class="card green">
          <div class="card-image">
            <h1 class="white-text padding20 bold">PASSO 2</h1>
          </div>
          <div class="card-content">
            <p class="white-text bold">Obtenha sua autorização de importação da ANVISA clicando <a class="bold" href="http://formsus.datasus.gov.br/site/formulario.php?id_aplicacao=19489">aqui.</a></p>
          </div>
        </div>
      </div>
      <!-- PASSO 3 -->
      <div class="col s12 m4">
        <div class="card green">
          <div class="card-image">
            <h1 class="white-text padding20 bold">PASSO 3</h1>
          </div>
          <div class="card-content">
            <p class="white-text bold">Compre o Epifractán através do seguinte link:</p>
            <a class="bold" href="/cbdmed/produtos">Clique aqui.</a>
          </div>
        </div>
      </div>
    </div>
    <!-- FINALIZAÇÃO DO PEDIDO -->
    <div class="col s12 m10 push-m1">
      <h1 class="green-text bold">Finalização do pedido</h1>
      <p class="left-align padding20">
        Com a autorização de importação da ANVISA em mãos você poderá visitar a seção PRODUTOS de nossa página para fazer sua compra ou nos chamar por telefone.
        <br><br>
        Ao finalizar seu pedido será necessário incluir cópias dos seguintes documentos:
        <ol>
          <li class="left-align">Prescrição médica</li>
          <li class="left-align">Carta de Autorização da ANVISA</li>
          <li class="left-align">Documento de identificação do paciente e responsável legal (caso se aplique)</li>
        </ol>
      </p>
    </div>
    <!-- FORMAS DE PAGAMENTO -->
    <div class="col s12 m10 push-m1 padding40">
      <h1 class="green-text bold">Formas de Pagamento</h1>
      <p class="left-align padding20">
        Aceitamos cartões de crédito ou transferência via PayPal.
        <br><br>
        O governo brasileiro tomou medidas para subsidiar o Epifractán no sistema público de saúde. Entretanto, os pacientes que gostariam de ter o canabidiol custeado pelo governo devem primeiro contatar a Defensoria Pública do seu estado e provar que não têm condições de arcar com os custos do tratamento.
      </p>
    </div>
    <!-- CONTATO -->
    <div class="col s12 m10 push-m1 marginb50">
      <h1 class="green-text bold">Contato</h1>
      <p>
        Estamos aqui para lhe ajudar em todo o processo de compra do Epifractán.
        <br>
        Em caso de dúvidas, entre em contato para que possamos melhor lhe auxiliar quanto ao procedimento e benefícios do CBD.
      </p>
      <a href="/cbdmed/?page_id=37" class="btn green-dark bold">ENTRAR EM CONTATO</a>
    </div>
  </div>
</div>
<!-- <?php // endwhile; ?>
<?php // wp_reset_query(); ?> -->

<?php get_footer('home'); ?>