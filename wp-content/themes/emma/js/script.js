jQuery(document).ready(function($){
	$('#trigger').click(function(e){
		e.preventDefault();
		$('nav').slideDown('fast');
	});
	$('#cerrarmenu').click(function(e){
		e.preventDefault();
		$('nav').slideUp('fast');
	});
	
/*	$("nav ul.menu li").mouseover(function () { //When trigger is hovered...
        $(this).children("ul.submenu").stop().slideDown('fast');
        console.log('hover')
    }, function () {
        $(this).children("ul.submenu").stop().slideUp('slow');
        console.log('bye');
    });
    */
});