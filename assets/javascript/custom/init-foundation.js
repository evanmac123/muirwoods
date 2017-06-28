jQuery(document).foundation();


$('li.top-link').click(function(e) {
  $('li.top-link').not(this).find('ul').hide();
  $(this).find('ul').toggle();
  e.preventDefault();
  console.log('dog');
});

$('.opener').click(function(e) {
  e.preventDefault();
  var $this = $(this).parent();
  $('.sub-menu').slideUp(400);
  $this.children('.sub-menu').delay(400).slideDown("slow");
});
