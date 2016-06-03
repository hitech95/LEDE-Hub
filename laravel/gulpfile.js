var elixir = require('laravel-elixir');

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

elixir(function(mix) {
    mix.sass([
        'app.scss',
        '../bower_components/font-awesome/scss/font-awesome.scss'
    ], 'public/assets/css/app.css');

    mix.copy('resources/assets/bower_components/font-awesome/fonts', 'public/assets/fonts');

    mix.scripts([
        '../bower_components/jquery/dist/jquery.js',
        '../bower_components/bootstrap/dist/js/bootstrap.js'
    ], 'public/assets/js/app.js');
});
