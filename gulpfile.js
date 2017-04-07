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
	//Assets generales
    mix.sass([
    	'app.scss'
	],'public/css/main.css');

	mix.scripts([
		'main.js'
	], 'public/js/main.js');

	//Assets especificos
	mix.sass('login.scss','public/css/login.css');
	mix.scripts(['profile.js'], 'public/js/profile.js');
});
