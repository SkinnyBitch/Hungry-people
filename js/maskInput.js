(function( $ ) {
    $(function(){
        $('input[name="date"]').mask('99/99');
        $('input[name="time"]').mask('99:99');
        $('input[name="phone"]').mask("+7 (999) 999-99-99");
  });
})(jQuery);