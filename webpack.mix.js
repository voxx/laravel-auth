let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Remove momentJS extra language dependencies
 |--------------------------------------------------------------------------
 |
 | https://laracasts.com/discuss/channels/elixir/laravel-mix-prevent-momentjs-locales
 */
 const webpack = require('webpack');
 mix.webpackConfig({
   plugins: [
     new webpack.IgnorePlugin(/^\.\/locale$/, /moment$/)
   ]
 })

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .version();
