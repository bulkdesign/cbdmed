<style type="text/css">
	
.col-full {
  max-width: 100%;
  padding: 0;
}
  
.destaque-post {
  width:100%;
  height:450px;
  text-align:center;
  display:flex;
  justify-content:center;
  align-items:center;
}

.destaque-post h1 {
  font-size:50px;
  padding:10px 10px 0;
}

</style>

<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>

<!-- TOPO -->
<div class="destaque-post" style="background: url('<?php echo $featured_img_url; ?>');background-size:cover;background-repeat: no-repeat;">
  <h1 class="white-text bold">Notícias</h1>
</div>

	<div class="container">
		<div class="row">
			<div class="col s12 margin50 left-align">
				<h1><?php the_title(); ?></h1>
				<p class="italic">Escrito por <?php echo $display = get_the_author_meta( 'display_name' ); ?> em <span class="entry-date"><?php echo get_the_date(); ?></span></p>
				<?php the_content(); ?>
			</div>
		</div>
	</div>
