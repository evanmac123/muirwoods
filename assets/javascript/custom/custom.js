jQuery(document);

//Menu opening and closing
$('.opener').click(function(e) {
  var $this = $(this).parent();
  if($this.hasClass(".green-block")){
  }
  else{
    e.preventDefault();

    if ($this.hasClass("opened")) {
      $('.sub-menu').slideUp(400);
      $this.removeClass("opened");
    } else {
      $('.opened').removeClass("opened");
      $('.sub-menu').slideUp(400);
      $this.children('.sub-menu').delay(400).slideDown("slow");
      $this.addClass("opened");
    }
}
});

$('.sub-menu-closer').click(function(e) {
  $('.sub-menu').slideUp(400);
  $('.opened').removeClass("opened");
});


//menu search functionality - needs full screen search plugin
$('.search').on('focus, click', function(event) {
  // Prevent the default action
  event.preventDefault();

  // Display the Full Screen Search
  $('#full-screen-search').addClass('open');

  // Focus on the Full Screen Search Input Field
  $('#full-screen-search input').focus();
});

// Hide the Full Screen search when the user clicks the close button
$('#full-screen-search-close').on('click', function(event) {
  // Prevent the default event
  event.preventDefault();

  // Hide the Full Screen Search
  $('#full-screen-search').removeClass('open');
});
