//active menu items

$(function () {
    var location = window.location.href;
    var cur_url = '/' + location.split('/').pop();
        
 
   $('.menu__menu-links div').each(function () {
        var link = $(this).find('a').attr('href');
        var link1 = '/' + link.split('/').pop();
 		
 		if (cur_url == "/contact_form?") {
 			cur_url = "/contact";
	 		if (cur_url == link1){
	            $(this).addClass('current');    
	    	}
 		} else if (cur_url == "/1" || cur_url == "/2" || cur_url == "/3" || cur_url == "/4" || cur_url == "/5" || cur_url == "/6"){
 			cur_url = "/notes";
 			if (cur_url == link1){
	            $(this).addClass('current');    
	    	}
 		} else {
 			if (cur_url == link1){
	            $(this).addClass('current');    
	    	}
 		}

    });
});

//active menu items end