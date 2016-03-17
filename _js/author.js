/*-------------------------
|
| AJAX HUB WORK
|
--------------------------*/
/*------------------------
|Navigation Selected State




/*-------------------------
|
| SHARED FUNCTIONS
|
--------------------------*/
/*-------------------------
| 1. Slideshow
--------------------------*/
//slideshow------------------------------------------
$('#mainmenu .slideshow').click(function() {

	// ajax load 
	$('#theTarget').load('#slideshow', slideshow_apply);
});

function slideshow_apply(){
var slideshow = $('#slideshow');

function slideshow_fade() {
	lastimg = slideshow.find('img:last');

	lastimg.delay(2000).animate({'opacity':'1'},1000, function(){
	lastimg.prependTo(slideshow).css({'opacity':'1'});
	slideshow_fade();
					});
				}

	slideshow_fade();
			}



/*-------------------------
| 2. Lightbox
--------------------------*/
$('#mainmenu .lightbox').click(function() {

	// ajax load
	$('#theTarget').load(' #lightbox', lightbox_apply);
});

function lightbox_apply(){

	var lightbox = $('#lightbox');

	lightbox.find('.images img').click(function(){
		var theSrc = $(this).attr('src');
		lightbox.find('.light img').attr('src',theSrc);
		lightbox.find('.light').show();
		lightbox.find('.dark').show();
	});

	lightbox.find('.dark, .light button').click(function(){
		lightbox.find('.light').hide();
		lightbox.find('.dark').hide();
	});
}

/*-------------------------
| 4. Swap
--------------------------*/
$('#mainmenu .swap').click(function() {

	// ajax load
	$('#theTarget').load('4-swap.html #swap', swap_apply);
});


function swap_apply(){
	var large = $('#swap img.large');

	$('#swap .thumbs img').mouseover(function(){
		var theSrc = $(this).attr('src');
		large.attr('src',theSrc);
	});
}






