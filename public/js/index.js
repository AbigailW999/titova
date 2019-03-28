var id_Glob = 0;
var photo_amount = $('.holder').length; 

//active menu items

$(function () {
    var location = window.location.href;
    var cur_url = '/' + location.split('/').pop();
        
 
   $('.menu__menu-links div').each(function () {
        var link = $(this).find('a').attr('href');
        var link = '/' + link.split('/').pop();
 		
 		if (cur_url == "/contact_form?") {
 			cur_url = "/contact";
	 		if (cur_url == link){
	            $(this).addClass('current');    
	    	}
 		} else if (cur_url == "/1" || cur_url == "/2" || cur_url == "/3" || cur_url == "/4" || cur_url == "/5" || cur_url == "/6"){
 			cur_url = "/notes";
 			if (cur_url == link){
	            $(this).addClass('current');    
	    	}
 		} else {
 			if (cur_url == link){
	            $(this).addClass('current');    
	    	}
 		}

    });

});


$(function () {
	var location2 = window.location.href;
    var cur_url2 = '/' + location2.split('/').pop();

	$('#menu_links_mobile div').each(function () {
        var link2 = $(this).find('a').attr('href');
        var link3 = '/' + link2.split('/').pop();

 		if (cur_url2 == "/contact_form?") {
 			cur_url2 = "/contact";
	 		if (cur_url2 == link3){
	            $(this).addClass('current');    
	    	}
 		} else if (cur_url2 == "/1" || cur_url2 == "/2" || cur_url2 == "/3" || cur_url2 == "/4" || cur_url2 == "/5" || cur_url2 == "/6"){
 			cur_url2 = "/notes";
 			if (cur_url2 == link3){
	            $(this).addClass('current');    
	    	}
 		} else {
 			if (cur_url2 == link3){
	            $(this).addClass('current');    
	    	}
 		}

    });

});
//active menu items end

//img form

$(function () {

	 
	 $('.closeButton').on('click', function(){
		  $(".modal").css(
	    	{'display': 'none'}
			);
		  $(".img_button").css(
	    	{'display': 'block'}
			);
	});

	$('.img_button').on('click', function(){
		var id = $(this).attr("data-id");
		var img_width = $('#ph'+id).width();
		var img_height = $('#ph'+id).height();

		$('#'+id).css(
	    	{'display': 'block','width': img_width, 'height': img_height}
			);
		  $('.img_button').css(
	    	{'display': 'none'}
			);

	});

});

//img form end


//SLIDER console.log('id_Glob = '+id_Glob);

$(function SliderStart() {
   
   $('.photo').on('click', function(){//Открытие слайдера по нажатию на фотографию

   		//Начало стилей для открытия слайдера с первой фоткой
   		var id = $(this).attr("data-id2");
   		id_Glob = id;
   		var windowWidth = window.innerWidth;
		var windowHeight = window.innerHeight;

	   		$('.h'+id).css(
	    	{'position': 'fixed',
	    	'top':'0',
	    	'left':'0',
	    	'width':windowWidth,
	    	'height':windowHeight,
	    	'zIndex':'100', 
	    	'backgroundColor':'white'
	    	}
		);

	   	$('html').css({'overflow-y':'hidden'});

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
		var margi_left_img_button = (margi_left_img_slider+img_width2)-75;
		$('.block').css(
	    	{'left': margi_left_img_button}
		);
		//$('.block').css({'left': margi_left_img_button,'bottom':'15px'});

		$('.slider_buttons_boxL, .slider_buttons_boxR, .slider_close_but').css({
			'display':'flex',
			'position':'fixed'
		});

		//Конец стилей для открытия слайдера с первой фоткой
		ButtonR();
		ButtonL();

	});
});

//buttonR

function ButtonR(){


	$('#butR').on('click', function(){ //функция нажатия на правую кнопку
			var id_prev = +id_Glob;
			var id_next = +id_Glob+1;
			if (id_next == +photo_amount+1) {
				id_next = 1;
			}
		//close prev
		$('.h'+id_prev).css({
			'display':'none'
		});
			//open next
			var windowWidth = window.innerWidth;
			var windowHeight = window.innerHeight;

	   		$('.h'+id_next).css(
		    	{'display':'block',
		    	'position': 'fixed',
		    	'top':'0',
		    	'left':'0',
		    	'width':windowWidth,
		    	'height':windowHeight,
		    	'zIndex':'100', 
		    	'backgroundColor':'white',
		    	}
			);
	   		$('#ph'+id_next).css(
		    	{'width': 'auto',
		    	'height': windowHeight}
			);

	   		var img_width2 = $('#ph'+id_next).width();
	   		var margi_left_img_slider = (windowWidth/2)-(img_width2/2);
	   		$('#ph'+id_next).css(
		    	{'marginLeft': margi_left_img_slider}
			);
			$('#'+id_next).css(
		    	{'marginLeft': margi_left_img_slider}
			);

		id_Glob = +id_next;
		console.log(id_Glob+' RIGHT');	
	});
	
};
//buttonL
function ButtonL(){

	
	$('#butL').on('click', function(){ //функция нажатия на левую кнопку
				
			var id_prev_L = +id_Glob;
			var id_next_L = +id_Glob-1;
			if (id_next_L == 0) {
				id_next_L = photo_amount;
			}
			//close prev
			$('.h'+id_prev_L).css({
				'display':'none'
			});
				//open next
			var windowWidth = window.innerWidth;
			var windowHeight = window.innerHeight;

	   		$('.h'+id_next_L).css(
		    	{'display':'block',
		    	'position': 'fixed',
		    	'top':'0',
		    	'left':'0',
		    	'width':windowWidth,
		    	'height':windowHeight,
		    	'zIndex':'100', 
		    	'backgroundColor':'white',
		    	}
			);
	   		$('#ph'+id_next_L).css(
		    	{'width': 'auto',
		    	'height': windowHeight}
			);

	   		var img_width2 = $('#ph'+id_next_L).width();
	   		var margi_left_img_slider = (windowWidth/2)-(img_width2/2);
	   		$('#ph'+id_next_L).css(
		    	{'marginLeft': margi_left_img_slider}
			);
			$('#'+id_next_L).css(
		    	{'marginLeft': margi_left_img_slider}
			);
			
			id_Glob = +id_next_L;
		});
	
};


//SLIDER END


//adaptiv
$(function () {
	function mediaSize() {
		if (window.matchMedia('(min-width:671px) and (max-width:1020px)').matches){
			var offset = $('.contact_link').offset();
			var inst_link_left = offset.left + 125;
		    $('.menu__instagram').css({'left': inst_link_left});
		    $('.logo_img').html('<img src="img/logo2.svg" alt="DARIA TITOVA">');
		} else {
			
		};

		if (window.matchMedia('(max-width:670px)').matches){
			
		};
	};

	mediaSize();
	window.addEventListener('resize', mediaSize, false);  
});
//adaptiv end

