$(document).ready(function() {

  $search_field = $('.searchTerm');
  $searchBtn = $('#searchBtn');

  if($search_field.val() == '') { 
    $searchBtn.prop('disabled', true);
    // alert('nice');
  }

  $search_field.on('keypress keyup keydown', function () { 
    if ($search_field.val() == "" ) { 
      $searchBtn.prop('disabled', true); 
    } 
    else {   
      $searchBtn.prop('disabled', false); 
    } 
  });

  $('#burger-menu').click(function() {
    var lesson_sider = $('.lesson-sidebar-container');

    lesson_sider.toggleClass('lesson-active');
  })

  $('.close-icon').click(function() {
    var lesson_sider = $('.lesson-sidebar-container');

    lesson_sider.removeClass('lesson-active');
  })

  $('.scroll-top').click(function() {
    $(document).scrollTop(0);
  })
  
  

});