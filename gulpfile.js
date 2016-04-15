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
    	'partial.scss'])
        .sass(['admin.scss'], 'public/css/admin.css')
    	.sass(['main.scss'], 'public/css/main.css')
    	.styles([
		'animate.min.css',
		'prettyPhoto.css',
		'responsive.css'
        ], 'public/css/libs.css')
        .scripts([
        'bootstrap.min.js',
        'html5shiv.js',
        'respond.min.js',
        'wow.min.js',
        'easing.js',
        'responsive-nav.js'
        ], 'public/js/libs.js')
        .scripts(['main.js']);
});
