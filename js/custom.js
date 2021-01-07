/*...................................................
                    Sticky_nav bar 
....................................................*/ 
    $(document).ready(function(){
        $(".agency-navbar").sticky({topSpacing:0});
    });
 /*......................................................
                Scroll Spy 
......................................................*/

  $(document).ready(function(){ 
    $('body').scrollspy({ target: '.agency-navbar' })
  });
/*.............................................................
                    Smoth scroll 
............................................................*/
$(document).ready(function(){ 
    //smooth scrolling to all links
    $("a").on('click', function(event) {
    if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            $('html, body').animate({
            scrollTop: $(hash).offset().top
            }, 1000, function(){
            window.location.hash = hash;
            });
        } // End if
    }); 
});
/*......................................................
                Design Parallax 
......................................................*/
$(document).ready(function(){ 
	$('.bg').parallax("50%", 0.4);
}); 

/*......................................................
               Magnific PopUp 
......................................................*/
$(document).ready(function() {
  
    $('#parent').magnificPopup({
    	delegate: 'a.gallery',
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'mfp-img-mobile',
        image: {
            verticalFit: true
        }
          
    });
  
});
/*......................................................
               Facts Parallax 
......................................................*/
$(document).ready(function(){ 
	$('.bg_1').parallax("50%", 0.4);
});
/*......................................................
                Counter Up 
......................................................*/
$(document).ready(function($) {
    $('.start-count').each(function() {
        var $this = $(this);
        $this.data('target', parseInt($this.html()));
        $this.data('counted', false);
        $this.html('0');
    });

    $(window).bind('scroll', function() {
        var speed = 3000;
        $('.start-count').each(function() {
            var $this = $(this);
            if (!$this.data('counted') && $(window).scrollTop() + $(window).height() >= $this.offset().top) {
                $this.data('counted', true);
                $this.animate({
                    dummy: 1
                }, {
                    duration: speed,
                    step: function(now) {
                        var $this = $(this);
                        var val = Math.round($this.data('target') * now);
                        $this.html(val);
                        if (0 < $this.parent('.value').length) {
                            $this.parent('.value').css('width', val + '%');
                        }
                    }
                });
            }
        });
    }).triggerHandler('scroll');
});

/*......................................................
                Collapse Active 
......................................................*/
$('.panel-heading button').click(function() {
    $('.panel-heading').removeClass('active');
    
    //If the panel was open and would be closed by this click, do not active it
    if(!$(this).closest('.panel').find('.panel-collapse').hasClass('in'))
        $(this).parents('.panel-heading').addClass('active');
 });
/*......................................................
               Testimonial Carousel Active 
......................................................*/
$('.testimonial_slider').owlCarousel({
    loop:true,
    nav:false,
    autoplay:true,
	autoplayTimeout:5000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
/*......................................................
                    Animate  
........................................................*/  
    wow = new WOW(
        {
            animateClass: 'animated',
            offset:       100,
            callback:     function(box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
        }
    );
    wow.init();
        document.getElementById('moar').onclick = function() {
        var section = document.createElement('section');
        section.className = 'section--purple wow fadeInDown';
        this.parentNode.insertBefore(section, this);
    };