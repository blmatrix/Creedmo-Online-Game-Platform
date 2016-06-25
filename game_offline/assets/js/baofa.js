
	
	/*Slider*/
	$(document).ready(function(){
	  $('.bxslider').bxSlider({
		slideWidth: 1000,
		auto: true,
		pause:7000,
	  });

	  $('.bxslider150').bxSlider({
		slideWidth: 150,
		controls: false,
		auto: true,
		pause:7000,
	  });

	  $('.slider_jackpot').bxSlider({
		slideWidth: 210,
		controls: false,
		auto: true,
		pause:5000,
	  });
	});
	
	/*sticky Menu*/
	$(function(){ // document ready
	  if (!!$('.sticky').offset()) { // make sure ".sticky" element exists
		var stickyTop = $('.sticky').offset().top; // returns number 
		$(window).scroll(function(){ // scroll event
		  var windowTop = $(window).scrollTop(); // returns number 
		  if (stickyTop < windowTop){
			$('.sticky').css({ position: 'fixed', top: 0 });
		  }
		  else {
			$('.sticky').css('position','static');
		  }
		});
	  }
	});

   /* Fancy Box */
	$(document).ready(function() {
		$(".PopSignUp").fancybox({
			padding : 0,
			fitToView	: false,
			width		: '100%',
			height		: '100%',
			autoSize	: true,
			scrolling	:'no',
			closeClick	: false,
			openEffect	: 'fade',
			closeEffect	: 'fade',
			preload   : true,
		});
	});
	
   /* Display Time */
	setInterval("dpTime()",1000);
    function dpTime(){
       var now = new Date();
        hours = now.getHours();
        minutes = now.getMinutes();
        seconds = now.getSeconds();
 
        if (hours > 12){
            hours -= 12;
        ampm = "PM ";
        }else{
            ampm = "AM ";
        }
        if (minutes < 10){
            minutes = "0" + minutes;
        }
        if (seconds < 10){
            seconds = "0" + seconds;
        }
	document.getElementById("dpTime").innerHTML = ampm + hours + ":" + minutes + ":" + seconds;
    }
  /* Game Hover */
    $(document).ready(function(){
        if (Modernizr.touch) {
            // show the close overlay button
            $(".close-overlay").removeClass("hidden");
            // handle the adding of hover class when clicked
            $(".slotbox").click(function(e){
                if (!$(this).hasClass("hover")) {
                    $(this).addClass("hover");
                }
            });
            // handle the closing of the overlay
            $(".close-overlay").click(function(e){
                e.preventDefault();
                e.stopPropagation();
                if ($(this).closest(".slotbox").hasClass("hover")) {
                    $(this).closest(".slotbox").removeClass("hover");
                }
            });
        } else {
            // handle the mouseenter functionality
            $(".slotbox").mouseenter(function(){
                $(this).addClass("hover");
            })
            // handle the mouseleave functionality
            .mouseleave(function(){
                $(this).removeClass("hover");
            });
        }
    });
  /* Scroll to TOP */
	$(document).ready(function(){	
		//Check to see if the window is top if not then display button
		$(window).scroll(function(){
			if ($(this).scrollTop() > 100) {
				$('.scrollToTop').fadeIn();
			} else {
				$('.scrollToTop').fadeOut();
			}
		});		
		//Click event to scroll to top
		$('.scrollToTop').click(function(){
			$('html, body').animate({scrollTop : 0},800);
			return false;
		});		
	});
  /* Tooltip */
	$(document).ready(function(){	
		$("[title]").tooltipify({ position: "right", animationProperty: "",width:"190" });
	});
  /* Tab */
	$(document).ready(function(){
		
		$('ul.MemberTabs li').click(function(){
			var tab_id = $(this).attr('data-tab');

			$('ul.MemberTabs li').removeClass('current');
			$('.MemberTabs-content').removeClass('current');

			$(this).addClass('current');
			$("#"+tab_id).addClass('current');
		})
		$('ul.MemberTabsHistory li').click(function(){
			var tab_id = $(this).attr('data-tab');

			$('ul.MemberTabsHistory li').removeClass('current');
			$('.MemberTabsHistory-content').removeClass('current');

			$(this).addClass('current');
			$("#"+tab_id).addClass('current');
		})
	});
  /* Show Hide */
jQuery(function(){

        jQuery('.showCode').click(function(){
              jQuery('.HTMLdiv').hide();
              jQuery('#codeBox'+$(this).attr('target')).show();
        });
});
//	
//	  function open() {
//		document.getElementById('Source').style.display = "inline";
//	  }
//	  function close() {
//		document.getElementById('Source').style.display = "none";
//	  }