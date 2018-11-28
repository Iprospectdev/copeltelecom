jQuery(document).ready(function($) {

	var options = {
	  enableHighAccuracy: true,
	  timeout: 5000,
	  maximumAge: 0
	};

	function success(pos) {
	  var crd = pos.coords;

	  console.log('Sua posição atual é:');
	  console.log('Latitude : ' + crd.latitude);
	  console.log('Longitude: ' + crd.longitude);
	  console.log('Mais ou menos ' + crd.accuracy + ' metros.');

	  codeLatLng(crd.latitude,crd.longitude);
	};

	function error(err) {
	  console.warn('ERROR(' + err.code + '): ' + err.message);
	};

	navigator.geolocation.getCurrentPosition(success, error, options);


	function initialize() {
		geocoder = new google.maps.Geocoder();
	}
	initialize();

	function codeLatLng(lat, lng) {
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
					var state = city.short_name;
					var city = results[0].address_components[3].long_name;
					if(state && city && !getCookie('copel_cidade') && !getCookie('copel_estado')) {
						setCookie('copel_cidade',city,10);
						setCookie('copel_estado',state,10);
						location.reload();
					}
				} else {
					// alert("No results found");
				}
			} else {
				// alert("Geocoder failed due to: " + status);
			}
		});
	}

	// function getPlanos(city) {
	// 	console.log('getPlanos: '+city+' :' + copel.template);
	// 	city = 'Curitiba';
	// 	jQuery.ajax({
	// 		url: copel.template + "/_theme/service.php",
	// 		type: 'GET',
	// 		dataType: 'json',
	// 		data: {
	// 			// planos: 1,
	// 			// tipo: $scope.status.tipo.name,
	// 			cidade: city
	// 		}
	// 	}).done(function(data) {
	// 		console.log(data);
	// 		console.log('done');
	// 	}).fail(function() {
	// 		console.log('fail');
	// 	})
	// }

	function setCookie(cname, cvalue, exdays) {
		var d = new Date();
		d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
		var expires = "expires="+d.toUTCString();
		document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	}

	function getCookie(cname) {
		var name = cname + "=";
		var ca = document.cookie.split(';');
		for(var i = 0; i < ca.length; i++) {
		   var c = ca[i];
		   while (c.charAt(0) == ' ') {
		      c = c.substring(1);
		   }
		   if (c.indexOf(name) == 0) {
		      return c.substring(name.length, c.length);
		   }
		}
		return "";
	}

	function checkCookie() {
		var user = getCookie("username");
		if (user != "") {
		    alert("Welcome again " + user);
		} else {
		    user = prompt("Please enter your name:", "");
		    if (user != "" && user != null) {
		        setCookie("username", user, 365);
		    }
		}
	}
});
