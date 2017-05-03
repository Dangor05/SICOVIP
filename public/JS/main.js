$(document).ready(main);

var contador = 1;

function main () {
	$('.menu_bar').click(function(){
		if (contador == 1) {
			$('nav').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('nav').animate({
				left: '-100%'
			});
		}
	});

	// Mostramos y ocultamos submenus
	$('.submenu').click(function(){
		$(this).children('.children').slideToggle();
	});


}
$(function () {
	$(".dropdown").hover(
		function(){
			$('.dropdown-menu',this.stop(true,true).fadeIn("fast");
				$(this).toggleClass('open');
				$('b',this)toggleClass("caret caret-up");
				)
		},
		function()
		{
			$('dropdown-menu',this).stop(true,true).fadeOut("fast");
			$(this).toggleClass('open');
			$('b',this).toggleClass("caret caret-up");
		}

		);
});
