$(document).ready(function(){
    $('.parallax').parallax();

    // Need to declare img twice because the first img is only local to first function
    $('li').hover(function() { //mouse in
      var img = $(this).find('img');
	    $(img).animate({ top: '-20px' }, 400);
	  }, function() { //mouse out
      var img = $(this).find('img');
	    $(img).animate({ top: 0 }, 400);
	  });

	$('#nav-icon1').click(function(){
		$(this).toggleClass('open');
	});

});
