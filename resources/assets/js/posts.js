var Posts = {

	init : function() {

		$('#SaveButton').on('click', function() {

			var name = $("input[name='title']").val(),
				desc = $("textarea[name='desc']").val(),
				images = $("div#item_images").find("input[type='hidden']"),
				_token = $("input[name='_token']").val();
				imagesIds = [];

			images.each(function( item ) {
				
				imagesIds.push( $(this).val() );
			});

			$.ajax({
				method : "POST",
				url : "/posts/create",
				data : {
					title : name,
					description : desc,
					imagesIds : JSON.stringify(imagesIds),
					_token : _token,
				},
				success : function(response) {
					console.log( response );
				}
			});
		});
	},
};

Posts.init();