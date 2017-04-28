$(document).ready(function(){

  $('body').css('display', 'none');
  $('body').fadeIn(200);

  if(!$('a').hasClass('card-link')){
    $('a').click(function(e){
      redirect = $(this).attr('href');
      e.preventDefault();
      $('body').fadeOut(200, function(){
        document.location.href = redirect
      });
    });
  }

  if($('a').hasClass('mail-link')){
    $('a#mail').on('click', function(e){
      e.preventDefault();
    })
  }

  $('.slick-carousel').slick({
    dots: true,
    infinite: true,
    // fade: true,
    autoplay: true,
    autoplaySpeed: 2000,
    lazyLoad: 'ondemand',
    lazyLoadBuffer: 0,
  });

 $('.modal').modal();

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
    $('body').addClass('dim-page')
  }

  // Add the active class to the navbar item's page
  // I.e if on contact, put active on the contact me navbar list item
  // This only works if the user is on index.php (change this in the 1&1 control panel)
  var url = window.location.pathname,
  urlRegExp = new RegExp(url.replace(/\/$/,'') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
   // now grab every link from the navigation
   $('.nav-list a').each(function(){
       // and test its normalized href against the url pathname regexp
       if(urlRegExp.test(this.href.replace(/\/$/,''))){
           $(this).addClass('active');
       }
   });

   $('.section-header').on('click', function(){
     $(this).next().slideToggle('slow');
     $(this).find('i:last').toggleClass('down');

    //  $('#web-projects').slideToggle('slow', function(){
    //    if($(this).is(':hidden')){
    //      $('.indicator').html('<i class="fa fa-angle-up fa-lg" aria-hidden="true"></i>')
    //    }
    //    else {
    //      $('.indicator').html('<i class="fa fa-angle-down fa-lg" aria-hidden="true"></i>')
     //
    //    }
    //  });
   })



});
