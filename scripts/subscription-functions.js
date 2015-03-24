$(document).ready(function() {

	$('.js-subscription').on('click', function(e) {
		e.preventDefault;
		$('#modal').addClass('active');
	});
	$('.js-modal-close').on('click', function(e) {
		e.preventDefault;
		$('#modal').removeClass('active');
	});

	// Subscription Ajax
    $('#submit_button').click(function(e){
    	e.preventDefault();
    	// console.log('form submit');

    	if (! ($('#first-name').val())) {
    		e.preventDefault();
    		$('#first-name').addClass('error');
    	} else if (! ($('#last-name').val())) {
    		e.preventDefault();
    		$('#last-name').addClass('error');
    	} else if (! ($('#email').val())) {
    		e.preventDefault();
    		$('#email').addClass('error');
    	} else if (! ($('#state').val())) {
    		e.preventDefault();
    		$('#state').addClass('error');
    	} else if (! ($('#zip').val())) {
    		e.preventDefault();
    		$('#zip').addClass('error');
    	} else {
    		var post_url = '_modules/_subscription-process.php';
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