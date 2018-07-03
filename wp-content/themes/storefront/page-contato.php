<?php /* Template Name: Contato */ ?>
<?php get_header();?>

<style type="text/css">
  
input[type=submit] {
  background-color: #0D47A1 !important;
  color: #FFFFFF !important;
  padding: 0 25px;
}

textarea, input:not([type]), input[type=text]:not(.browser-default), input[type=email]:not(.browser-default), input[type=tel]:not(.browser-default), textarea.materialize-textarea {
  border: 0.10em solid #dbdbdb !important;
  border-radius: 2px;
  text-align: left;
  padding-left: 15px;
}

textarea, textarea:hover, textarea:active {
  border: 0.10em solid #dbdbdb !important;
  border-radius: 2px;
  background: #FFFFFF;
  text-align: left;
  width: 102.6% !important;
  box-shadow: none;
}

select {
  width: 102.6%;
}

[type="checkbox"]:not(:checked), [type="checkbox"]:checked {
  position: relative;
  opacity: 1;
  pointer-events: initial;
}

::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: #666666 !important;
    opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
    color: #666666 !important;
}

::-ms-input-placeholder { /* Microsoft Edge */
    color: #666666 !important;
}

.wpsl-search {
  display: none;
}

.wpsl-store-location span {
  color: #999999 !important;
}

#wpsl-wrap.wpsl-store-below #wpsl-result-list li {
    padding: 0 10px 25px;
}

#wpsl-result-list li p {
  margin: 0 !important;
}

#wpsl-result-list {
  background: #f2f2f2;
  color: #999999;
}

.wpsl-store-location {
  padding: 0;
}

#wpsl-wrap.wpsl-store-below #wpsl-result-list li {
  border: 1px solid #e2e0e0;
  background: #f2f2f2 !important;
}

h1 {
  padding-bottom: 0;
}

h6 {
  font-size: 17px;
  font-weight: 400;
}

</style>

<div class="container">
	<div class="row">
		<div class="col m12 s12">
			<h1 class="blue-text margin20">Contato</h1>
      <p>Entre em contato através do formulário abaixo:</p>
		</div>
		<div class="col s12">
		  <?php echo do_shortcode('[contact-form-7 id="6" title="Formulário de Contato"]'); ?>
		</div>
  </div>
</div>

<?php get_footer(); ?>