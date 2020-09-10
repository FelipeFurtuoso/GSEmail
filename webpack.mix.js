

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

const mix = require('laravel-mix');
require('mix-tailwindcss'); // Require the mix-tailwindcss
mix.js('resources/js/app.js', 'public/js').sass('resources/sass/app.scss', 'public/css').tailwind(); // Enable the extension by calling tailwind() in your Mix chain
