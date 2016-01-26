/*
*****************************************************
* WEBMAN'S WORDPRESS THEME FRAMEWORK
* Created by WebMan - www.webmandesign.eu
* Copyright by WebMan - www.webmandesign.eu
*
* Theme scripts
*
* CONTENT:
* - 1) No spam jQuery extension
* - 2) Default actions
* - 3) Menu effects
* - 4) Video slider cover image
* - 5) Photo zoom
* - 6) Apply email spam protection
* - 7) Create tabs
* - 8) Create accordions
* - 9) Create toggles
* - 10) YouTube embed fix
* - 11) Search form
* - 12) Isotope filter
* - 13) Scrollable posts
* - 14) Gallery (also masonry)
* - 15) Masonry blog
* - 16) Call to action
* - 17) Projects slider
*****************************************************
*/



var browserWidth = document.body.clientWidth; //check the browser width
var autoAccordionDuration = ( typeof autoAccordionDuration == 'undefined' ) ? ( 5000 ) : ( autoAccordionDuration );



/*
*****************************************************
*      1) NO SPAM JQUERY EXTENSION
*****************************************************
*/
	jQuery.fn.nospam = function( settings ) {

		return this.each( function() {

			var e     = null,
			    $this = jQuery( this );

			// 'normal'
			if ( jQuery( this ).is( 'a[data-address]' ) ) {
				e = $this.data( 'address' ).split( '' ).reverse().join( '' ).replace( '[at]', '@' ).replace( /\//g, '.' );
			} else {
				e = $this.text().split( '' ).reverse().join( '' ).replace( '[at]', '@' ).replace( /\//g, '.' );
			}

			if ( e ) {
				if ( $this.is( 'a[data-address]' ) ) {
					$this.attr( 'href', 'mailto:' + e );
					$this.text( e );
				} else {
					$this.text( e );
				}
			}

		} );

	};





jQuery( function() {



/*
*****************************************************
*      2) DEFAULT ACTIONS
*****************************************************
*/
	jQuery( '.no-js' ).removeClass( 'no-js' );

	//IE8 fixes
		jQuery( '.lie8 img[height]' ).removeAttr( 'height' );
		jQuery( 'html.lie8 .price-spec li:nth-child(even)' ).addClass( 'even' );

	//to the top of page
		jQuery( '.top-of-page' ).hide();
		jQuery( '.top-of-page, a[href="#top"]' ).click( function() {
				jQuery( 'html, body' ).animate({ scrollTop: 0 }, 400 );
				return false;
			} );
		jQuery( window ).scroll( function() {
			var scrollPosition = jQuery( window ).scrollTop();

			if ( 200 < scrollPosition )
				jQuery( '.top-of-page' ).fadeIn();
			else
				jQuery( '.top-of-page' ).fadeOut();
		} );

	//logo
		function isHighDPI() {
			var mediaQuery = '(-webkit-min-device-pixel-ratio: 1.5),(min--moz-device-pixel-ratio: 1.5),(-o-min-device-pixel-ratio: 3/2),(min-device-pixel-ratio: 1.5),(min-resolution: 1.5dppx)';
			return ( window.devicePixelRatio > 1 || ( window.matchMedia && window.matchMedia(mediaQuery).matches ) );
		} // /isHighDPI

		if ( isHighDPI() && jQuery( '.logo img' ).data( 'highdpi' ) )
			jQuery( '.logo img' ).attr( 'src', jQuery( '.logo img' ).data( 'highdpi' ) );

	//posts/projects/staff image overlay
		jQuery( '.image-container a' ).hover( function() {
				jQuery( this ).find( '.overlay' ).stop().animate( { top : 0 }, 250 );
			}, function() {
				jQuery( this ).find( '.overlay' ).stop().animate( { top : '150%' }, 250 );
			} );

	//clear fix after .column.last (better with JS not to mess up with the actual HTML output from WordPress)
		jQuery( '.column.last, hr' ).after( '<div class="clear" />' );

	//remove empty paragraphs from Contact Form 7 plugin output
		jQuery( '.wpcf7 p, .wpcf7 span' ).each( function() {
				if ( '' == jQuery.trim( jQuery( this ).html() ) )
					jQuery( this ).remove();
			} );

	//WooCommerce
		if ( 'rtl' != jQuery( 'html' ).attr( 'dir' ) )
			jQuery( '.widget_product_search input[type="text"]' ).css( { paddingRight : ( jQuery( '.widget_product_search input[type="submit"]' ).outerWidth() + 10 ) } );
		else
			jQuery( '.widget_product_search input[type="text"]' ).css( { paddingLeft : ( jQuery( '.widget_product_search input[type="submit"]' ).outerWidth() + 10 ) } );





/*
*****************************************************
*      3) MENU EFFECTS
*****************************************************
*/
	jQuery( '.nav-main li ul' ).parent().find( '> .inner' ).append( '<ins class="mobile-submenu-open wmicon-down" />' );

	if ( 767 < browserWidth ) {
		jQuery( '.nav-main li, .top-bar li' ).hover( function() {
				jQuery( this ).find( '> ul' ).stop( true, true ).fadeIn( 300 );
			}, function() {
				jQuery( this ).find( '> ul' ).stop( true, true ).fadeOut( 100 );
			});

		//Submenu widget
			jQuery( '.wm-sub-pages a, .widget_archive a, .widget_categories a, .widget_links a, .widget_meta a, .widget_pages a, .widget_nav_menu a, .widget_nav_menu .inner, .sitemap .no-menu a, ul.sub-pages a, .widget_login a, .widget_product_categories a' ).hover( function() {
					var $this = jQuery( this );
					if (
							! $this.closest( '.wrap' ).parent().hasClass( 'top-bar' ) &&
							! $this.parent().hasClass( 'widget-title' ) &&
							! $this.parent().hasClass( 'text-holder' )
						)
						$this.stop().animate( { textIndent : 5 }, 150 );
				}, function() {
					jQuery( this ).stop().animate( { textIndent : 0 }, 150 );
				} );
	} // /only desktop and tablets

	//mobile menu
		jQuery( '.nav-main .mobile-menu' ).click( function() {
				jQuery( '.nav-main .menu' ).toggle();
			} );
		jQuery( window ).bind( 'resize orientationchange', function() {
				browserWidth = document.body.clientWidth;

				(function() {
					if ( 768 > browserWidth ) {
						jQuery( '.nav-main .menu' ).hide();
						jQuery( '.nav-main .mobile-menu' ).show();
					} else {
						jQuery( '.nav-main .menu' ).show();
						jQuery( '.nav-main .mobile-menu' ).hide();
					}
				})();
			} );

		jQuery( '.mobile-submenu-open' ).click( function() {
			var $this = jQuery( this ).toggleClass( 'active' );
			$this.parent().next( 'ul' ).toggle();
			return false;
		} );





/*
*****************************************************
*      4) VIDEO SLIDER COVER IMAGE
*****************************************************
*/
	var $videoSliderWCover = jQuery( '#video-slider.has-cover' );

	$videoSliderWCover.find( '.video-container' ).hide();

	$videoSliderWCover.prev( '.video-cover' ).click( function() {
			var $this   = jQuery( this ),
			    $parent = $this.closest( '.slider' ).height( $this.height() ),
			    srcAtt  = $videoSliderWCover.find( '.video-container iframe' ).attr( 'src' );

			$this.fadeOut( 400, function() {
					$parent.find( '.video-slider .video-container' ).fadeIn( 250, function() {
							$parent.animate( { height: jQuery( this ).find( 'iframe' ).height() }, 250, function() {
									jQuery( this ).height( 'auto' );
								} );
						} );
				} );

			if ( -1 == srcAtt.indexOf( '?' ) )
				srcAtt += '?autoplay=1';
			else
				srcAtt += '&amp;autoplay=1';

			$videoSliderWCover.find( '.video-container iframe' ).attr( 'src', srcAtt );
		});





/*
*****************************************************
*      5) PHOTO ZOOM
*****************************************************
*/
	if ( jQuery().prettyPhoto ) {
		var thumbnails = 'a[href$=".bmp"],a[href$=".gif"],a[href$=".jpg"],a[href$=".jpeg"],a[href$=".png"],a[href$=".BMP"],a[href$=".GIF"],a[href$=".JPG"],a[href$=".JPEG"],a[href$=".PNG"]',
		    zoomObjects = jQuery( thumbnails + ', .lightbox, a.modal, a[data-modal], a[rel^="prettyPhoto"]' );

		if ( 1 < zoomObjects.length )
			zoomObjects.attr( 'rel', 'prettyPhoto[pp_gal]' );

		//Reset REL attribute for projects
		jQuery( 'a[data-rel]' ).each( function() {
				var $this = jQuery( this );
				$this.attr( 'rel', $this.data( 'rel' ) );
			} );

		zoomObjects.prettyPhoto( {
			show_title         : false,
			theme              : 'pp_default', /* pp_default (only this one is styled) / light_rounded / dark_rounded / light_square / dark_square / facebook */
			slideshow          : 6000,
			deeplinking        : true,
			overlay_gallery    : false,
			social_tools       : false
			} );
	} // /prettyPhoto





/*
*****************************************************
*      6) APPLY EMAIL SPAM PROTECTION
*****************************************************
*/
	jQuery( 'a.email-nospam' ).nospam();





/*
*****************************************************
*      7) CREATE TABS
*****************************************************
*/
	if ( jQuery( 'div.tabs-wrapper' ).length ) {

		(function() {
			var tabObject = jQuery( 'div.tabs-wrapper > ul' );

			i = 0;
			tabObject.each( function( item ) {
				var out         = '';
				    tabsWrapper = jQuery( this ),
				    tabsCount   = tabsWrapper.children( 'li' ).length;

				tabsWrapper.find( '.tab-heading' ).each( function( subitem ) {
					i++;
					var tabItem      = jQuery( this ),
					    tabItemId    = tabItem.closest( 'li' ).attr( 'id', 'tab-item-' + i ),
					    tabItemTitle = tabItem.html(),
					    tabLast      = ( tabsCount === i ) ? ( ' last' ) : ( '' );

					tabItem.addClass( 'hide' );
					if ( tabItem.closest( 'div.tabs-wrapper' ).hasClass( 'fullwidth' ) )
						out += '<li class="column col-1' + tabsCount + tabLast + ' no-margin"><a href="#tab-item-' + i + ' ">' + tabItemTitle + '</a></li>';
					else
						out += '<li><a href="#tab-item-' + i + '">' + tabItemTitle + '</a></li>';
				} );

				tabsWrapper.before( '<ul class="tabs clearfix">' + out + '</ul>' );
			} );

		})();

		var tabsWrapper        = jQuery( '.tabs ' ),
		    tabsContentWrapper = jQuery( '.tabs + ul' );

		tabsWrapper.find( 'li:first-child' ).addClass( 'active' ); //make first tab active
		tabsContentWrapper.children().hide();
		tabsContentWrapper.find( 'li:first-child' ).show();

		tabsWrapper.find( 'a' ).click( function() {
			var $this     = jQuery( this ),
			    targetTab = $this.attr( 'href' ).replace(/.*#(.*)/, "#$1"); //replace is for IE7

			$this.parent().addClass( 'active' ).siblings( 'li' ).removeClass( 'active' );
			jQuery( 'li' + targetTab ).fadeIn().siblings( 'li' ).hide();

			return false;
		} );


		//tour
		if ( jQuery( 'div.tabs-wrapper.vertical.tour' ).length ) {
			jQuery( '<div class="tour-nav"><span class="prev" data-index="-1"></span><span class="next" data-index="1"></span></div>' ).prependTo( '.tabs-wrapper.tour ul.tabs + ul > li' );

			var step02 = jQuery( '.tabs-wrapper.tour ul.tabs li.active' ).next( 'li' ).html();
			jQuery( '.tour-nav .next' ).html( step02 );
			jQuery( '.tour-nav .next a' ).prepend( '<i class="wmicon-right-circle"></i> ' );

			//change when tab clicked
			jQuery( '.tabs-wrapper.tour ul.tabs a' ).click( function() {
				var $parentWrap   = jQuery( this ).closest( '.tabs-wrapper' ),
				    tourTabActive = $parentWrap.find( 'ul.tabs li.active' ),
				    prevTourTab   = tourTabActive.prev( 'li' ),
				    nextTourTab   = tourTabActive.next( 'li' );

				if ( prevTourTab.length ) {
					$parentWrap.find( '.tour-nav .prev' ).html( prevTourTab.html() ).attr( 'data-index', prevTourTab.index() );
					$parentWrap.find( '.tour-nav .prev a' ).append( ' <i class="wmicon-left-circle"></i>' );
				} else {
					$parentWrap.find( '.tour-nav .prev' ).html( '' );
				}

				if ( nextTourTab.length ) {
					$parentWrap.find( '.tour-nav .next' ).html( nextTourTab.html() ).attr( 'data-index', nextTourTab.index() );
					$parentWrap.find( '.tour-nav .next a' ).prepend( '<i class="wmicon-right-circle"></i> ' );
				} else {
					$parentWrap.find( '.tour-nav .next' ).html( '' );
				}
			} );

			//change when tour nav clicked
			jQuery( '.tour-nav span' ).click( function() {
				var $this       = jQuery( this ),
				    $parentWrap = $this.closest( '.tabs-wrapper' ),
				    targetIndex = $this.data( 'index' ),
				    prevTourTab = $parentWrap.find( 'ul.tabs li' ).eq( targetIndex ).prev( 'li' ),
				    nextTourTab = $parentWrap.find( 'ul.tabs li' ).eq( targetIndex ).next( 'li' );
				    targetTab   = $this.find( 'a' ).attr( 'href' );

				$parentWrap.find( 'ul.tabs li' ).eq( targetIndex ).addClass( 'active' ).siblings( 'li' ).removeClass( 'active' );
				$parentWrap.find( 'li' + targetTab ).fadeIn().siblings( 'li' ).hide();

				if ( prevTourTab.length ) {
					$parentWrap.find( '.tour-nav .prev' ).html( prevTourTab.html() ).attr( 'data-index', prevTourTab.index() );
					$parentWrap.find( '.tour-nav .prev a' ).append( ' <i class="wmicon-left-circle"></i>' );
				} else {
					$parentWrap.find( '.tour-nav .prev' ).html( '' );
				}

				if ( nextTourTab.length ) {
					$parentWrap.find( '.tour-nav .next' ).html( nextTourTab.html() ).attr( 'data-index', nextTourTab.index() );
					$parentWrap.find( '.tour-nav .next a' ).prepend( '<i class="wmicon-right-circle"></i> ' );
				} else {
					$parentWrap.find( '.tour-nav .next' ).html( '' );
				}

				return false;
			} );
		} // /if tour tabs

	} // /if tabs





/*
*****************************************************
*      8) CREATE ACCORDIONS
*****************************************************
*/
	if ( jQuery( '.accordion-wrapper' ).length ) {

		(function() {
			var accordionObject = jQuery( 'div.accordion-wrapper > ul > li' );

			accordionObject.each( function( item ) {
				jQuery( this ).find( '.accordion-heading' ).siblings().wrapAll( '<div class="accordion-content" />' );
			} );

		})();

		jQuery( '.accordion-content' ).slideUp();
		jQuery( 'div.accordion-wrapper > ul > li:first-child .accordion-content' ).slideDown().parent().addClass( 'active' );

		jQuery( '.accordion-heading' ).click( function() {
			var $this = jQuery( this );

			$this.next( '.accordion-content' ).slideDown().parent().addClass( 'active' ).siblings( 'li' ).removeClass( 'active' );
			$this.closest( '.accordion-wrapper' ).find( 'li:not(.active) > .accordion-content' ).slideUp();
		} );

		//Automatic accordion
		var hoveringElements = jQuery( 'div.accordion-wrapper.auto > ul' ),
		    notHovering      = true;

		hoveringElements.hover( function() {
			notHovering = false;
		}, function() {
			notHovering = true;
		});

		function autoAccordionFn() {
			if ( notHovering === true ) {

			var $this         = jQuery( 'div.accordion-wrapper.auto > ul' ),
			    count         = $this.children().length,
			    currentActive = $this.find( 'li.active' ),
			    currentIndex  = currentActive.index() + 1,
			    nextIndex     = ( currentIndex + 1 ) % count;

			$this.find( 'li' ).eq( nextIndex - 1 ).find( '.accordion-heading' ).trigger( 'click' );

			}
		} // /autoAccordionFn

		var autoAccordion = setInterval( autoAccordionFn, autoAccordionDuration );

	} // /if accordion





/*
*****************************************************
*      9) CREATE TOGGLES
*****************************************************
*/
	if ( jQuery( 'div.toggle-wrapper' ).length ) {

	(function() {
		var toggleObject = jQuery( 'div.toggle-wrapper' );

		toggleObject.each( function( item ) {
			jQuery( this ).find( '> .toggle-heading' ).siblings().wrapAll( '<div class="toggle-content" />' );
		} );

	})();

	jQuery( 'div.toggle-wrapper div.toggle-wrapper' ).not( '.active' ).find( '> div.toggle-content' ).hide();
	jQuery( 'div.toggle-wrapper' ).find( '> div.toggle-content' ).slideUp();
	jQuery( 'div.toggle-wrapper.active' ).find( '> div.toggle-content' ).slideDown();

	jQuery( '.toggle-heading' ).click( function() {
		jQuery( this ).next( 'div.toggle-content' ).slideToggle().parent().toggleClass( 'active' );
	} );

	} // /if toggle





/*
*****************************************************
*      10) YOUTUBE EMBED FIX
*****************************************************
*/
	jQuery( 'iframe[src*="youtube.com"]' ).each( function( item ) {
			var srcAtt = jQuery( this ).attr( 'src' );
			if ( -1 == srcAtt.indexOf( '?' ) )
				srcAtt += '?wmode=transparent';
			else
				srcAtt += '&amp;wmode=transparent';
			jQuery( this ).attr( 'src', srcAtt );
		} );





/*
*****************************************************
*      11) SEARCH FORM
*****************************************************
*/
	jQuery( '.breadcrumbs.animated-form .form-search' ).width( 120 );
	jQuery( '.breadcrumbs.animated-form input[type="text"]' )
		.focus( function() {
				jQuery( this ).closest( '.form-search' ).width( 200 );
			} )
		.blur( function() {
				jQuery( this ).closest( '.form-search' ).stop().animate( { width: 120 }, 250 );
			} )
		.hover( function() {
				jQuery( this ).closest( '.form-search' ).stop().animate( { width: 200 }, 250 );
			}, function() {
				var $this = jQuery( this );
				if ( ! $this.is( ':focus' ) )
					$this.closest( '.form-search' ).stop().animate( { width: 120 }, 250 );
			} );

	var $searchForm  = jQuery( '.ie .form-search input[type="text"]' ),
	    $placeholder = $searchForm.attr( 'placeholder' );

	function setSearchPlaceholder() {
		if ( '' == $searchForm.val() )
			$searchForm.val( $placeholder );
		else if ( $placeholder == $searchForm.val() )
			$searchForm.val( '' );
	}; // /setSearchPlaceholder

	setSearchPlaceholder();
	$searchForm.change( function() {
			setSearchPlaceholder();
		} );

	$searchForm.focus( function() {
			setSearchPlaceholder();
		} );





/*
*****************************************************
*      12) ISOTOPE FILTER
*****************************************************
*/
	if ( jQuery().isotope ) {

		var $filteredContent  = jQuery( '.filter-this' ),
		    isotopeLayoutMode = $filteredContent.data( 'layout-mode' );

		if ( $filteredContent.hasClass( 'wrap-projects' ) ) {
			var itemWidth = $filteredContent.find( 'article:first-child' ).outerWidth();
			$filteredContent.width( '101%' ).find( 'article' ).width( itemWidth );
		}

		function runIsotope() {
			$filteredContent.isotope( {
					layoutMode : isotopeLayoutMode
				} );

			//filter items when filter link is clicked
			jQuery( '.wrap-filter a' ).click( function() {
					var $this = jQuery( this ),
					    selector = $this.data( 'filter' );

					$this.closest( '.filterable-content' ).find( '.filter-this' ).isotope( { filter: selector } );
					$this.addClass( 'active' ).parent( 'li' ).siblings( 'li' ).find( 'a' ).removeClass( 'active' );

					return false;
				} );

			jQuery( '.filter-this .toggle-wrapper' ).click( function() {
					jQuery( '.filter-this' ).isotope( 'reLayout' );
				} );
		}; // /runIsotope

			function runIsotopeRTL() {
				$filteredContent.isotope( {
						layoutMode        : isotopeLayoutMode,
						transformsEnabled : false
					} );

				//filter items when filter link is clicked
				jQuery( '.wrap-filter a' ).click( function() {
						var $this = jQuery( this ),
						    selector = $this.data( 'filter' );

						$this.closest( '.filterable-content' ).find( '.filter-this' ).isotope( {
								filter            : selector,
								transformsEnabled : false
							} );
						$this.addClass( 'active' ).parent( 'li' ).siblings( 'li' ).find( 'a' ).removeClass( 'active' );

						return false;
					} );

				jQuery( '.filter-this .toggle-wrapper' ).click( function() {
						jQuery( '.filter-this' ).isotope( 'reLayout' );
					} );
			}; // /runIsotopeRTL


		if ( 'rtl' != jQuery( 'html' ).attr( 'dir' ) ) {
			if ( jQuery( 'html' ).hasClass( 'ie' ) ) {
				runIsotope();
			} else {
				$filteredContent.imagesLoaded( function() {
					runIsotope();
				} );
			}
		} else {
			// modify Isotope's absolute position method
			jQuery.Isotope.prototype._positionAbs = function( x, y ) {
				return { right: x, top: y };
			}

			if ( jQuery( 'html' ).hasClass( 'ie' ) ) {
				runIsotopeRTL();
			} else {
				$filteredContent.imagesLoaded( function() {
					runIsotopeRTL();
				} );
			}
		} // /Isotope RTL languages support
	} // /isotope





/*
*****************************************************
*      13) SCROLLABLE POSTS
*****************************************************
*/
	if ( jQuery().bxSlider ) {

		if ( 'rtl' != jQuery( 'html' ).attr( 'dir' ) )
			var bxSliderAnimationMode = 'horizontal';
		else
			var bxSliderAnimationMode = 'fade';

		//only desktops and tablets
		if ( 767 < browserWidth ) {
			jQuery( '.scrollable' ).each( function( item ) {
				var $this                = jQuery( this ),
				    itemScrollableWidth  = $this.children().eq( 0 ).outerWidth( true ),
				    itemScrollableMargin = itemScrollableWidth - $this.children().eq( 0 ).outerWidth(),
				    scrollableColumns    = ( $this.data( 'columns' ) ) ? ( $this.data( 'columns' ) ) : ( 3 ),
				    scrollableMove       = ( $this.hasClass( 'stack' ) ) ? ( scrollableColumns ) : ( 1 ),
				    scrollablePause      = ( $this.data( 'time' ) ) ? ( $this.data( 'time' ) ) : ( 4000 );

				$this.bxSlider( {
						auto        : $this.hasClass( 'auto' ),
						pause       : scrollablePause,
						minSlides   : scrollableColumns,
						maxSlides   : scrollableColumns,
						slideWidth  : itemScrollableWidth,
						slideMargin : itemScrollableMargin,
						moveSlides  : scrollableMove,
						pager       : false,
						autoHover   : true,
						useCSS      : false //this prevents CSS3 animation glitches in Chrome, but unfortunatelly adding a bit of overhead
					} );
			} );
		} // /only desktop and tablets

		if ( jQuery( '.wrap-testimonials-shortcode[data-time]' ).length ) {
			(function() {
				var testimonialsObject = jQuery( '.wrap-testimonials-shortcode[data-time] > div' );

				testimonialsObject.each( function( item ) {
					var $this = jQuery( this ),
					    pause = $this.parent().data( 'time' ) + 500; //plus transition time
					$this.bxSlider( {
							mode           : bxSliderAnimationMode,
							pause          : pause,
							auto           : true,
							autoHover      : true,
							controls       : false,
							adaptiveHeight : true,
							useCSS         : false //this prevents CSS3 animation glitches in Chrome, but unfortunatelly adding a bit of overhead
						} );
				} );

			})();
		} // /if testminonials

		if ( jQuery( '.simple-slider[data-time]' ).length ) {
			(function() {
				var sliderObject = jQuery( '.simple-slider[data-time]' );

				sliderObject.each( function( item ) {
					var $this = jQuery( this ),
					    pause = $this.data( 'time' ) + 500; //plus transition time
					$this.bxSlider( {
							mode           : bxSliderAnimationMode,
							pause          : pause,
							auto           : true,
							autoHover      : true,
							controls       : true,
							pager          : false,
							adaptiveHeight : true,
							useCSS         : false //this prevents CSS3 animation glitches in Chrome, but unfortunatelly adding a bit of overhead
						} );
				} );

			})();
		} // /if simple-slider

	} // /bxSlider





/*
*****************************************************
*      14) GALLERY (ALSO MASONRY)
*****************************************************
*/
	jQuery( '.gallery-columns .column' ).hover( function() {
			jQuery( this ).find( '.gallery-caption' ).stop().animate( { bottom : '-120%' } );
		}, function() {
			jQuery( this ).find( '.gallery-caption' ).stop().animate( { bottom : 0 } );
		} );

	if ( jQuery().masonry ) {
		var $containerM = jQuery( '.gallery.masonry-container' );

		$containerM.each( function( item ) {
			var $this      = jQuery( this ),
			    itemWidthM = $this.find( 'figure:first-child' ).outerWidth() - 2;

			$this.width( '105%' ).find( 'figure' ).css( { width : itemWidthM + 'px' } );

			if ( jQuery('html').hasClass('ie') ) {
				$this.masonry( {
						itemSelector : 'figure'
					} );
			} else {
				$this.imagesLoaded( function() {
					$this.masonry( {
							itemSelector : 'figure'
						} );
				} );
			}
		} );
	} // /masonry





/*
*****************************************************
*      15) MASONRY BLOG
*****************************************************
*/
	if ( jQuery().masonry ) {
		var $containerMB  = jQuery( '.list-articles.masonry-container' ),
		    $itemMB       = $containerMB.find( 'article:first-child' ),
		    itemWidthMB   = $itemMB.outerWidth() - 2,
		    marginWidthMB = $itemMB.outerWidth( true ) - itemWidthMB;

		if ( 'rtl' != jQuery( 'html' ).attr( 'dir' ) )
			$containerMB.width( '110%' ).find( 'article' ).css( { width : itemWidthMB + 'px', marginRight : marginWidthMB } );
		else
			$containerMB.width( $containerMB.width() + marginWidthMB ).find( 'article' ).css( { width : itemWidthMB + 'px', marginLeft : marginWidthMB } );

		function runMasonry() {
			if ( 'rtl' != jQuery( 'html' ).attr( 'dir' ) )
				$containerMB.masonry( {
						itemSelector : 'article'
					} );
			else
				$containerMB.masonry( {
						itemSelector : 'article',
						isRTL        : true
					} );
		}; // /runMasonry

		if ( jQuery('html').hasClass('ie') ) {
			runMasonry();
		} else {
			$containerMB.imagesLoaded( function() {
				runMasonry();
			} );
		}
	} // /masonry





/*
*****************************************************
*      16) CALL TO ACTION
*****************************************************
*/
	if ( jQuery( 'div.call-to-action' ).length ) {

	(function() {
		var ctaObject = jQuery( 'div.call-to-action' );

		if ( 'rtl' != jQuery( 'html' ).attr( 'dir' ) )
			ctaObject.css({ paddingRight : 0 });
		else
			ctaObject.css({ paddingLeft : 0 });

		ctaObject.each( function( item ) {
			var $this          = jQuery( this ),
			    ctaBtnWidth    = $this.find( '.btn' ).outerWidth() + 40, //20px margin left and right
			    ctaTitle       = $this.find( '.call-to-action-title' ),
			    ctaTitleWidth  = ctaTitle.outerWidth() + 20, //30px margin right
			    ctaTitleMargin = 0;

			if ( 'rtl' != jQuery( 'html' ).attr( 'dir' ) )
				$this.find( '.call-to-action-text' ).css({ paddingRight : ctaBtnWidth });
			else
				$this.find( '.call-to-action-text' ).css({ paddingLeft : ctaBtnWidth });

			if ( $this.hasClass( 'has-title' ) ) {
				if ( 'rtl' != jQuery( 'html' ).attr( 'dir' ) )
					$this.css({ paddingLeft : ctaTitleWidth });
				else
					$this.css({ paddingRight : ctaTitleWidth });
				ctaTitleMargin = ( ctaTitle.outerHeight() - ctaTitle.find( 'h2' ).outerHeight() ) / 2;
				ctaTitle.find( 'h2' ).css({ marginTop : ctaTitleMargin + 'px' });
			}
		} );

	} )();

	} // /if call to action





/*
*****************************************************
*      17) PROJECTS SLIDER
*****************************************************
*/
	if ( jQuery().bxSlider && jQuery( '.project-slider' ).length ) {
		(function() {
			var sliderObject = jQuery( '.project-slider > ul' );

			sliderObject.each( function( item ) {
				var $this = jQuery( this ),
				    speed = $this.data( 'time' ) + 500;
				$this.bxSlider( {
						mode           : bxSliderAnimationMode,
						auto           : true,
						autoHover      : true,
						controls       : true,
						adaptiveHeight : true,
						pagerCustom    : '#project-slider-pager'
					} );
			} );

		})();
	} // /bxSlider


} );