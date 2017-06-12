/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

//elixir(function(mix) {
//    mix.sass('app.scss','public/styles/style.css')
//        .sass('front.scss','public/front/css/front.css')
//    ;
//});

/*elixir(function(mix) {
    mix.sass('app.scss');
});*/

/*elixir.config.assetsPath = 'assets';
elixir(function(mix) {
    mix.less('app.less');
});*/

/*elixir(function(mix) {
 mix.scripts(['1.js','2.js','3.js']);
 });*/

var elixir = require('laravel-elixir');
elixir(function(mix) {
    mix.styles(['1.css','2.css','3.css']).version('css/all.css');
});





