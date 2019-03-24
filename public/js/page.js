$(function () {
	
	/* upload input value */
	$('.contact_upload_container input').on('change', function() {
		var splittedFakePath = this.value.split('\\');
		$('.contact_form_file-name').text(splittedFakePath[splittedFakePath.length - 1]);
		$('.contact_upload_container label').css(
	    	{'display': 'none'}
		);
		$('.contact_form_file-name').css(
	    	{'display': 'block','width':'400px','position':'relative','color':'rgba(47, 53, 65, 0.5)','borderBottom':'1px solid #E5E5E5','paddingBottom':'10px'}
		);
		$('.contact_form_file-name').append('<a href="#"><img src="img/close_form_button.png"></a>');
		$('.contact_form_file-name a').css({'position': 'absolute','right':'0'});
		$('.contact_form_button').css(
	    	{'margin-top': '43px'}
		);


		$('.contact_form_file-name a').bind('click', function(){
			$('.contact_upload_container label').css(
		    	{'display': 'block'}
				);
			$('.contact_form_file-name').css(
		    	{'display': 'none'}
				);
			$('.contact_upload_container input').val('');
			$('.contact_form_button').css(
		    	{'margin-top': '62px'}
			);
		});

	});
	/* upload input value end */
});