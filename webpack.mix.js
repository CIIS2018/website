let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles(['resources/assets/css/bootstrap.css',
    'resources/assets/css/mocade.css',
    'resources/assets/css/all.css',
    'resources/assets/css/taller.css',
    'resources/assets/css/precios.css',

], 'public/css/frontend.min.css')
    .scripts([
        'resources/assets/js/taller.js',
        'resources/assets/js/smooth.js'
    ], 'public/js/frontend.min.js')
