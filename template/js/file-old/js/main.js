jQuery.noConflict();


// preloader
jQuery(document).ready(function () {
    jQuery("body.preloader").queryLoader2({
	    backgroundColor: "#fff",	 //Background color of the loader (in hex).
	    barColor: "#4394a3",	 //Background color of the bar (in hex).
	    barHeight: 5,	 //Height of the bar in pixels. Default: 1
	    deepSearch: true,	 //Set to true to find ALL images with the selected elements. If you don't want queryLoader to look in the children, set to false. Default: true.
	    percentage: true,	 //Set to true to enable percentage visualising. Default is false.
	    completeAnimation: "fade", //Set the animation type at the end. Options: "grow" or "fade". Default is "fade".
	    onComplete: function(){
		    jQuery("#ct_preloader").fadeOut(600);
	    }
    });
});

jQuery(document).ready(function () {
	// init video page
	if (jQuery().mb_YTPlayer) {
     jQuery(".videoPlayer").mb_YTPlayer();

		jQuery('.videoPlayer').on("YTPStart",function(){
			jQuery("#ct_preloader").fadeOut(600);
		})

	}
 });


/* link smooth scroll to top */
function scrollToTop(i) {
	if (i == 'show') {
		if (jQuery(this).scrollTop() != 0) {
			jQuery('#toTop').fadeIn();
		} else {
			jQuery('#toTop').fadeOut();
		}
	}
	if (i == 'click') {
		jQuery('#toTop').click(function () {
			jQuery('body,html').animate({scrollTop: 0}, 600);
			return false;
		});
	}
}

jQuery(document).ready(function () {
	scrollToTop('click');
});

jQuery(document).ready(function () {
	/* twitter */

	if (jQuery().tweet) {
		jQuery('.tweets').tweet({
			count: 1, //how many tweets?
			template: "{text} {time}",
			li_class: "tweetBox",
			twitter_api_url: 'twitter/proxy/twitter_proxy.php'
		});
	}
});

jQuery(window).scroll(function () {
	scrollToTop('show');
});

// ddslick select init

jQuery(document).ready(function () {
	jQuery("#archivesList").ddslick({
		width: 220,
		selectText: "Select.."
	});
});

<!-- mobile menu version 2 - select -->

selectnav('nav', {
	label: '- Navigation -',
	indent: '→'
});


<!-- full width slider init -->


jQuery(window).load(function () {

	jQuery('.flexslider.flexFull').flexslider({
		animation: "slide",              //String: Select your animation type, "fade" or "slide"
		easing: "easeInOutExpo",               //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
		// easing types :
		// swing, easeInQuad, easeOutQuad, easeInOutQuad, easeInCubic, easeOutCubic,
		// easeInOutCubic, easeInQuart, easeOutQuart, easeInOutQuart, easeInQuint,
		// easeOutQuint, easeInOutQuint, easeInSine, easeOutSine, easeInOutSine,
		// easeInExpo, easeOutExpo, easeInOutExpo, easeInCirc, easeOutCirc,
		// easeInOutCirc, easeInElastic, easeOutElastic, easeInOutElastic, easeInBack,
		// easeOutBack, easeInOutBack, easeInBounce, easeOutBounce, easeInOutBounce
		direction: "horizontal",        //String: Select the sliding direction, "horizontal" or "vertical"
		reverse: false,                 //{NEW} Boolean: Reverse the animation direction
		animationLoop: true,             //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
		smoothHeight: false,            //{NEW} Boolean: Allow height of the slider to animate smoothly in horizontal mode
		startAt: 0,                     //Integer: The slide that the slider should start on. Array notation (0 = first slide)
		slideshow: false,                //Boolean: Animate slider automatically
		slideshowSpeed: 7000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
		animationSpeed: 1000,            //Integer: Set the speed of animations, in milliseconds
		initDelay: 0,                   //{NEW} Integer: Set an initialization delay, in milliseconds
		randomize: false,               //Boolean: Randomize slide order

		// Primary Controls
		controlNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
		directionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)

		// Usability features
		pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
		pauseOnHover: true,            //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
		touch: true,                    //{NEW} Boolean: Allow touch swipe navigation of the slider on touch-enabled devices
		video: true,                   //{NEW} Boolean: If using video in the slider, will prevent CSS3 3D Transforms to avoid graphical glitches
		useCSS: true,                   //{NEW} Boolean: Slider will use CSS3 transitions if available


		// Secondary Navigation
		keyboard: true,                 //Boolean: Allow slider navigating via keyboard left/right keys
		multipleKeyboard: false,        //{NEW} Boolean: Allow keyboard navigation to affect multiple sliders. Default behavior cuts out keyboard navigation with more than one slider present.
		mousewheel: false,              //{UPDATED} Boolean: Requires jquery.mousewheel.js (https://github.com/brandonaaron/jquery-mousewheel) - Allows slider navigating via mousewheel

		// Callback API
		start: function () {
			jQuery(".flexslider.flexFull").removeClass("loading-slider");
		}
	});
});


