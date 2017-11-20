(function($) {  
    $( "#toggle-search" ).click(function(e) {
      e.preventDefault()
      $( "#search-field" ).toggle( "slow", function() {
        $( "#search-field" ).focus();
      });
      $( "#search-field").blur();
  });
})(jQuery);