/* main.js */




/**
 * l4box	
 **/
$(function() {

	if( $('.overlay').length === 0 ){
		$('body').append('<div class="overlay"></div>');
	}

	// use .toggleov to show popup box on an black overlay
	$(".toggleov").click(function() {
		$('.overlay').show();
		var id  = $(this).attr('name');
		var $box = $('body').find('#'+id);
		$box.toggle();
		if($box.is(":visible")){
			window.location.hash = id ;
		}else{
			window.location.hash = '';
		}
	});

	// use .toggle to show only popup
	$(".toggle").click(function() {
		var id  = $(this).attr('name');
		var $box = $('body').find('#'+id);
		$box.toggle();
		if($box.is(":visible")){
			window.location.hash = id ;
		}else{
			window.location.hash = '';
		}
	});


	$(".close").click(function() {
		$(this).parents('.l4box').hide();
		$('.overlay').hide();
		window.location.hash = '';
	});

	$('.l4box .tabbar li').click(function() {
		var $this = $(this);
		$this.addClass('selected').siblings().removeClass('selected');
		$(".tab").hide().eq($(this).index()).show();
		return false;
	});

	// Get all boxes ids
	var ids = $(".l4box").map(function() { return this.id; }).get();
	// if #box is called on pageload - show box
	var hash = window.location.hash.split("#")[1];
	if($.inArray(hash, ids) !==-1) {
		$("#"+hash).show();
		$('.overlay').show();
	}

});