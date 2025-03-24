(function($){
 $(function() {

  $(document).ready(function() {
    $('a.open-modal').click(function(event) {
      $(this).modal({
        fadeDuration: 150,
        closeText: '&#215;',
        escapeClose: false,
        clickClose: false,
        showClose: true
      });

      return false;

    });
  });






  }) // END function
})(jQuery); // END jQuery