$(document).ready(function(){

<<<<<<< HEAD
=======
$('.slideshow').click(function() {
//load default
$('#theTarget').load('#slideshow ', slideshow_apply);
>>>>>>> 2b70dc558bca27658d07ce8ed64c261f54e108a3
/*-------------------------------------
| Pinned Navigation
-------------------------------------*/
var pin_state = 'scroll';

var nav_height = 70;
<<<<<<< HEAD
var main_offset = $('#main').offset().top;
var nav_offset = main_offset - nav_height;
=======

var body_offset = $('#main').offset();

var nav_offset =body_offset - nav_height;
>>>>>>> 2b70dc558bca27658d07ce8ed64c261f54e108a3


function pinned_nav() {
	// how far scrolled from top
	var howFar = $(window).scrollTop();

	// console.log('Nav Offset:' + nav_offset);
	// console.log('Dist Scrolled:' + howFar);

	if (howFar >= nav_offset)
	{
		pin_state = 'pinned';
		$('body').addClass('pinned');
	}
	else
	{
		pin_state = 'scrolled';
		$('body').removeClass('pinned');
	}
}


$(window).scroll(pinned_nav);


/*-------------------------------------
| Chosen One State
-------------------------------------*/
function chosen_one() {
<<<<<<< HEAD
	var sect1_top = $('#sect1').offset().top - nav_height;
	var sect2_top = $('#sect2').offset().top - nav_height;
	var sect3_top = $('#sect3').offset().top - nav_height;
	var sect4_top = $('#sect4').offset().top - nav_height;
	var sect5_top = $('#sect5').offset().top - nav_height;
=======
	var sect1_top = $('#sect1').offset() - nav_height;
	var sect2_top = $('#sect2').offset() - nav_height;
	var sect3_top = $('#sect3').offset() - nav_height;
	var sect4_top = $('#sect4').offset() - nav_height;
	var sect5_top = $('#sect5').offset() - nav_height;
>>>>>>> 2b70dc558bca27658d07ce8ed64c261f54e108a3

	// how far scrolled from top
	var howFar = $(window).scrollTop();


	$('#mainmenu a').removeClass('chosen'); //blanket removal

	if (howFar < sect2_top)
	{
		$('#mainmenu a:eq(0)').addClass('chosen');
	}
	else if (howFar >= sect2_top && howFar < sect3_top)
	{
		$('#mainmenu a:eq(1)').addClass('chosen');
	}
	else if (howFar >= sect3_top && howFar < sect4_top)
	{
		$('#mainmenu a:eq(2)').addClass('chosen');
	}
	else if (howFar >= sect4_top && howFar < sect5_top)
	{
		$('#mainmenu a:eq(3)').addClass('chosen');
	}
	else if (howFar >= sect5_top)
	{
		$('#mainmenu a:eq(4)').addClass('chosen');
	}

}
chosen_one(); //when page first loads
$(window).scroll(chosen_one); 
$(window).resize(chosen_one);

/*-------------------------------------
| Animated Scroll
-------------------------------------*/
function animate_scroll(event) {
	event.preventDefault(); //thanks we will take it from here.

	// determine section
	var whichSect = $(this).attr('href');

	// get offset of our destination
<<<<<<< HEAD
	var scroll_destination = $(whichSect).offset().top - nav_height;
=======
	var scroll_destination = $(whichSect).offset() - nav_height;
>>>>>>> 2b70dc558bca27658d07ce8ed64c261f54e108a3

	// scroll window. have to use html and body for widest browser reach
	$('html, body').animate({scrollTop : scroll_destination}, 1000);
}

$('#mainmenu a').click(animate_scroll);



/*-------------------------------------
| Hamburger Menu Behaviors
-------------------------------------*/
var menu_state = 'hidden';

function menu_manage() {
	// get window size
	var winWidth = $(window).innerWidth();

	// change state based on window size
	if (winWidth > 800)
	{
		menu_state = 'visible';
		$('nav#mainmenu .glyphicon-menu-hamburger').hide();
		$('nav#mainmenu .menu').show();
	}
	else
	{
		menu_state = 'hidden';
		$('nav#mainmenu .glyphicon-menu-hamburger').show();
		$('nav#mainmenu .menu').hide();
	}

<<<<<<< HEAD
	console.log(menu_state);
=======
	{console.log(menu_state);
>>>>>>> 2b70dc558bca27658d07ce8ed64c261f54e108a3
}

menu_manage();
$(window).resize(menu_manage);
$(window).scroll(menu_manage);

/*-------------------------------------
| Hamburger Toggle
-------------------------------------*/
function hamburger_toggle() {
	if (menu_state == 'hidden')
	{
		menu_state = 'visible';
		$('nav#mainmenu .menu').show();
	}
	else
	{
		menu_state = 'hidden';
<<<<<<< HEAD
		$('nav#mainmenu .menu').hide();
	}
}

$('nav#mainmenu .glyphicon-menu-hamburger').click(hamburger_toggle);


}); /*here ends doc ready*/


=======
		$('nav#mainmenu .menu').hide();}

/*-------------------------
| 1. Slideshow
--------------------------*/
//slideshow------------------------------------------



/*-------------------------




				

			
					
				
	

				
			
>>>>>>> 2b70dc558bca27658d07ce8ed64c261f54e108a3



