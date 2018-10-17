angular.module('appLibranzaLiquidador', [])
.controller("libranzaLiquidadorCtrl", function($scope, $http) {
	$scope.lineaCredito = [
		{
			label: 'Libre inversión',
			value: 'Libre inversion'
		},
		{
			label: 'Libre inversión + Compra de cartera',
			value: 'Libre inversion + Compra de cartera'
		}
	];
	$scope.pagadurias = [
		{label: 'ACALDIA DE IBAGUE',
		value: 'ACALDIA DE IBAGUE'},
		{label: 'ALCALDIA DE PEREIRA',
		value: 'ALCALDIA DE PEREIRA'},
		{label: 'ALCALDIA DE POPAYAN ',
		value: 'ALCALDIA DE POPAYAN '},
		{label: 'ALCALDIA DE SINCELEJO',
		value: 'ALCALDIA DE SINCELEJO'},
		{label: 'ALCALDIA DE VILLAVICENCIO',
		value: 'ALCALDIA DE VILLAVICENCIO'},
		{label: 'ALCALDIA MAYOR DE OGOTA',
		value: 'ALCALDIA MAYOR DE OGOTA'},
		{label: 'ALDIA DE MANIZALES',
		value: 'ALDIA DE MANIZALES'},
		{label: 'BBVA SEGUROS ',
		value: 'BBVA SEGUROS '},
		{label: 'CASUR',
		value: 'CASUR'},
		{label: 'COLFONDOS',
		value: 'COLFONDOS'},
		{label: 'COLPENSIONES',
		value: 'COLPENSIONES'},
		{label: 'FIDUPREVISORA',
		value: 'FIDUPREVISORA'},
		{label: 'FONDO DE EDUCACION REGIONAL DE BOYACA',
		value: 'FONDO DE EDUCACION REGIONAL DE BOYACA'},
		{label: 'FOPEP',
		value: 'FOPEP'},
		{label: 'GOBERACION DE RISARALDA',
		value: 'GOBERACION DE RISARALDA'},
		{label: 'GOBERNACION DE CALDAS',
		value: 'GOBERNACION DE CALDAS'},
		{label: 'GOBERNACION DE SUCRE',
		value: 'GOBERNACION DE SUCRE'},
		{label: 'GOBERNACION DE TOLIMA',
		value: 'GOBERNACION DE TOLIMA'},
		{label: 'GOBERNACION META',
		value: 'GOBERNACION META'},
		{label: 'GOBERNACION QUINDIO',
		value: 'GOBERNACION QUINDIO'},
		{label: 'GOBERNACION RISARALDA',
		value: 'GOBERNACION RISARALDA'},
		{label: 'MAPFRE',
		value: 'MAPFRE'},
		{label: 'MIN DEFENSA',
		value: 'MIN DEFENSA'},
		{label: 'PORVENIR',
		value: 'PORVENIR'},
		{label: 'POSITIVA',
		value: 'POSITIVA'},
		{label: 'PROTECCION',
		value: 'PROTECCION'},
		{label: 'SEGUROS ALFA',
		value: 'SEGUROS ALFA'},
		{label: 'SEGUROS DE VIDA SURAMEICANA',
		value: 'SEGUROS DE VIDA SURAMEICANA'}
	]
	$scope.libranza = {
		lineaCredito: 'Libre inversion',
		pagaduria : 'COLPENSIONES',
		salarioBasico : 0,
		descuentosLey : 0,
		otrosDescuentos : 0,
		margenSeguridad : 0,
		coutaCompra : 0,
		cupoDisponible : 0
	};

	$scope.calculateData = function(){
		$scope.libranza.descuentosLey = $scope.libranza.salarioBasico * 0.12;
		$scope.libranza.margenSeguridad = ($scope.libranza.salarioBasico > 781242) ? 5300 : 2000 ;
		$scope.libranza.cupoDisponible = (($scope.libranza.salarioBasico - $scope.libranza.descuentosLey)/2)-$scope.libranza.otrosDescuentos-$scope.libranza.margenSeguridad-$scope.libranza.coutaCompra;
	};

	$scope.test = function(){
		$http({
		  method: 'GET',
		  url: 'api/libranza/test/'+10000
		}).then(function successCallback(response) {
		    console.log(response);
		}, function errorCallback(response) {
		    console.log(response);
		});
	}
});