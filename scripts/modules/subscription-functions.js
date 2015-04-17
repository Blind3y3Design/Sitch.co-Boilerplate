$(document).ready(function() {

	$('.js-subscription').on('click', function(e) {
		e.preventDefault;
		$('#modal').addClass('active');
		$('#modal #subscription-form').addClass('active');
	});
	$('.js-modal-close').on('click', function(e) {
		e.preventDefault;
		$('#modal').removeClass('active');
		$('#modal').children().removeClass('active');
	});

	// Subscription Ajax
    $('#subscription .submit_button').click(function(e){
    	e.preventDefault();
    	// console.log('form submit');

    	if (! ($('#subscription .first-name').val())) {
    		e.preventDefault();
    		$('#subscription .first-name').addClass('error');
    	} else if (! ($('#subscription .last-name').val())) {
    		e.preventDefault();
    		$('#subscription .last-name').addClass('error');
    	} else if (! ($('#subscription .email').val())) {
    		e.preventDefault();
    		$('#subscription .email').addClass('error');
    	} else if (! ($('#subscription .state').val())) {
    		e.preventDefault();
    		$('#subscription .state').addClass('error');
    	} else if (! ($('#subscription .zip').val())) {
    		e.preventDefault();
    		$('#subscription .zip').addClass('error');
    	} else {
    		var post_url = '_modules/modal/subscription/_subscription-process.php';
	        $.ajax({
	            type : 'POST',
	            url : post_url,
	            data: $('#subscription').serialize(), //ID of your form
	            dataType : 'html',
	            async: true,
	            beforeSend:function(){
	                //add a loading gif so the broswer can see that something is happening
	                // $('#modal_content').html('<div class="loading"><img scr="loading.gif"></div>');
	            },
	            success : function(data){
	            	$('#modal').removeClass('active');
	            	$('.subscription-input').removeClass('error');
	                $('#subscription')[0].reset();
	            },
	            error : function() {
	            	alert('error');
	            }
	        });	
    	};
    });
});