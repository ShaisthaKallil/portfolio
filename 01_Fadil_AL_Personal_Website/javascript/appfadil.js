
var main = function(){
	
	/*hides the overlay and flip menu*/
	$('#overlay').hide();
	$('#flipNav').hide();
	
	/*adds style to loader*/
	$(".fakeloader").css("opacity",0.5);
	
	/*Loader execution*/
	$(".fakeloader").fakeLoader({

		timeToHide:2000, //Time in milliseconds for fakeLoader disappear1200
		
		zIndex:"999",//Default zIndex
		/*spinner:"spinner6", */  /*Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 	
								'spinner6', 'spinner7'*/
		
								
		bgColor:"blue", //Hex, RGB or RGBA colors
		
	/*imagePath:"../images/logo.png"*/
	});
	
	/*Flip menu in home page*/
	$('#menuIcon').click(function(e){
		e.preventDefault();
		$('#overlay').fadeToggle();
		$('#flipNav').slideToggle();
	});
	
	/*Flip menu in subsequent pages*/
   $('.subNav').hide();
   $('.menusubIcon').click(function(e){
	   e.preventDefault();
	   $('#overlay').fadeToggle();
	   $('.subNav').slideToggle();
	   
   });
   
    /*scrollbar execution*/
		jQuery(function($) {
			$('#frame').sly({
			vertical: 1,

			itemNav: 'forceCentered',
			smart: 1,
			activateOn: 'click',

			scrollBy: 1,

			mouseDragging: 1,
			swingSpeed: 0.2,

			scrollBar: $('#scrollbar'),
			dragHandle: 1,

			speed: 300,
			startAt: 2
  });

});
 $('.job #scrollbar').hide();
	   $('.job #frame').hide();
	
   /*Job Experience Flip Description*/
   $('.job').click(function(e){
	   e.preventDefault();
	   $('.job').removeClass('current');
	   $('.job #scrollbar').hide();
	   $('.job #frame').hide();
	   $('.jobDutyDesc').hide();
	   $(this).addClass('current');
	   
	   $(this).children('.job #scrollbar').show("fast");
	   $(this).children('.job #frame').show("fast");
	   $(this).children('.jobDutyDesc').show("fast");
   });
};


$(document).ready(main);