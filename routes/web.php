<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$sliders = collect([
		['img' => 'slider1.jpg', 'texto' => '<p>Obtén beneficios que otros no tienen con <br /> nuestra tarjeta de crédito Oportuya</p>', 'textoBoton' => 'Solicita tu crédito ya', 'title' => 'Tarjeta Oportuya','color' => '#1d84c3'],
		['img' => 'slider2.jpg', 'texto' => '<h2>Crédito <strong>Motos</strong></h2><p>Te damos crédito par que pongas a rodar tus aventuras.</p>', 'textoBoton' => 'Obtener mi moto Ya', 'title' => 'Crédito Motos','color' => '#ec2d35'],
		['img' => 'slider3.jpg', 'texto' => '<h2>Crédito <strong>Libranza</strong></h2><p>!Por que es momento de disfrutar la vida¡.</p>', 'textoBoton' => 'Utilizar crédito', 'title' => 'Crédito Libranza','color' => '#fdbf3c'],
		['img' => 'slider4.jpg', 'texto' => '<p>Asegura tu patrimonio y el bienestar <br /> de quienes están a tu lado</p>', 'textoBoton' => 'Asegúrate Ya', 'title' => 'Seguros','color' => '#2aace0']
	]);


    return view('index')
    		->with('sliderPrincipal', $sliders->all());
});
