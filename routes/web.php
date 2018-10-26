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

    Route::get('/reporte/estudiantes','StudentsController@renderReportTable')->name('report.student');

    Route::get('/reporte/registrados','RegistradosController@renderReportTable')->name('report.registrados');

//    Route::get('/reporte/inscritos','InscritosController@runningMigration')->name('report.inscritos');

    Route::get('/reporte/inscritos','InscritosController@list')->name('report.inscritos');

    Route::post('/reporte/inscritos','InscritosController@create');


    Route::get('/registrados/confirmar/{id}','RegistradosController@confirmateStudent');



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