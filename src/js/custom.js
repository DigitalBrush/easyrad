jQuery(function($) {

	$('.logo-carousel').owlCarousel({
		loop: true,
		margin: 10,
		responsiveClass: true,
		responsive: {
			0: {
				items: 2,
				nav: true
			},
			600: {
				items: 3,
				nav: false
			},
			1000: {
				items: 4,
				nav: true,
				loop: false
			}
		}
	});
	
	$('.press-carousel').owlCarousel({
		loop: true,
		margin: 10,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1,
			},
			600: {
				items: 1,
				nav: false
			},
			1000: {
				items: 1,
				nav: true,
				loop: false
			}
		}
	});
	
	$('#main-menu .dropdown a').children('.nav-link').addClass('dropdown-toggle');
	
	if (window.matchMedia("(max-width: 767px)").matches) {
		$('.category-section').addClass('owl-carousel owl-theme category-carousel');
	}

	function setupFlip(tick) {
		Tick.helper.interval(function() {
			tick.value;
		}, 1000);
	}
	
	$('body').scrollTop(0);
	$(window).scroll(function() {
		if ($(this).scrollTop() > 5) {
			$('.navbar').addClass('fixed-top sticky');
		} else {
			$('.navbar').removeClass('fixed-top sticky');
		}
	});
	
	
	
	if ($('.set_custom_images').length > 0) {
		if (typeof wp !== 'undefined' && wp.media && wp.media.editor) {
			$(document).on('click', '.set_custom_images', function(e) {
				e.preventDefault();
				var button = $(this);
				var id = button.prev();
				wp.media.editor.send.attachment = function(props, attachment) {
					id.val(attachment.url);
				};
				wp.media.editor.open(button);
				return false;
			});
		}
	}
	
	$("#contacttop").click(function() {
		$("#contactnumber").toggle();
	});
});

function myFunction() {
	var input, filter, cards, cardContainer, p, title, i;
	input = document.getElementById("myFilter");
	filter = input.value.toUpperCase();
	cardContainer = document.getElementById("myItems");
	cards = cardContainer.getElementsByClassName("card");
	for (i = 0; i < cards.length; i++) {
		title = cards[i].querySelector(".card-body p.card-text span");
		if (title.innerText.toUpperCase().indexOf(filter) > -1) {
			cards[i].style.display = "";
		} else {
			cards[i].style.display = "none";
		}
	}
}