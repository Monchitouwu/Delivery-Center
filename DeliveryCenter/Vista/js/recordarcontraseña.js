function cerrar(){
  document.getElementById('recordarcontraseña').style.display="none";

}
function recordarcontraseña(){
    document.getElementById('recordarcontraseña').style.display="block";
  
  }

  $(document).ready(function() {
    $("#desplegar").css('display','none');	
    
    $(".navbar-brand").mouseenter(function() {
      $("#desplegar").show('slow');
    });
            
    $("#des").mouseleave(function() {
      $("#desplegar").hide('slow');

    });
  });



  $(document).ready(function () {
    $("#sidebar").mCustomScrollbar({
        theme: "minimal"
    });

    $('#dismiss, .overlay').on('click', function () {
        $('#sidebar').removeClass('active');
        $('.overlay').removeClass('active');
    });

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').addClass('active');
        $('.overlay').addClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
});