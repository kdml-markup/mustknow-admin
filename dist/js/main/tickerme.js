/*!
 * jQuery Tickerme Plugin v1.0
 */

(function($){

	$.fn.tickerme = function(options) {

		var opts = $.extend( {}, $.fn.tickerme.defaults, options );

		return this.each(function(){

			var ticker = $(this);
//			var control_styles = '<style type="text/css">#newscontent{float:left}#news{display:none}#controls{float:right;height:16px}.icon{display:inline-block;width:16px;height:16px;fill:'+opts.control_colour+'}.icon:hover{fill:'+opts.control_rollover+'}</style>';
			// Array to contain news contents:
			var contents = [];
			var position = -1;
			var timer;

			init();

			/* Initialise */

			function init() {

				// Hide all:
				$(ticker).hide();
//
//				// Create the buttons:
//				$('body').prepend(control_styles);

				var controls = '<div id="ticker_container">';
				controls += '<div id="newscontent"><div id="news"></div></div>';
				controls += '<div id="controls">';
				controls += '<a href="#" id="prev_trigger">이전</a>';
				controls += '<a href="#" id="next_trigger">다음</a>';
				controls += '</div>';
				controls += '</div>';
				$(controls).insertAfter(ticker);

				// Load up the array:
				$(ticker).children().each(function(i){
					contents[i] = ($(this).html());
				});

				load_container();
			}

			/* load_container */

			function load_container() {

				if (position == (contents.length - 1)) {
					position = 0;
				} else {
					position++;
				}		
				// Fade out the current item, replace it with the next one, and fade it in:
				if (opts.type == 'fade') {
					$('#news').fadeOut(opts.fade_speed,function(){
						$('#newscontent').html('<div id="news">'+contents[position]+'</div>');
						$('#news').fadeIn(opts.fade_speed);
					});
				}
				timer = setTimeout(load_container,opts.duration);
			}

			/* Control functions */

			$('a#pause_trigger').click(function() {
				clearTimeout(timer);
				$(this).hide();
				$('#play_trigger').show();
				return false;
			});

			$('a#play_trigger').click(function(){
				load_container();
				$(this).hide();
				$('#pause_trigger').show();
				return false;
			});

			$('a#prev_trigger').click(function(){
				if (position == 0) {
					position = (contents.length - 1);
				} else {
					position--;
				}
				$('#newscontent').html('<div id="news" style="display:block">'+contents[position]+'</div>');
				if (opts.auto_stop) $('a#pause_trigger').trigger('click');
				return false;
			});

			$('a#next_trigger').click(function(){
				if (position == (contents.length - 1)) {
					position = 0;
				} else {
					position++;
				}
				$('#newscontent').html('<div id="news" style="display:block">'+contents[position]+'</div>');
				if (opts.auto_stop) $('a#pause_trigger').trigger('click');
				return false;
			});

		});

	};

	$.fn.tickerme.defaults = {
		fade_speed: 500,
		duration: 3000,
		auto_stop: true,
		type: 'fade',
		control_colour: '#333333',
		control_rollover: '#666666'
	};

}(jQuery));