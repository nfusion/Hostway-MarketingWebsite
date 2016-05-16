(function ($) {
	function ifSafari(){
		$.browser.safari = ($.browser.webkit && !(/chrome/.test(navigator.userAgent.toLowerCase())));
		if ($.browser.safari) {
			$('.main_menu').addClass('isSafari');
		}
		else{
			$('.main_menu').addClass('isNotSafari');
		}
	}
    function slidersInits(){
		$('.sliderWrapper').slick({
			infinite: true,
			slidesToShow: 3,
			adaptiveHeight: true,
			slidesToScroll: 3,
			touch: false,
			touchMove: false,
			prevArrow: '<button type="button" class="slick-prev"></button>',
			nextArrow: '<button type="button" class="slick-next"></button>',
			responsive: [
			    {
			      breakpoint: 991,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2,
			      }
			    },
			    {
			      breakpoint: 600,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1,
			      }
			    }
		    ]
		});
	}

	function infastructureMaps(){
		function init() {
			var index = 1;
			$('.infastructure_map').each(function(){
				var mapElement = document.getElementById('infastructure_map_'+index);
				if (mapElement != null) {
					var mapItem = $(this),
						mapLat = parseFloat(mapItem.attr('data-lat')),
						mapLng = parseFloat(mapItem.attr('data-lng')),
						mapZoom = parseInt(mapItem.attr('data-zoom'));

					var	mapOptions = {
						zoom: mapZoom,
						scrollwheel: false,
						center: new google.maps.LatLng(mapLat,mapLng)
					};

					var map = new google.maps.Map(mapElement, mapOptions);

					var	marker = new google.maps.Marker({
						position: new google.maps.LatLng(mapLat,mapLng),
						map: map,
					});
				}
				index++;
			})
		}

		google.maps.event.addDomListener(window, 'load', init);
		google.maps.event.addDomListener(window, 'resize', init);
	}

	function topMenu(){
		buildMenu();
		menuMinHeight();
		responsive();
		domenu('.main_menu');

		$(window).load(function(){
			buildMenu();
			menuMinHeight();
			domenu('.main_menu');
		});
		$(window).resize(function(){
			buildMenu();
			menuMinHeight();
			domenu('.main_menu');
		});

		function domenu(block){
			var mw=0;
			var $link = $(block+'>ul>li');
			
			$link.each(function(){
				$(this).css({'margin-left':'0','margin-right':'0'});
				mw+=$(this).innerWidth();
			});
			
			ai=$link.length;
			var containerWidth = $(block).width();
			mw=containerWidth-mw-ai;
			$link.each(function(){
				cpad=Math.round(mw/ai);
				$(this).css({'margin-left':Math.floor(cpad/2)+'px','margin-right':(Math.floor(cpad/2)+cpad%2)+'px'})
				mw-=cpad;
				ai--;
			});
		};

		function menuMinHeight(){
			var minHeight = 250;
			$('.main_menu>ul>li').each(function(){
				var parent = $(this);
				$('ul', parent).each(function(){
					var elem = $(this);
					var elemHeight = elem.outerHeight();
					console.log(elemHeight);
					if(elemHeight > minHeight){
						minHeight = elemHeight;
					}
				})
				$('ul', parent).css('min-height', minHeight);
				minHeight = 250;
			})
		}

		function buildMenu(){
			$('.main_menu>ul>li ul').each(function(){
				var windowWidth = $(window).width(),
					elem = $(this),
					parent = elem.closest('li'),
					offsetLeft = elem.offset().left,
					elemWidth = elem.width();

				if(windowWidth < (offsetLeft + elemWidth)){
					parent.addClass('offScreen');
				}
			})

			$('.main_menu').addClass('load');
		}

		function responsive(){
			var parent = $('.main_menu-small'),
				menu = $('.main_menu-small-fixedMenu', parent),
				button = $('.main_menu-button', parent),
				item = menu.find('.main-menu-fixed>li>ul .menu-item');

			$('.main-menu-fixed li.menu-html-content').each(function(){
				var parent = $(this).closest('ul');
				parent.closest('li').addClass('has-only-html-content');
				parent.find('li').each(function(){
					if(!$(this).hasClass('menu-html-content')){
						parent.closest('li').removeClass('has-only-html-content');
					}
				})
			})

			button.on('click', function(event){
				event.preventDefault();
				menu.toggleClass('openMenu');
				$('body').toggleClass('openMenu');
			})

			item.on('click', '>a', function(event){
				var elem = $(this).closest('.menu-item');
				if(elem.hasClass('menu-item-has-children') && !elem.hasClass('has-only-html-content')){
					event.preventDefault();
					elem.toggleClass('open');
					elem.find('>ul').slideToggle();
				}
			})
		}
	}

	

	$(document).ready(function(){
		ifSafari();
		infastructureMaps();
		slidersInits();
		topMenu();
	})
})(jQuery);