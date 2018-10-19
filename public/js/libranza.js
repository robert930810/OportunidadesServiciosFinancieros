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
	$scope.tipoCliente = [
		{
			label : 'Pensionado',
			value : 'Pensionado'
		},
		{
			label : 'Docente',
			value : 'Docente'
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
		creditLine: 'Libre inversion',
		pagaduria : 'COLPENSIONES',
		customerType: 'Pensionado',
		age : 18,
		salary : 0,
		lawDesc : 0,
		otherDesc : 0,
		segMargen : 0,
		quotaBuy : 0,
		quaotaAvailable : 0,
		maxQuota : 0,
		name : '',
		lastName : '',
		email: '',
		telephone: '',
		city: '',
		typeService: 'Credito libranza',
		typeProduct: 'Credito libranza'
	};

	$scope.calculateData = function(){
		$scope.libranza.lawDesc = $scope.libranza.salary * 0.12;
		$scope.libranza.segMargen = ($scope.libranza.salary > 781242) ? 5300 : 2000 ;
		$scope.libranza.quaotaAvailable = (($scope.libranza.salary - $scope.libranza.lawDesc)/2)-$scope.libranza.otherDesc-$scope.libranza.segMargen-$scope.libranza.quotaBuy;
		if($scope.libranza.age >= 18 && $scope.libranza.age < 80){
			$scope.libranza.maxQuota = 60000000;
		}else if($scope.libranza.age >= 80 && $scope.libranza.age < 86){
			$scope.libranza.maxQuota = 9000000;
		}else{
			$scope.libranza.maxQuota = 5000000;
		}
	};

	$scope.simular = function(){
		if($scope.libranza.quaotaAvailable <= 148518 ){
			alert("No posee capacidad de pago");
		}else{
			if($scope.libranza.salary < 0 || $scope.libranza.salary == ''){
				alert("Para poder simular el Salario Básico no puede ser menor a 0");
			}else{
				$http({
				  method: 'GET',
				  url: 'api/libranza/liquidator/'+$scope.libranza.maxQuota+'/'+$scope.libranza.quaotaAvailable
				}).then(function successCallback(response) {
					$scope.plazos = response.data;
				   	$('#simularModal').modal('show');
				}, function errorCallback(response) {
				    
				});
			}
		}
	};

	$scope.solicitar = function(){
		$('#simularModal').modal('hide');
		$('#solicitarModal').modal('show');
	};

	$scope.addLead = function(){
		$http({
		  method: 'POST',
		  url: '/libranza',
		  data: $scope.libranza
		}).then(function successCallback(response) {
			window.location = "/LIB_gracias_FRM";
		}, function errorCallback(response) {
		    
		});
	};
});