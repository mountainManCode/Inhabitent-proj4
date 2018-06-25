(function($) {  
  $( '#toggle-search' ).click(function() {
    $( '#search-field' ).toggle( 'slow', function() {
      $( '#search-field' ).focus();
    });
  });
  // // $( '#search-field' ).on( 'blur', function() {
  // //   $( '#search-field' ).toggle();
  // }); 

})(jQuery);