jQuery(window).load(function () {


	/* clickable main parent item menu */
	jQuery("#nav li.dropdown > .dropdown-toggle").removeAttr("data-toggle data-target");


	/* img slider */
	jQuery("#slider1").responsiveSlides({
		auto: false,
		pager: true,
		nav: true,
		speed: 500,
		timeout: 4000,
		random: false,
		pause: false,
		pauseControls: true
	});


	/* blockquote slider */
	jQuery("#slider2").responsiveSlides({
		auto: false,
		pager: false,
		nav: true,
		speed: 500,
		timeout: 4000,
		random: false,
		pause: false,
		pauseControls: true
	});

});


/* colorbox init */
jQuery(document).ready(function () {

	jQuery('a.colorUp').colorbox({
		rel: 'gal',
		maxWidth: "95%"
	});

});


if (jQuery.Isotope) {


	// ISOTOPE INIT

	jQuery.Isotope.prototype._getCenteredMasonryColumns = function () {
		this.width = this.element.width();

		var parentWidth = this.element.parent().width();

		// i.e. options.masonry && options.masonry.columnWidth
		var colW = this.options.masonry && this.options.masonry.columnWidth || // or use the size of the first item
						this.$filteredAtoms.outerWidth(true) || // if there's no items, use size of container
						parentWidth;

		var cols = Math.floor(parentWidth / colW);
		cols = Math.max(cols, 1);

		// i.e. this.masonry.cols = ....
		this.masonry.cols = cols;
		// i.e. this.masonry.columnWidth = ...
		this.masonry.columnWidth = colW;
	};

	jQuery.Isotope.prototype._masonryReset = function () {
		// layout-specific props
		this.masonry = {};
		// FIXME shouldn't have to call this again
		this._getCenteredMasonryColumns();
		var i = this.masonry.cols;
		this.masonry.colYs = [];
		while (i--) {
			this.masonry.colYs.push(0);
		}
	};

	jQuery.Isotope.prototype._masonryResizeChanged = function () {
		var prevColCount = this.masonry.cols;
		// get updated colCount
		this._getCenteredMasonryColumns();
		return ( this.masonry.cols !== prevColCount );
	};

	jQuery.Isotope.prototype._masonryGetContainerSize = function () {
		var unusedCols = 0, i = this.masonry.cols;
		// count unused columns
		while (--i) {
			if (this.masonry.colYs[i] !== 0) {
				break;
			}
			unusedCols++;
		}

		return {
			height: Math.max.apply(Math, this.masonry.colYs),
			// fit container to columns that have been used;
			width: (this.masonry.cols - unusedCols) * this.masonry.columnWidth
		};
	};


	jQuery(window).load(function () {

		var $container = jQuery('#iContainer'), // object that will keep track of options
						isotopeOptions = {}, // defaults, used if not explicitly set in hash
						defaultOptions = {
							filter: '*',
							sortBy: 'original-order',
							sortAscending: true,
							layoutMode: 'masonry'
						};


		var setupOptions = jQuery.extend({}, defaultOptions, {
			itemSelector: '.galleryItem',
			masonry: {
				// columnWidth: $container.width() / 4

			}
		});

		// set up Isotope
		$container.isotope(setupOptions);

		var $optionSets = jQuery('#galleryOptions').find('.option-set'), isOptionLinkClicked = false;

		// switches selected class on buttons
		function changeSelectedLink($elem) {
			// remove selected class on previous item
			$elem.parents('.option-set').find('.selected').removeClass('selected');
			// set selected class on new item
			$elem.addClass('selected');
		}


		$optionSets.find('a').click(function () {
			var $this = jQuery(this);
			// don't proceed if already selected
			if ($this.hasClass('selected')) {
				return;
			}
			changeSelectedLink($this);
			// get href attr, remove leading #
			var href = $this.attr('href').replace(/^#/, ''), // convert href into object
			// i.e. 'filter=.inner-transition' -> { filter: '.inner-transition' }
							option = jQuery.deparam(href, true);
			// apply new option to previous
			jQuery.extend(isotopeOptions, option);
			// set hash, triggers hashchange on window
			jQuery.bbq.pushState(isotopeOptions);
			isOptionLinkClicked = true;
			return false;
		}), initParallax();


		var hashChanged = false;

		jQuery(window).bind('hashchange', function (event) {
			// get options object from hash
			var hashOptions = window.location.hash ? jQuery.deparam.fragment(window.location.hash, true) : {}, // do not animate first call
							aniEngine = hashChanged ? 'best-available' : 'none', // apply defaults where no option was specified
							options = jQuery.extend({}, defaultOptions, hashOptions, { animationEngine: aniEngine });
			// apply options from hash
			$container.isotope(options);
			// save options
			isotopeOptions = hashOptions;

			// if option link was not clicked
			// then we'll need to update selected links
			if (!isOptionLinkClicked) {
				// iterate over options
				var hrefObj, hrefValue, $selectedLink;
				for (var key in options) {
					hrefObj = {};
					hrefObj[ key ] = options[ key ];
					// convert object into parameter string
					// i.e. { filter: '.inner-transition' } -> 'filter=.inner-transition'
					hrefValue = jQuery.param(hrefObj);
					// get matching link
					$selectedLink = $optionSets.find('a[href="#' + hrefValue + '"]');
					changeSelectedLink($selectedLink);
				}
			}

			isOptionLinkClicked = false;
			hashChanged = true;
		})// trigger hashchange to capture any hash data on init
						.trigger('hashchange');

	});
}


/* tooltip for socials init */

function tooltipInit() {
	jQuery("[data-toggle='tooltip']").tooltip();
}


jQuery(document).ready(function () {
	tooltipInit();
});


/* adjust page with fixed menu */

jQuery(window).load(function () {

	var menuHeight = jQuery('.navbar-fixed-top').height();
	if ((menuHeight) != 0) {
		//fixed menu adjust
		jQuery('body').css('padding-top', menuHeight);
	}
});




// parallax

function initParallax() {

	if (jQuery("body").hasClass("videoPage")) {
		return false;
	}

	if (jQuery.stellar) {

		jQuery.stellar({
			// Set scrolling to be in either one or both directions
			horizontalScrolling: false,
			verticalScrolling: true,

			// Set the global alignment offsets
			horizontalOffset: 0,
			verticalOffset: 0,

			// Refreshes parallax content on window load and resize
			responsive: false,

			// Select which property is used to calculate scroll.
			// Choose 'scroll', 'position', 'margin' or 'transform',
			// or write your own 'scrollProperty' plugin.
			scrollProperty: 'scroll',

			// Select which property is used to position elements.
			// Choose between 'position' or 'transform',
			// or write your own 'positionProperty' plugin.
			positionProperty: 'position',

			// Enable or disable the two types of parallax
			parallaxBackgrounds: true,
			parallaxElements: false,

			// Hide parallax elements that move outside the viewport
			hideDistantElements: true,

			// Customise how elements are shown and hidden
			hideElement: function ($elem) {
				$elem.hide();
			},
			showElement: function ($elem) {
				$elem.show();
			}
		});


		var userScrolled = false;

		jQuery(window).resize(function () {
			userScrolled = true;
		});

		setInterval(function () {
			if (userScrolled) {

				//Do stuff
				// jQuery(window).data('plugin_stellar').destroy();
				// jQuery(window).data('plugin_stellar').init();
				jQuery(window).data('plugin_stellar').refresh();


				userScrolled = false;
			}
		}, 2000);

	}


}

jQuery(window).load(function () {

	initParallax();
});


jQuery(document).ready(function () {

	// color parallax overlay
	jQuery(".parallax").each(function () {
		$this = jQuery(this);
		//var bgOverlay = $this.data("bg-overlay");
		if ((typeof $this.data("bg-overlay") != 'undefined') && (typeof $this.data("bg-opacity") != 'undefined')) {
			var rgba = hexToRgb($this.data("bg-overlay"), $this.data("bg-opacity"));
			$this.find(".parallaxOverlay").css("background-color", rgba);
		}
	});

	// services : reveal content

	jQuery(".serviceEl .revealBtn").click(function () {
		jQuery(this).toggleClass("expanded").next(".revealContent").stop().slideToggle(400, "swing", function () {
			// Animation complete.

			initParallax();
		});

	});


});



function scrollToElement(el, pos, callback) {
	var animation = {scrollTop: pos};
	jQuery('html,body').animate(animation, 'fast', 'swing', function () {
		if (typeof callback == 'function') {
			callback(el);
		}
		callback = null;
	});
}

function callback(el) {

	/*
	 setTimeout(function() {

	 jQuery('.parallax').each(function() {
	 // jQuery(this).removeClass("paraAnim");
	 });

	 // jQuery(window).data('plugin_stellar').refresh();

	 }, 500);
	 */
}


function hexToRgb(hex, opacity) {
	// Expand shorthand form (e.g. "03F") to full form (e.g. "0033FF")
	var shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
	hex = hex.replace(shorthandRegex, function (m, r, g, b) {
		return r + r + g + g + b + b;
	});

	var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
	return result ? "rgba(" + parseInt(result[1], 16) + "," + parseInt(result[2], 16) + "," + parseInt(result[3], 16) + "," + opacity + ")" : null;
}


jQuery(window).scroll(function () {
	if (jQuery(this).scrollTop() > 0) {
		jQuery('.soc-area').slideUp();
	} else {
		jQuery('.soc-area').slideDown();
	}


	jQuery('iframe').each(function () {
		var i = jQuery(this);

		if (i) {
			i.attr('src', i.attr('data-src')).removeAttr('data-src');
		}
	});

});


// hide / show header socials

jQuery(document).ready(function () {
	jQuery(".brand, .soc-area").hoverIntent({
		over: showSoc,
		out: hideSoc
	});

	function showSoc() {
		jQuery(this).next(".soc-area").slideDown();
	}

	function hideSoc() {
		return;
	}

});
jQuery(document).ready(function () {
	jQuery('#rs-carousel').carousel({
		touch: Modernizr && Modernizr.touch,
		translate3d: Modernizr && Modernizr.csstransforms3d,
		itemsPerTransition: 1,
		continuous: false,
		loop: true,
		pagination: false,
		orientation: 'vertical',
		mask: '.rs-carousel-mask',
		whitespace: true
	});
});
jQuery(window).load(function () {
	/* easy pie chart */
	jQuery('.pie-chart').each(function () {
		var $t = jQuery(this);
		var scaleColor = $t.attr('data-scalecolor');
		var trackColor = $t.attr('data-trackcolor');

		$t.easyPieChart({
			animate: $t.attr('data-animate'),
			barColor: $t.attr('data-barcolor'),
			trackColor: trackColor,
			scaleColor: scaleColor == 'false' ? false : scaleColor,
			lineCap: $t.attr('data-linecap'),
			lineWidth: $t.attr('data-linewidth'),
			size: $t.attr('data-size')
		});
	});

	jQuery('.logoSlider .flexslider').flexslider({
		animation: "slide",
		animationLoop: true,
		slideshow: false,
		itemWidth: 160,                   //{NEW} Integer: Box-model width of individual carousel items, including horizontal borders and padding.
		minItems: 1,                    //{NEW} Integer: Minimum number of carousel items that should be visible. Items will resize fluidly when below this.
		move: 1,                  //{NEW} Integer: Number of carousel items that should move on animation. If 0, slider will move all visible items.
		itemMargin: 10,
		controlNav: false,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
		directionNav: true
	});
});

