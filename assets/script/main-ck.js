/* main.js *//**
 * l4box	
 **/$(function(){$(".overlay").length===0&&$("body").append('<div class="overlay"></div>');$(".toggleov").click(function(){$(".overlay").show();var e=$(this).attr("name"),t=$("body").find("#"+e);t.toggle();t.is(":visible")?window.location.hash=e:window.location.hash=""});$(".toggle").click(function(){var e=$(this).attr("name"),t=$("body").find("#"+e);t.toggle();t.is(":visible")?window.location.hash=e:window.location.hash=""});$(".close").click(function(){$(this).parents(".l4box").hide();$(".overlay").hide();window.location.hash=""});$(".l4box .tabbar li").click(function(){var e=$(this);e.addClass("selected").siblings().removeClass("selected");$(".tab").hide().eq($(this).index()).show();return!1});var e=$(".l4box").map(function(){return this.id}).get(),t=window.location.hash.split("#")[1];if($.inArray(t,e)!==-1){$("#"+t).show();$(".overlay").show()}});