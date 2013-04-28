jQuery.noConflict()(function($){

	$(document).ready(function() { 
	
$(".cpjr-tabs").each(function(){
		
		    $(this).find(".tab").hide();
		    $(this).find(".tab-menu li:first a").addClass("active").show();
		    $(this).find(".tab:first").show();
		
		});
		
		$(".cpjr-tabs").each(function(){
		
		    $(this).find(".tab-menu a").click(function() {
		
		        $(this).parent().parent().find("a").removeClass("active");
		        $(this).addClass("active");
		        $(this).parent().parent().parent().parent().find(".tab").hide();
		        var activeTab = $(this).attr("href");
		        $(activeTab).fadeIn();
		        return false;
		
		    });
		
		});
	});

});