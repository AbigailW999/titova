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
		$('.contact_form_file-name').append('<a href="#"><img src="img/close_form_button.svg"></a>');
		$('.contact_form_file-name a').css({'position': 'absolute','right':'0'});
		$('.contact_form_button').css(
	    	{'margin-top': '43px'}
		);
		$('.contact_upload_container img').css({'marginRight':'0'});



		$('.contact_form_file-name a').on('click', function(){
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
			$('.contact_upload_container img').css({'marginRight':'8px'});
		});

	});
	/* upload input value end */

});

/* message form active button */

function checkParams() {
    var em_ph = $('#em_ph_form_mmessage').val();
    
    if(em_ph.length <= 5) {
        $('#submit').attr('disabled', 'disabled');
    } else {
        $('#submit').removeAttr('disabled');
        $('#submit').css({'backgroundColor':'#2F3541','color':'white'});
        $( "#submit" ).hover(
	  		function() {
			    $( this ).css({'backgroundColor':'#000000'});
			}, function() {
			    $( this ).css({'backgroundColor':'#2F3541'});
			}
		);
    }
}

/* message form active button end */


/* form validation */
jQuery(function($) {
  $('#form_message').on('submit', function(event) {
    if ( validateForm() ) { // если есть ошибки возвращает true
      event.preventDefault();
    }
  });
  
  function validateForm() {
    $(".text-error").remove();
    
    // Check name   
    var el_l = $("#name_form_message");
    if ( el_l.val().length < 2 ) {
      var v_login = true;
      el_l.after('<span class="text-error for-name">Имя должно быть больше 1 символа</span>');
      $('.text-error for-name').css({top: el_l.position().top + el_l.outerHeight() + 2});
      $('#name_form_message').css({'borderColor':'#FD4B4B'});
      $('#label_name_form_message').css({'color':'#FD4B4B'});
    } 
    $("#name_form_message").toggleClass('error', v_login );
    
    // Check email and phone
    
    var reg     = /(^((8|\+)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{5,10}$)|(^[a-z0-9\._]\w*@\w+\.[a-z]+$)/i;
    var el_e    = $("#em_ph_form_mmessage");
    var v_email = el_e.val()?false:true;
  
    if ( v_email ) {
      el_e.after('<span class="text-error for-email">Поле контактов обязательно к заполнению</span>');
      $(".text-error for-email").css({top: el_e.position().top + el_e.outerHeight() + 2});
    } else if ( !reg.test( el_e.val() ) ) {
      v_email = true;
      el_e.after('<span class="text-error for-email">Вы указали недопустимый email или номер телефона</span>');
      $('.text-error for-email').css({top: el_e.position().top + el_e.outerHeight() + 2});
      $('#em_ph_form_mmessage').css({'borderColor':'#FD4B4B'});
      $('#label_em_ph_form_mmessage').css({'color':'#FD4B4B'});
    }
    $("#em_ph_form_mmessage").toggleClass('error', v_email );
    
    
    return ( v_login || v_email );
  }
   
});
/* form validation */