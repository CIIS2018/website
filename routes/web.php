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


Route::group(['prefix' => 'admin'], function () {

    Route::get('/asistencia/estudiante', 'AssistenceController@student')->name('student');

    Voyager::routes();

    Route::get('/reporte/asistencia','AssistenceController@renderReportTable')->name('report.assistence');

Route::get('/reporte/inscritos/imprimir/{id}', 'InscritosController@imprimir')->name('imprimir');


    Route::get('/reporte/estudiantes','StudentsController@renderReportTable')->name('report.student');

    Route::get('/reporte/registrados','RegistradosController@renderReportTable')->name('report.registrados');

    Route::get('/registrados/confirmar/{id}','RegistradosController@confirmateStudent');

    Route::get('/reporte/registrados/mostrar/{id}','RegistradosController@show')->name('report.registrados.show');

    Route::post('/reporte/registrados/{id}/pago','RegistradosController@updatePay')->name('report.registrados.update.pay');

    Route::post('/reporte/registrados/{id}','RegistradosController@update')->name('report.registrados.update');

    Route::get('/reporte/registrados/buscar','RegistradosController@searchRegistered')->name('report.registrados.search');

 Route::get('/reporte/inscritos','InscritosController@list')->name('report.inscritos');
    Route::post('/reporte/inscritos','InscritosController@create');

    Route::get('/inscritos/confirmar/{id}','InscritosController@confirmateStudent');


    Route::get('/reporte/inscritos/mostrar/{id}','InscritosController@show')->name('report.inscritos.show');
    Route::post('/reporte/inscritos/{id}','InscritosController@update')->name('report.inscritos.update');



Route::get('/reporte/excel/export', 'ExportController@export');
Route::get('/reporte/excel/export1', 'ExportController@export01');
Route::get('/reporte/excel/export2', 'ExportController@export1');
Route::get('/reporte/excel/export3', 'ExportController@export2');
Route::get('/reporte/excel', 'ExportController@index')->name('report.excel');

Route::get('/reporte/taller','TallerController@listaTaller')->name('report.inscritosTaller');
Route::post('/reporte/taller','TallerController@create');
Route::get('/reporte/taller/mostrar/{id}','TallerController@show')->name('report.inscritosTaller.show');
Route::post('/reporte/taller/{id}','TallerController@update')->name('report.inscritosTaller.update');
Route::get('/reporte/taller/imprimir/{id}', 'TallerController@imprimir')->name('imprimir_taller');

 //concursos
 Route::get('/reporte/concurso','ConcursoController@listaConcurso')->name('report.inscritosConcurso');
 Route::post('/reporte/concurso','ConcursoController@create');
 Route::get('/reporte/concurso/mostrar/{id}','ConcursoController@show')->name('report.inscritosConcurso.show');
 Route::post('/reporte/concurso/{id}','ConcursoController@update')->name('report.inscritosConcurso.update');
Route::get('/reporte/concurso/imprimir/{id}', 'ConcursoController@imprimir')->name('imprimir_concurso');




});

Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {

    Route::get('/', 'CiisController@index')->name('index');

    Route::get('/inscripcion', 'CiisController@inscription')->name('inscription');
    Route::post('/inscripcion', 'CiisController@registerInscription');

    Route::get('/inscripcion-taller', 'CiisControllerTaller@inscriptionTaller')->name('inscriptionTaller');
    Route::post('/inscripcion-taller', 'CiisControllerTaller@registerInscriptionTaller');
});
Route::group(['namespace' => 'Mantenimiento', 'prefix' => 'mantenimiento', ], function () {
    //Clear Cache facade value:
        Route::get('/clear-cache', function () {
            $exitCode = Artisan::call('cache:clear');
            return '<h1>Cache facade value cleared</h1>';
        });
    //Reoptimized class loader:
        Route::get('/optimize', function () {
            $exitCode = Artisan::call('optimize');
            return '<h1>Reoptimized class loader</h1>';
        });
    //Route cache:
        Route::get('/route-cache', function () {
            $exitCode = Artisan::call('route:cache');
            return '<h1>Routes cached</h1>';
        });
    //Clear Route cache:
        Route::get('/route-clear', function () {
            $exitCode = Artisan::call('route:clear');
            return '<h1>Route cache cleared</h1>';
        });
    //Clear View cache:
        Route::get('/view-clear', function () {
            $exitCode = Artisan::call('view:clear');
            return '<h1>View cache cleared</h1>';
        });
    //Clear Config cache:
        Route::get('/config-cache', function () {
            $exitCode = Artisan::call('config:cache');
            return '<h1>Clear Config cleared</h1>';
        });
    });