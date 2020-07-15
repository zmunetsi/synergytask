const mix = require('laravel-mix');

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

mix.styles([
    'resources/css/bootstrap.min.css',
    'resources/css/core.css',
    'resources/css/icons.css',
    'resources/css/components.css',
    'resources/css/pages.css',
    'resources/css/menu.css',
    'resources/css/responsive.css',
    'resources/css/elements.css',
    'resources/css/datepicker.css',
], 'public/css/app.css')
    .js('resources/js/app.js', 'public/js');
   
