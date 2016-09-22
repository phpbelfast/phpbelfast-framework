const elixir = require('laravel-elixir');
require('laravel-elixir-caddysync');

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
elixir.config.assetsPath='assets';
elixir.config.appPath='PhpBelfast';
elixir.config.viewPath='views';

elixir(mix => {

    // Fonts.

    mix.copy('./bower_components/bootstrap/fonts/**', 'public/fonts');

    // Application LESS.

    mix.less('app.less', 'public/css/');

    mix.scripts([
        './bower_components/jquery/dist/jquery.js',
        './bower_components/bootstrap/dist/js/bootstrap.js',
        'resources/assets/js/**/*.js'
    ], 'public/js/app.js', './');

    // Initialize BrowserSync.
    mix.caddySync();
});
