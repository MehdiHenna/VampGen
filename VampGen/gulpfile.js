var elixir = require('laravel-elixir');
var gulp = require('gulp');
var browserify = ('browserify');
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
 	mix.sass('app.scss');
 });

 elixir(function(mix){
 	mix.browserify('app.js');
 });

 elixir(function(mix){
 	mix.browserSync({
 		proxy:'vampgen.dev'
 	});
 });

 gulp.task('jsx', function(){
 	var app = browserify({
 		entries: ['./resources/assets/js/app.js'],
 		outfile: ['./public/js/app.js'],
 		transform: [reactify, babelify],
 		debug: true,
 		cache: {}, packageCache: {}, fullPaths: true
 	});
 })