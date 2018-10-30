var copeltelecom = angular.module('copeltelecom', []);

/*
 *
 * Bussola
 *
 */
copeltelecom.controller('bussola', ['$scope', function ($scope) {

	$scope.status = {
		"tipo" : {
			"name": "F",
			"text": "NA SUA CASA",
			"icon": "icon-font-bussola-02"
		},
		"cidade" : "CURITIBA"
	};

	$scope.profile = 0;

	$scope.select_tipo = function (tipo) {
		if (tipo == "j") {
			$scope.status = {
				"tipo" : {
					"name": "J",
					"text": "NA SUA EMPRESA",
					"icon": "icon-font-bussola-03"
				}
			};
		} else {
			$scope.status = {
				"tipo" : {
					"name": "F",
					"text": "NA SUA CASA",
					"icon": "icon-font-bussola-02"
				}
			};
		}
		switch_state("state-2");
	}

	$scope.state_back = function ($state) {
		if ($state == 1) {
			$scope.status.tipo = [];
		}
		if ($state == 2) {
			$scope.status.cidade = [];
		}
		switch_state("state-"+$state);
	}

	$scope.select_cidade = function ($cidade) {
		var $city = "";
		
		if ($cidade) {
			$city = $cidade;
		} else {
			$city = jQuery("input#cidade").val();
			if (!$city) {
				$city = "CURITIBA";
			}
		}

		$scope.status.cidade = $city;

		setTimeout(function () {
			$scope.$apply(function () {
				$scope.status.cidade = $city;
			});
		}, 2000);

		// jQuery.ajax({
		// 	url: copel.template + "/_theme/service.php",
		// 	type: 'GET',
		// 	dataType: 'json',
		// 	data: {
		// 		planos: 1,
		// 		tipo: $scope.status.tipo.name,
		// 		cidade: $city
		// 	}
		// })
		// .always(function(response) {
		// 	if (response.bel) {
		// 		if (response.bel.length > 1) {
		// 			$scope.status.planos = response.bel[1];
		// 		} else {
		// 			$scope.status.planos = response.bel[0];
		// 		}
		// 		// switch_state("state-3");
		// 	} else {
		// 		$scope.status.cidade = "Curitiba";
		// 		jQuery.ajax({
		// 			url: copel.template + "/_theme/service.php",
		// 			type: 'GET',
		// 			dataType: 'json',
		// 			data: {
		// 				planos: 1,
		// 				tipo: $scope.status.tipo.name,
		// 				cidade: "CURITIBA"
		// 			},
		// 			success: function (data) {
		// 				$scope.status.planos = data.bel[0];
		// 				alert("Não disponível para esta cidade");
		// 				// switch_state("state-3");
		// 			}
		// 		});
		// 	}
		// });

		jQuery.ajax({
			url: copel.template + "/_theme/service.php",
			type: 'GET',
			dataType: 'json',
			data: {
				site: $scope.status
			},
		})
		.always(function() {
			window.location.href = copel.url;
		});

	}

	jQuery(".call-action a").on('click', function(e) {
		jQuery(".desktop").toggleClass('player');
		return false;
	});

	// Seleçao de itens para escolha do plano
	jQuery(".draggable ul li").draggable();

	jQuery(".area-drag").droppable({
		accept: ".draggable ul li",
		activeClass: "ui-state-active",
		drop: function( event, ui ) {
			jQuery(this).addClass( "ui-state-highlight" );
			jQuery(ui.draggable).addClass('dropped');
			$scope.profile = count_profile();
		},
		out: function( event, ui ) {
			jQuery(ui.draggable).removeClass('dropped');
			$scope.profile = count_profile();
		}
	});

	// Auto Complete das Cidades
	jQuery('input#cidade').keyup(function() {
		this.value = this.value.toLocaleUpperCase();
	});

	jQuery('input#cidade').enterKey(function () {
		$scope.select_cidade(jQuery(this).val());
	});

	jQuery.ajax({
		url: copel.template + "/_theme/service.php",
		type: 'GET',
		dataType: 'json',
		data: {
			cidades: 'pr'
		}
	}).always(function(response) {
		jQuery( "input#cidade" ).autocomplete({
			source: response,
			appendTo: '.step-2 .call dd'
		});
	});

	jQuery.ajax({
		url: copel.template + "/_theme/service.php",
		type: 'GET',
		dataType: 'json',
		data: {
			planos: 1,
			tipo: "f",
			cidade: "Curitiba"
		}
	})
	.always(function(response) {

		if (response.bel) {
			if (response.bel.length > 1) {
				$scope.status.planos = response.bel[1];
			} else {
				$scope.status.planos = response.bel[0];
			}
		}

	});
	
	$scope.getLocation = function () {
	    if (navigator.geolocation) {
	        navigator.geolocation.getCurrentPosition($scope.showPosition);
	    }
	}

	$scope.showPosition = function (position) {
	    jQuery.ajax({
			url: 'http://maps.googleapis.com/maps/api/geocode/json',
			dataType: 'json',
			data: {
				latlng: position.coords.latitude+','+position.coords.longitude
			}
		})
		.always(function(response) {
			if (response.status == "OK") {
				var addressComponents = response.results[0].address_components;
				for( i=0 ; i<addressComponents.length ; i++){
					var types = addressComponents[i].types;
					if( types == "locality,political" ){
						$scope.status.cidade = addressComponents[i].long_name;
						jQuery("input#cidade").val(addressComponents[i].long_name);
					}
				}
			}
		});
	}

	$scope.getLocation();

	$scope.open_site = function(){
		jQuery.ajax({
			url: copel.template + "/_theme/service.php",
			type: 'GET',
			dataType: 'json',
			data: {
				site: $scope.status
			},
		})
		.always(function() {
			window.location.href = copel.url;
		});
	}

	// Mobile
	jQuery(".action-mobile li").on('click', function(e) {
	    jQuery(this).toggleClass('current');
	});

}]);

/*
 *
 * Site
 *
 */
copeltelecom.controller('copel', ['$scope', function ($scope) {

	$scope.go_cidade = function () {
		// jQuery.ajax({
		// 	url: copel.template + "/_theme/service.php",
		// 	type: 'GET',
		// 	data: {
		// 		sair: 1
		// 	}
		// })
		// .always(function(response) {
		// 	window.location.href = copel.url+'/bussola';
		// });

		$('#modal-cidades').modal('show');

	}

	$scope.go_curitiba = function(){
		jQuery(".modal-cidade").fadeOut();
	}

}]);

function count_profile() {
	var count = 0;
	jQuery(".draggable ul li").each(function(index, el) {
		if (jQuery(this).hasClass('dropped')) {
			count = (count+jQuery(this).data("size"));
		}
	});
	return count;
}

function switch_state($state) {
	for (var i = 1; i <= 3; ++i) {
		jQuery(".wrap").removeClass('state-'+i);
	}
	jQuery(".wrap").addClass($state);
	if ($state == "state-3") {
		jQuery("footer.enter-site").fadeOut();
	} else {
		jQuery("footer.enter-site").fadeIn();
	}
}