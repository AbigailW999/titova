$(function () {

	/* upload input value */
	$('.contact_upload_container input').on('change', function() {
		var splittedFakePath = this.value.split('\\');
		$('.contact_form_file-name').text(splittedFakePath[splittedFakePath.length - 1]);
		$('.contact_upload_container label').css(
	    	{'display': 'none'}
		);
		$('.contact_form_file-name').css(
	    	{'display': 'block'}
		);
		$('.contact_form_file-name').append('<a href="#"><img src="img/close_form_button.png"></a>');


		$('.contact_form_file-name a').bind('click', function(){
			$('.contact_upload_container label').css(
		    	{'display': 'block'}
				);
			$('.contact_form_file-name').css(
		    	{'display': 'none'}
				);
			$('.contact_upload_container input').val('');
		});

	});
	/* upload input value end */
});