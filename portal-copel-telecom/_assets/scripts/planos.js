var AutoComplete = require("autocomplete-js");


function planosCarouselHome() {
    var owlplanos = $(".home-planos-carousel");
	        owlplanos.owlCarousel({
            autoplay: false,
            loop: false,
            dots: false,
            nav: false,
            responsive : {
                0: {
                    items: 1,
                },
                769: {
                    items: 4
                }
            }
        })

        planosCarouselHomedisableNav();
        planosCarouselHomeremoveNav();
        owlplanos.on('changed.owl.carousel', function(event) {       
            planosCarouselHomedisableNav();
        })

        $('.home-planos-carousel-next').click(function() {
            owlplanos.trigger('next.owl.carousel');
        })

        $('.home-planos-carousel-prev').click(function() {
            owlplanos.trigger('prev.owl.carousel');
        })
	}

function planosCarouselHomedisableNav() {
    setTimeout(function() {
        $('.home-planos-carousel-prev,.home-planos-carousel-next').removeClass('disabled');
        if(!$('.home-planos-carousel .owl-item.active').first().prev().length) {
            $('.home-planos-carousel-prev').addClass('disabled');
        }
        if(!$('.home-planos-carousel .owl-item.active').last().next().length) {
            $('.home-planos-carousel-next').addClass('disabled');
        }
    }, 350);
}

function planosCarouselHomeremoveNav() {
    if(!$('.home-planos-carousel .owl-item.active').last().next().length){
        $('.home-planos-carousel-prev,.home-planos-carousel-next').hide();
    } else {
        $('.home-planos-carousel-prev,.home-planos-carousel-next').show();
    }
}

function success(pos) {
	var crd = pos.coords;
	getCityState(crd.latitude,crd.longitude);
};

function error(err) {
	console.warn('ERROR(' + err.code + '): ' + err.message);
};

function requestLocation() {
	var options = {
	  enableHighAccuracy: true,
	  timeout: 5000,
	  maximumAge: 0
	};
	navigator.geolocation.getCurrentPosition(success, error, options);
}

function initialize() {
	geocoder = new google.maps.Geocoder();
}

function getCityState(lat, lng) {
	var latlng = new google.maps.LatLng(lat, lng);
	geocoder.geocode({'latLng': latlng}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			// console.log(results)
			if (results[1]) {
				// alert(results[0].formatted_address)
				for (var i=0; i<results[0].address_components.length; i++) {
					for (var b=0;b<results[0].address_components[i].types.length;b++) {
						if (results[0].address_components[i].types[b] == "administrative_area_level_1") {
						city= results[0].address_components[i];
						break;
						}
					}
				}
				// alert(city.short_name + " " + city.long_name)
				// alert(copel.template + "/_theme/service.php");
				var estado = city.short_name;
				var cidade = results[0].address_components[3].long_name;
				// console.log(estado+cidade);
				var site = {
					cidade: cidade,
					estado: estado
				};
				saveSession(site);
				$('.js-cidade-estado').html(cidade+'/'+estado);

			} else {
				// alert("No results found");
			}
		} else {
			// alert("Geocoder failed due to: " + status);
		}
	});
}

function saveSession(site) {
	jQuery.ajax({
		url: copel.template + "/_theme/service.php",
		type: 'GET',
		dataType: 'json',
		data: {
			site: site
		}
	}).done(function(data) {
		// console.log('savesession done!');
	}).fail(function(data) {
		// console.log('savesession error!');
	});
}

function autoCompleteInit(){
	AutoComplete({
		Url: copel.template + "/_theme/service.php?cidades=pr",
		EmptyMessage: 'Cidade não encontrada!',
		Limit: 10
	}, 
		".js-autocomplete-cidade"
	);
}

function formPlanosInit() {
	$('.planos-geolocation--form form').submit(function(event) {
		var cidade = $(this).find('input').val();
		var site = {
			cidade: cidade,
			estado: ''
		};
		saveSession(site);
		location.reload();
		console.log('submit' + cidade);
		return false;
	});
}

function showPlanosHome(cidade) {
	var item = $('.home-planos-carousel--item').clone();
	$('.home-planos-carousel').html('');

	jQuery.ajax({
		url: copel.template + "/_theme/service.php",
		type: 'GET',
		dataType: 'json',
		data: {
			planos: 1,
			tipo: 'f',
			cidade: cidade
		}
	}).done(function(data) {
		// var planos = jQuery.parseJSON(data);
		// console.log(data.bel);
		if(data.bel != null) {
			$.each(data.bel, function( index, value ) {
				item.find('.js-velocidade').html(value.download);
				item.find('.js-valor').html(value.precoProduto);
				$('.home-planos-carousel').append('<div>'+item.html()+'</div>');
			});
			planosCarouselHome();
			$('.home-planos .planos-geolocation').addClass('d-none');
			$('.home-planos-list').removeClass('d-none');
	        $('.js-disponibilidade-modal').on('click', function(event) {
	            $('#disponibilidade-modal').modal('show');
	            return false;
	        });
		} else if(copel.session) {
			$('.home-planos-list').addClass('d-none');
			$('.home-planos .planos-geolocation--false').removeClass('d-none');
		} else {
			$('.home-planos-list').addClass('d-none');
			$('.home-planos .planos-geolocation--true').removeClass('d-none');
		}
		// console.log('showPlanosHome done!');
	}).fail(function(data) {
		// console.log('showPlanosHome error!');
	});
}

jQuery(document).ready(function($) {
	initialize();
	autoCompleteInit();
	formPlanosInit();	
});


// start
if(!copel.session.cidade && !copel.session.estado){
	requestLocation();
} else {
	var estado = (copel.session.estado)?'/'+copel.session.estado : '';
	$('.js-cidade-estado').html(copel.session.cidade+ estado);
	showPlanosHome(copel.session.cidade);
}