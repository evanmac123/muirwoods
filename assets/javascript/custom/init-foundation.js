jQuery(document).foundation();

$('li.top-link').click(function(e) {
  $('li.top-link').not(this).find('ul').hide();
  $(this).find('ul').toggle();
  e.preventDefault();
    console.log("here");
});

$('.opener').click(function(e) {
  e.preventDefault();
  var $this = $(this).parent();

  if($this.hasClass("opened")){
    $('.sub-menu').slideUp(400);
    $this.removeClass("opened");
  }
  else{
    $(".opener").removeClass("opened");
    $('.sub-menu').slideUp(400);
    $this.children('.sub-menu').delay(400).slideDown("slow");
    $this.addClass("opened");
  }
});

$('.sub-menu-closer').click(function(e){
  $('.sub-menu').slideUp(400);
});
