var socAuth = (function(lib, $){

	'use strict';

	lib.net = function(params){
		this.name		= params.name || 'net';
		this.apiUrl		= params.apiUrl;
		this.needSDK	= params.needSDK || false;
		this.srcSDK		= params.srcSDK;
		this.loadedSDK	= function(){};
		this.init		= function(){};
		var _this		= this;

		if (this.needSDK && this.srcSDK) {
			this.loadedSDK = $.ajax({
				url: this.srcSDK,
				dataType: 'script'
			});
		}
		console.log('Component socAuth.' + this.name + ' has been included');
	};

	lib.moduleStorage = {
		get vk() {
			return 'authLibVK.js';
		}
	};

	Object.defineProperty(lib, 'include', {
		get: function(){
			return function(moduleName, moduleFile, opts) {
				$.ajax({
					url: moduleFile,
					dataType: 'script'
				}).done(function(){
					lib[moduleName].init(opts);
				});
			};
		}
	});

	return lib;

})(socAuth || {}, jQuery);