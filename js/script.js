   
  $('.mobile-menu>.fa-bars').click(function(){
   // $(".mobile-menu").toggle(function(){
      $('.mobile-menu>i').toggleClass("fa-times  fa-bars");
      $('#menu-primary').toggle(1000);
      
      //$('#dropdown-mobile').removeClass("active");
    //});
  });
   $('#menu-primary li').mouseover(function(){
       if ($('li').is('.sub-menu')) {
       $('.sub-menu').show(1000);
       }
  });
   $(document.body).click( function(e) {
    e.preventDefault();
      $('.sub-menu').hide(1000);
});
  
  function display_sidebar() {

    $(".services1-content-sidebar").toggle(function(){
      $('.header-side-nav>i').toggleClass("fa-times fa-ellipsis-h");
    });

  }
  $(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });
    $("#dropdown").click(function(e){
      e.preventDefault();
      $('.header-nav-dropdown').toggle(1000);
    });
    $("#dropdown-mobile").click(function(e){
      e.preventDefault();
      $('.header-nav-dropdown-mobile').toggle(function(){
        $('#dropdown-mobile').toggleClass("active");
      });
    });
	  // $("#menu-primary .menu-item-has-children").click(function(e){
   //    e.preventDefault();
		 //    $('.sub-menu').toggle(1000);
    
   //  });
    
});
