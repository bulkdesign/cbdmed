(function($) {
  $(function() {
    $('.parallax').parallax();
    $('.toggle-overlay').click(function() {
      $('aside').toggleClass('open');
    });

    $("#nascimento").mask('00/00/0000', {reverse: false});
  	$("#telefone").mask('(00) 00000-0000', {reverse: false});
  });

})(jQuery);