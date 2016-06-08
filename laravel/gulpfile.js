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

elixir(function (mix) {
    //Theme CSS
    mix.sass([
        '../bower_components/bootstrap/scss/bootstrap.scss',
        '../bower_components/selectize/dist/css/selectize.bootstrap3.css',
        'app.scss'
    ], 'public/assets/css/theme.css');


    //Resources
    mix.scripts([
        '../bower_components/metisMenu/dist/metisMenu.js', //Admin menu
        '../bower_components/microplugin/src/microplugin.js', //required by selectize
        '../bower_components/sifter/sifter.js', // required by selectize
        '../bower_components/selectize/dist/js/selectize.js', //Tag input for the form
        '../bower_components/speakingurl/lib/speakingurl.js', //required by slugify
        '../bower_components/jquery-slugify/src/slugify.js', //Make slugs from an input form
    ], 'public/assets/js/resources.js');

    //Page scripts
    mix.scripts([
        'admin.form.js'
    ], 'public/assets/js/app.js');

    mix.copy('resources/assets/bower_components/font-awesome/fonts', 'public/assets/fonts');
});
