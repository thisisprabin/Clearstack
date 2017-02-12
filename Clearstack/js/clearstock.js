// jQuery to collapse the navbar on scroll
function collapseNavbar() {
    if ($(".navbar").offset().top > 90) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
}

//Changing name

$(window).on("scroll", function() {
	var w = $(this).scrollTop();

	if($(".c-name").offset().top > w){
			$(".cName").text("Clear Stock");
	} else {
			$(".cName").text("Top");
	}
});

//AJAX


//animation
/*
$(window).on("scroll", function(){
	var w = $(this).scrollTop();
	var aboutMe = $("#about").offset().top;
	console.log(w);
	console.log(aboutMe);
	if(w==520){
		$(".about").addClass(".animated, .fadeIn");
	}
});



    $(window).on("scroll", function() {
		var w = $(this).scrollTop();
		
		var query = "<?php echo $_REQUEST['section']; ?>";

		if($(".c-name").offset().top > w){
			$(".cName").text("<?php if($_REQUEST['section']=='home'){ 
				echo 'Clear Stock';
			} else { 
			    echo 'Home'; 
			} ?>");
		} else {
			$(".cName").text("Top");
		}
		
		if($(".c-name").offset().top > w && query ='home'){
			<?php $home = "#page-top"; ?>
		} else if($(".c-name").offset().top > w && query !='home'){
			<?php $home = "?service=home#page-top"; ?>
		}
	});
*/

$(window).scroll(collapseNavbar);
$(document).ready(collapseNavbar);

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
  if ($(this).attr('class') != 'dropdown-toggle active' && $(this).attr('class') != 'dropdown-toggle') {
    $('.navbar-toggle:visible').click();
  }
});

