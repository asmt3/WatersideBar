$(function(){
	
	// hide the event elaboration
	$('#music-list dd ul').hide();
		
	// show the more buttons
	$('#music-list a.more').show();
	
	// show the first
	$('#music-list dd ul:first').show();
	$('#music-list a.more:first').hide();
	
	// handle more click
	$('#music-list a.more').click(function(){
		// hide link
		$(this).hide();
		
		// show info
		$(this).parent('dd').children('ul').slideDown();
		
		return false;
	});
});