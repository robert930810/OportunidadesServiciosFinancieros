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
		['img' => 'slider1.jpg', 'texto' => '<p class="sliderPrincipal-textSlider">Obtén beneficios que otros no tienen con <br /> nuestra tarjeta de crédito Oportuya</p>', 'textoBoton' => 'Solicita tu crédito ya', 'title' => 'Tarjeta Oportuya','color' => '#1d84c3', 'position_text' => 'bottom'],
		['img' => 'slider2.jpg', 'texto' => '<h1 class="sliderPrincipal-titleSlider">Crédito <strong>Motos</strong></h1><p class="sliderPrincipal-textSlider">Te damos crédito par que pongas a rodar tus aventuras.</p>', 'textoBoton' => 'Obtener mi moto Ya', 'title' => 'Crédito Motos','color' => '#ec2d35', 'position_text' => 'left'],
		['img' => 'slider3.jpg', 'texto' => '<h1 class="sliderPrincipal-titleSlider">Crédito <strong>Libranza</strong></h1><p class="sliderPrincipal-textSlider">!Por que es momento de disfrutar la vida¡.</p>', 'textoBoton' => 'Utilizar crédito', 'title' => 'Crédito Libranza','color' => '#fdbf3c', 'position_text' => 'left'],
		['img' => 'slider4.jpg', 'texto' => '<p class="sliderPrincipal-textSlider">Asegura tu patrimonio y el bienestar <br /> de quienes están a tu lado</p>', 'textoBoton' => 'Asegúrate Ya', 'title' => 'Seguros','color' => '#2aace0', 'position_text' => 'bottom']
	]);


    return view('index')
    		->with('sliderPrincipal', $sliders->all());
});

Route::get('/LIB_gracias_FRM', function(){
	return view('libranza.thankYouPage');
});

Route::get('/OP_gracias_FRM',function(){
	return view('oportuya.thankYouPage');
})->name('thankYouPageOportuya');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
if ($options['register'] ?? true) {
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');
}

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Email Verification Routes...
if ($options['verify'] ?? false) {
    Route::emailVerification();
}
        

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('pages','Admin\PageController');
Route::resource('oportuya','Admin\OportuyaController');
Route::resource('libranza','Admin\LibranzaController');
Route::resource('motos','Admin\MotosController');


Route::get('api/libranza/test/{precio1}', 'Admin\LibranzaController@test');
Route::get('api/libranza/liquidator/{maxAmount}/{quota}', 'Admin\LibranzaController@liquidator');

