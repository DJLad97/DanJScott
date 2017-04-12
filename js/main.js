$(document).ready(function(){

    var slideout = new Slideout({
       'panel': document.getElementById('panel'),
       'menu': document.getElementById('menu'),
       'padding': 256,
       'tolerance': 70
     });
     $('.toggle-button').on('click', function() {
      slideout.toggle();
    });

    slideout.enableTouch();
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

  if($('html').hasClass('slideout-open')){
    alert('sidenav opened');
    $('body').addClass('dim-page')
  }

  // Add the active class to the navbar item's page
  // I.e if on contact, put active on the contact me navbar list item
  var url = window.location.pathname,
       urlRegExp = new RegExp(url.replace(/\/$/,'') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
       // now grab every link from the navigation
       $('.nav-list a').each(function(){
           // and test its normalized href against the url pathname regexp
           if(urlRegExp.test(this.href.replace(/\/$/,''))){
               $(this).addClass('active');
           }
       });

});
