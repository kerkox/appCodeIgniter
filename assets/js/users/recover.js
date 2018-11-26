(function($){
	$("#loginForm").submit(function(event){

		$('#WarningModalhdbgcl').modal('show');

		function hide_components(key)
		{
			if(key == 0)
			{
				$('#WarningModalhdbgcl').modal('hide');
			}

			$("#email").attr('class', 'form-group');
			$("#email > span").css("display", "none");
			$("#error > div").css("display", "none");
		}

		event.preventDefault();

		$.ajax({
			'url': '../users/validate_recover',
			'type': 'POST',
			'data': $(this).serialize(),
			success: function(data)
			{
				hide_components(1);
				var json = JSON.parse(data);
				window.location.replace(json.url);
			},
			statusCode: 
			{
				400: function(xhr)
				{
					hide_components(0);

					var user = JSON.parse(xhr.responseText);

					if(user.email.length != 0)
					{
						$("#email").attr('class', 'form-group-inner input-with-error');
						$("#email > span").html(user.email).removeAttr("style");
					}
				},
				401: function(xhr)
				{
					hide_components(0);

					var user = JSON.parse(xhr.responseText);
					
					if(user.msj.length != 0)
					{
						$("#error").
							html(
								'<div class="alert alert-danger" role="alert"><button id="button-error" type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><span>'+ user.msj +'</span></div>'
							);
					}
				},
			} 
		});
	});
})(jQuery)