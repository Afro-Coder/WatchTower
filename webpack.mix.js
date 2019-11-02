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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.copy('vendor/bootstrap/css/bootstrap.min.css','public/css/bootstrap.min.css');
mix.copy('vendor/bootstrap/css/bootstrap.min.css.map','public/css/bootstrap.min.css.map');
mix.copy('vendor/bootstrap/js/bootstrap.bundle.js','public/js/bootstrap.bundle.js');
// mix.copy('vendor/bootstrap/js/bootstrap.min.js','public/js/bootstrap.min.js');
mix.copy('vendor/fontawesome-free/css/all.min.css','public/css/all.min.css');
mix.copy('vendor/jquery/jquery.min.js','public/js/jquery.min.js');
mix.copy('vendor/jquery-easing/jquery.easing.min.js','public/js/jquery.easing.min.js')
mix.copyDirectory('vendor/fontawesome-free/webfonts','public/webfonts/');
