jQuery(function($){
	$('.callMe').click(function(e){
		socAuth.vk.weAreFriends().done(function(value){
			console.log(value);
		});
	});
});