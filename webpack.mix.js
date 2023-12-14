const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

mix.copyDirectory('resources/assets', 'public/assets')
mix.copyDirectory('resources/css', 'public/css')
mix.copyDirectory('resources/favicons', 'public/favicons')
mix.copyDirectory('resources/js', 'public/js')
mix.copyDirectory('resources/layouts', 'public/layouts')
mix.copyDirectory('resources/layouts', 'public/layouts')
mix.copyDirectory('resources/scss', 'public/scss')
mix.copyDirectory('resources/src', 'public/src')
mix.copyDirectory('resources/arrow', 'public/arrow')

