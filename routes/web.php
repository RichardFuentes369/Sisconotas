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
	    return view('prueba');
	});

	Route::group(['prefix'=>'index'], function(){	
		/*vistas*/
		Route::get('bienvenidos', function(){
			return view('Home.views.index');
		});
		Route::get('login', function(){
			return view('Home.views.login');
		});
		Route::get('mision-vision', function(){
			return view('Home.views.mision-vision');
		});
		Route::get('sobre-nosotros', function(){
			return view('Home.views.sobre-nosotros');
		});
		Route::get('contactenos', function(){
			return view('Home.views.contactenos');
		});
		/*controladores*/
		Route::post('Loguin','LoginController@login');
		Route::post('Logout','LoginController@logout');
	});

	Route::group(['prefix'=>'administrador', 'middleware' => 'auth'], function(){	
		/*vistas*/
		Route::get('bienvenido', function(){
			return view('Administrador.views.index');
		});
		Route::get('ajustes', function(){
			return view('Administrador.views.ajustes');
		});
		/*controladores*/
		Route::get('colegiosl','ColegiosController@listarC');
		Route::post('colegiosc','ColegiosController@registrarC');
		Route::get('colegiosv/{nit}', 'ColegiosController@verC')->where(['nit' => '[0-9-]+']);
		Route::get('colegiosa/{nit}', 'ColegiosController@colegioA')->where(['nit' => '[0-9-]+']);
		Route::post('colegiosado','ColegiosController@actualizarC');
		Route::get('colegiosb/{nit}', 'ColegiosController@borrarC')->where(['nit' => '[0-9-]+']);
		Route::get('rectoresl','ColegiosController@listarR');
		Route::post('rectoresc','UsersController@registrarR');
		Route::get('rectoresv/{dni}', 'UsersController@verR')->where(['dni' => '[0-9A-Za-z]+']);
		Route::get('rectoresa/{dni}', 'UsersController@usuariosA')->where(['dni' => '[0-9A-Za-z]+']);
		Route::post('rectoresado','UsersController@actualizarR');
		Route::get('rectoresb/{dni}', 'UsersController@borrarR')->where(['dni' => '[0-9A-Za-z]+']);
		Route::post('ajustesA','UsersController@actualizarA');
		
	});

	Route::group(['prefix'=>'rector', 'middleware' => 'auth'], function(){	
		/*vistas*/
		Route::get('bienvenido', function(){
			return view('Rector.views.index');
		});
		Route::get('ajustes', function(){
			return view('Rector.views.ajustes');
		});
		/*controladores*/	
		Route::get('secretariasl','ColegiosController@listarS');
		Route::get('secretariosv/{dni}', 'UsersController@verS')->where(['dni' => '[0-9A-Za-z]+']);
		Route::post('secretariosc','UsersController@registrarS');
		Route::get('secretariosa/{dni}', 'UsersController@secretarioA')->where(['id' => '[0-9]+']);
		Route::post('secretariosado','UsersController@actualizarS');
		Route::get('secretariosb/{dni}', 'UsersController@borrarS')->where(['dni' => '[0-9A-Za-z]+']);
		Route::get('profesoresl','ColegiosController@listarP');
		Route::get('profesoresv/{dni}', 'UsersController@verP')->where(['dni' => '[0-9A-Za-z]+']);
		Route::post('profesoresc','UsersController@registrarP');		
		Route::get('profesoresa/{dni}', 'UsersController@profesorA')->where(['id' => '[0-9]+']);
		Route::post('profesoresado','UsersController@actualizarP');
		Route::get('profesoresb/{dni}', 'UsersController@borrarP')->where(['dni' => '[0-9A-Za-z]+']);
		Route::post('ajustesR','UsersController@actualizarRe');
	});

	Route::group(['prefix'=>'secretario', 'middleware' => 'auth'], function(){	
		/*vistas*/
		Route::get('bienvenido', function(){
			return view('Secretario.views.index');
		});
		Route::get('materias', function(){
			return view('Secretario.views.materias');
		});
		Route::get('ajustes', function(){
			return view('Secretario.views.ajustes');
		});
		Route::get('gruposl', function(){
			return view('Secretario.views.grupos');
		});
		/*controladores*/	
		Route::get('materiasl','MateriasController@listarMS');
		Route::post('materiasc','MateriasController@registrarMS');
		Route::get('materiasb/{id}', 'MateriasController@borrarMS')->where(['id' => '[0-9]+']);
		Route::get('profesoresl','ColegiosController@listarPS');
		Route::get('profesoresv/{dni}', 'UsersController@verPS')->where(['dni' => '[0-9A-Za-z]+']);
		Route::post('profesoresc','UsersController@registrarPS');		
		Route::get('profesoresa/{dni}', 'UsersController@profesorAS')->where(['id' => '[0-9]+']);
		Route::post('profesoresado','UsersController@actualizarPS');
		Route::get('profesoresb/{dni}', 'UsersController@borrarPS')->where(['dni' => '[0-9A-Za-z]+']);
		Route::get('alumnosl','ColegiosController@listarAS');
		Route::get('alumnosv/{dni}', 'UsersController@verAS')->where(['dni' => '[0-9A-Za-z]+']);
		Route::post('alumnosc','UsersController@registrarAS');		
		Route::get('alumnosa/{dni}', 'UsersController@alumnoAS')->where(['id' => '[0-9]+']);
		Route::post('alumnosado','UsersController@actualizarAS');
		Route::get('alumnosb/{id}', 'UsersController@borrarAS')->where(['id' => '[0-9]+']);
		Route::get('anhosl','ColegiosController@listarCAS');
		Route::post('anhosc','AnhosController@registrarAS');		
		Route::get('fechasa/{id}/{anho}', 'AnhosController@fechacorteAS')->where(['id' => '[0-9]+']);
		Route::post('fechasado','AnhosController@actualizarAS');
		Route::get('anhosb/{id}', 'AnhosController@borrarAS')->where(['id' => '[0-9]+']);
		Route::get('cursosv/{id}/{anho}','ColegiosController@listarCS');
		Route::post('cursosc','CursosController@registrarCS');	
		Route::get('cursosa/{id}', 'CursosController@alumnoAS')->where(['id' => '[0-9]+']);
		Route::post('cursosado','CursosController@actualizarAS');
		Route::get('cursosb/{id}', 'CursosController@borrarCS')->where(['id' => '[0-9]+']);
		Route::get('profesorencargadoa/{id}', 'CursosController@profesorAM')->where(['id' => '[0-9]+']);
		Route::post('profesorencargadoado','CursosController@actualizarAS');
		Route::get('alumnosasignadosv/{anho}/{grupo}/{id}','AsignacionController@listarAS');
		Route::post('alumnosasignadosc','AsignacionController@registrarAS');		
		Route::get('alumnosasignadosb/{id}', 'AsignacionController@borrarAS')->where(['id' => '[0-9]+']);
		Route::get('materiasasignadosv/{anho}/{grupo}/{id}','AsignacionController@listarMS');
		Route::post('materiasasignadasc','AsignacionController@registrarMS');		
		Route::get('materiasasignadasb/{id}', 'AsignacionController@borrarMS')->where(['id' => '[0-9]+']);
		Route::post('ajustesS','UsersController@actualizarSe');
	});

	Route::group(['prefix'=>'profesor', 'middleware' => 'auth'], function(){	
		Route::get('bienvenido', function(){
			return view('Profesor.views.index');
		});
		Route::get('ajustes', function(){
			return view('Profesor.views.ajustes');
		});
		/*controladores*/	
		Route::get('alumnosl','UsersController@verAP');
		Route::get('listarAN','NotasController@listarA');
		Route::get('listarNAP/{grado_id}/{alumno_id}/{dni}', 'NotasController@listarMN')->where(['id' => '[0-9]+']);
		Route::get('listarND/{grado_id}/{id_materia}/{nombre_materia}/{dni}','NotasController@listarND');	
		Route::post('notasc','NotasController@registrarNAP');	
		Route::get('notasa/{idnota}', 'NotasController@profesorAN')->where(['id' => '[0-9]+']);
		Route::post('notasado','NotasController@actualizarAS');
		Route::post('ajustesP','UsersController@actualizarPr');
	});

	Route::group(['prefix'=>'alumno', 'middleware' => 'auth'], function(){	
		Route::get('bienvenido', function(){
			return view('Alumno.views.index');
		});
		Route::get('ajustes', function(){
			return view('Alumno.views.ajustes');
		});
		/*controladores*/	
		Route::get('cursol','NotasController@verCursosA');
		Route::get('materiasl/{id}','NotasController@verMateriasA');
		Route::get('notal/{materia_id}/{nombre_materia}','NotasController@verNotaA');
		Route::post('ajustesAl','UsersController@actualizarAl');
	});

