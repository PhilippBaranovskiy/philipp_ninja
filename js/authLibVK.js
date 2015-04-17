var socAuth = (function(lib, $){

	'use strict';

	lib.vk = new lib.net({
		name: 'vk',
		apiUrl: 'https://api.vk.com',
		needSDK: true,
		srcSDK: 'http://vk.com/js/api/openapi.js'
	});

	lib.vk.init = function(opts){
		this.weAreFriends = function(){
			var state = $.Deferred();
			this.getFriends(opts.authorID, state);
			return state.then(function(value){
				var is = false;
				value.forEach(function(item, index){
					if (item === opts.authorID) {
						is = true;
					}
				});
				return is;
			});
		};
		this.getFriends = function(authorID, state){
			if (VK._userStatus == 'connected') {
				VK.Api.call('friends.get', {user_id: 5837396}, function(friends){
					if (friends.response) {
						state.resolve(friends.response)
					} else {
						state.reject();
					};
				});
			} else {
				this.login( this.getFriends );
			}
		};
		this.login = function(callback){
			VK.Auth.login(function(authInfo){
				if (authInfo.session) {
					callback(authorID, state);
				}
			});
		};
		$.when(this.loadedSDK).done(function(appID){
			VK.init({
				apiId: 4776668
			});
		});
		console.log('VK module is ready to use.');
	};

	return lib;

})(socAuth || {}, jQuery);