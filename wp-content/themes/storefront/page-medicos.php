<?php /* Template Name: Médicos */ ?>
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
  <div class="comocomprar" style="background: url('<?php bloginfo('template_url'); ?>/images/medicos.jpg');background-size:cover;background-repeat: no-repeat;">
    <h1 class="white-text bold">Médicos</h1>
  </div>


<div class="container">
  <div class="row">
    <div class="col s12 padding40">
      <p>Você, como médico, pode prescrever óleo de cânhamo para qualquer tratamento que julgar apropriado.</p>
      <!-- FOTO PRODUTO -->
      <div class="col s12 padding40">
        <div class="col s12 m3 push-m1">
          <img src="<?php bloginfo('template_url'); ?>/images/foto-produto.jpg">
        </div>
        <!-- TEXTOS -->
        <div class="col s12 m7 push-m1 left-align">
          <h1 class="green-text bold">Informações sobre prescrição médica:</h1>
          <p>
            Os médicos interessados em receitar o RSHO™ no Brasil devem instruir seus pacientes a fornecer as seguintes informações à ANVISA:
            <br><br>
            <span class="bold">1. Seu paciente precisa de um laudo médico explicando o motivo do uso do canabidiol como opção de tratamento.</span>
            <br>
            <span class="bold">2. Uma prescrição para o Real Scientific Hemp Oil™, incluindo:</span>
            <br>
            <ol>
              <li>Nome do paciente</li>
              <li>Nome do medicamento</li>
              <li>Quantidade necessária</li>
              <li>Duração do tratamento</li>
              <li>Data da receita</li>
              <li>Assinatura e carimbo do médico (com CRM)</li>
            </ol>
            <span class="bold">3. Com a prescrição e o laudo médico em mãos o paciente pode solicitar a autorização junto à ANVISA através de um ofício de importação. Uma vez aprovada, seu paciente poderá então comprar o RSHO™ diretamente em nossa loja virtual.</span>
          </p>
        </div>
      </div>
      <div class="col s12">
        <!-- BLOG -->
        <div class="col s12 m6">
          <div class="card green hoverable">
            <div class="card-image">
              <h1 class="white-text padding20 bold">Referências no Blog</h1>
            </div>
            <div class="card-content">
              <p class="white-text bold">Você pode também acessar o nosso blog para conferir maiores informações e artigos acerca do cannabidiol.</p>
            </div>
            <div class="card-action">
              <a href="#" class="bold">Acesse o Blog</a>
            </div>
          </div>
        </div>
        <!-- CONTATO -->
        <div class="col s12 m6">
          <div class="card green hoverable">
            <div class="card-image">
              <h1 class="white-text padding20 bold">Contato</h1>
            </div>
            <div class="card-content">
              <p class="white-text bold">Em caso de dúvidas, você também poderá entrar em contato conosco através do nosso formulário ou telefones:</p>
            </div>
            <div class="card-action">
              <a href="#" class="bold">Entre em contato</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- <?php // endwhile; ?>
<?php // wp_reset_query(); ?> -->

<?php get_footer('home'); ?>