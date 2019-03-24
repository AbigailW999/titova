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

//img form

$(function () {

	 
	 $('.closeButton').bind('click', function(){
		  $(".modal").css(
	    	{'display': 'none'}
			);
		  $(".img_button").css(
	    	{'display': 'block'}
			);
	});

	$('.img_button').bind('click', function(){
		var id = $(this).attr("data-id");
		var img_width = $('#ph'+id).width();
		var img_height = $('#ph'+id).height();
		console.log(img_height);

		$('#'+id).css(
	    	{'display': 'block','width': img_width, 'height': img_height}
			);
		  $(".img_button").css(
	    	{'display': 'none'}
			);
	});

});

//img form end


//slider
$(function () {
   
   $('.photo').bind('click', function(){
   		var id = $(this).attr("data-id2");
   		var windowWidth = window.innerWidth;
		var windowHeight = window.innerHeight;

	   		$('.h'+id).css(
	    	{'position': 'fixed',
	    	'top':'0',
	    	'left':'0',
	    	'width':windowWidth,
	    	'height':windowHeight,
	    	'zIndex':'100', 
	    	'backgroundColor':'white',
	    	}
		);
   		$('#ph'+id).css(
	    	{'width': 'auto',
	    	'height': windowHeight}
		);

   		var img_width2 = $('#ph'+id).width();
   		var margi_left_img_slider = (windowWidth/2)-(img_width2/2);
   		$('#ph'+id).css(
	    	{'marginLeft': margi_left_img_slider}
		);
		$('#'+id).css(
	    	{'marginLeft': margi_left_img_slider}
		);
		var margi_left_img_button = (margi_left_img_slider+img_width2)-65;
		$('.img_button').css(
	    	{'left': margi_left_img_button}
		);
		var top_for_but = (windowHeight/2)-30;
		$('#butL'+id).css(
	    	{'display': 'block',
	    	'width': '60px',
	    	'height':'60px',
	    	'position':'absolute',
	    	'left':'26px',
	    	'top': top_for_but,
	    	'backgroundImage':'url(/img/left.png)'
	    	}
		);
		$('#butL'+id).hover(function() {
		  	$(this).css({
		  	'backgroundImage':'url(/img/left_activ.png)'
			  });
			},
		function() {
			$(this).css({
			  	'backgroundImage':'url(/img/left.png)'
			});
		});


		$('#butR'+id).css(
	    	{'display': 'block',
	    	'width': '60px',
	    	'height':'60px',
	    	'position':'absolute',
	    	'top': top_for_but,
	    	'right':'26px',
	    	'backgroundImage':'url(/img/right.png)'
	    	}
		);
		$('#butR'+id).hover(function() {
		  	$(this).css({
		  	'backgroundImage':'url(/img/right_activ.png)'
			  });
			},
		function() {
			$(this).css({
			  	'backgroundImage':'url(/img/right.png)'
			});
		});






		$('#butR'+id).bind('click', function(){
			id = +id+1;
			



		var windowWidth = window.innerWidth;
		var windowHeight = window.innerHeight;

   		$('.h'+id).css(
	    	{'position': 'fixed',
	    	'top':'0',
	    	'left':'0',
	    	'width':windowWidth,
	    	'height':windowHeight,
	    	'zIndex':'100', 
	    	'backgroundColor':'white',
	    	}
		);
   		$('#ph'+id).css(
	    	{'width': 'auto',
	    	'height': windowHeight}
		);

   		var img_width2 = $('#ph'+id).width();
   		var margi_left_img_slider = (windowWidth/2)-(img_width2/2);
   		$('#ph'+id).css(
	    	{'marginLeft': margi_left_img_slider}
		);
		$('#'+id).css(
	    	{'marginLeft': margi_left_img_slider}
		);
		var margi_left_img_button = (margi_left_img_slider+img_width2)-65;
		$('.img_button').css(
	    	{'left': margi_left_img_button}
		);
		var top_for_but = (windowHeight/2)-30;
		$('#butL'+id).css(
	    	{'display': 'block',
	    	'width': '60px',
	    	'height':'60px',
	    	'position':'absolute',
	    	'left':'26px',
	    	'top': top_for_but,
	    	'backgroundImage':'url(/img/left.png)'
	    	}
		);
		$('#butL'+id).hover(function() {
		  	$(this).css({
		  	'backgroundImage':'url(/img/left_activ.png)'
			  });
			},
		function() {
			$(this).css({
			  	'backgroundImage':'url(/img/left.png)'
			});
		});


		$('#butR'+id).css(
	    	{'display': 'block',
	    	'width': '60px',
	    	'height':'60px',
	    	'position':'absolute',
	    	'top': top_for_but,
	    	'right':'26px',
	    	'backgroundImage':'url(/img/right.png)'
	    	}
		);
		$('#butR'+id).hover(function() {
		  	$(this).css({
		  	'backgroundImage':'url(/img/right_activ.png)'
			  });
			},
		function() {
			$(this).css({
			  	'backgroundImage':'url(/img/right.png)'
			});
		});

		

		});

	});
});

//slider end


//adaptiv
$(function () {
	function mediaSize() {
		if (window.matchMedia('(min-width:671px) and (max-width:1020px)').matches){
			var offset = $('.contact_link').offset();
			var inst_link_left = offset.left + 125;
			console.log(inst_link_left);
		    $('.menu__instagram').css({'left': inst_link_left});

		    $('.logo_img').html('<img src="img/logo2.png" alt="DARIA TITOVA">');
		    
		};
	};

	mediaSize();
	window.addEventListener('resize', mediaSize, false);  
});
//adaptiv end

