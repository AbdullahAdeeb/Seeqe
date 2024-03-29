jQuery(document).ready(function(){

	$('#contactform').submit(function(){

		var action = $(this).attr('action');

		$("#message").slideUp(750,function() {
		$('#message').hide();

 		$('#submit')
			.after('<img src="assets/ajax-loader.gif" class="loader" />')
			.attr('disabled','disabled');

		$.post(action, {
			name: $('#name').val(),
			email: $('#email').val(),
			description: $('#description').val(),
		},
			function(data){
				document.getElementById('message').innerHTML = data;
				$('#message').slideDown('fast');
				$('#contactform img.loader').fadeOut('fast',function(){$(this).remove()});
				$('#submit').removeAttr('disabled');
				if(data.match('success') != null) {
					 $('#contactform').slideUp('fast');
					setTimeout(function() {
						$('#getstarted').modal('hide');
						$('.modal-backdrop').removeClass('in').addClass('out');
					}, 2000);


				}

			}
		);

		});

		return false;

	});

});
