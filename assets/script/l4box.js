/**
 * l4box	
 **/
$(function() {

  	if( $('.overlay').length == 0 ){
	    $('body').append('<div class="overlay"></div>');
	} 

	// use .toggleov to show popup box on an black overlay
	$(".toggleov").click(function() {
    	$('.overlay').show();
    	var id  = $(this).attr('name');
    	var $box = $('body').find('#'+id);
    	$box.toggle();
		$box.is(":visible") ? window.location.hash = id : window.location.hash = '';
    });

	// use .toggle to show only popup
    $(".toggle").click(function() {
    	var id  = $(this).attr('name');
    	var $box = $('body').find('#'+id);
    	$box.toggle();
		$box.is(":visible") ? window.location.hash = id : window.location.hash = '';
    });


    $(".close").click(function() {
    	$(this).parents('.box').hide();
    	$('.overlay').hide();
    	window.location.hash = '';
    });

    $('.box .tabbar li').click(function() {
    	$this = $(this);
	    $this.addClass('selected').siblings().removeClass('selected');
	    $(".tab").hide().eq($(this).index()).show();
	       return false;
    });

    // Get all boxes ids
    var ids = $(".box")         
	  .map(function() { return this.id; }) 
	  .get();
	// if #box is called on pageload - show box
    var hash = window.location.hash.split("#")[1];
    if($.inArray(hash, ids) !=-1) {
        $("#"+hash).show();
        $('.overlay').show();
    }

})