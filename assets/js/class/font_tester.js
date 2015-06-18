var font_tester = function(button){
	var self = this;

	this.init = function(){
		self.elem = $('[contentEditable]');
		self.elem.each(function(){

			var t = $(this);
			t.toolbox();

			t.parent().find('aside').on('click', function(){
				$(this).toggleClass('expand');
				t.find('.expand').slideToggle();
			});
		});
	},

	this.bind_upload = function(){
		button.on('click',function(){
			var t = $(this);
			t.addClass('open');

			Dropbox.choose({  // @see https://www.dropbox.com/developers/dropins/chooser/js
				// Required. Called when a user selects an item in the Chooser.
				success: function(files){
					var url = files[0].link.split("https://").pop();
					document.location.hash = url;
					t.removeClass('open');
					load_font(url);
				},

				// Optional. Called when the user closes the dialog without selecting a file
				// and does not include any parameters.
				cancel: function(){
					t.removeClass('open');
				},

				// Optional. "preview" (default) is a preview link to the document for sharing,
				// "direct" is an expiring link to download the contents of the file. For more
				// information about link types, see Link types below.
				linkType: "direct", //@see https://blogs.dropbox.com/developers/2013/08/programmatically-download-content-from-share-links/

				// Optional. A value of false (default) limits selection to a single file, while
				// true enables multiple file selection.
				multiselect: false, // or true

				// Optional. This is a list of file extensions. If specified, the user will
				// only be able to select files with these extensions. You may also specify
				// file types, such as "video" or "images" in the list. For more information,
				// see File types below. By default, all extensions are allowed.
				extensions: ['.ttf', '.otf', '.eot', '.woff']
			});

		});
	}

	this.init();
	this.bind_upload();
}

jQuery.fn.toolbox = function(){
	var elem = $('<aside class="toolbox easing"></aside>');
		// elem.append('<span class="button size-less">-</span>');
		elem.append('<span class="size">'+ parseInt( this.css('font-size') ) +'px</span>');
		// elem.append('<span class="button size-plus">+</span>');

		// elem.append('<div class="size">'+ parseInt( this.css('letter-spacing') ) +'px</div>');
		// elem.append('<div class="size">'+ parseInt( this.css('line-height') ) +'px</div>');

	this.parent().append(elem);
	return this;
}