const elixir = require('laravel-elixir');

// require('laravel-elixir-vue-2');

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

elixir(mix => {
    mix.sass('app.scss')
      .webpack('app.js')
      .copy(
        'resources/assets/js/lib/jquery-3.1.1.js',
        'public/js/lib'
      )
      .copy(
        'node_modules/bootstrap/dist',
        'public/packages/bootstrap'
      )
      .copy(
        'node_modules/dropzone/dist',
        'public/packages/dropzone'
      )
      .copy(
        'node_modules/lightgallery/dist',
        'public/packages/lightgallery'
      )
      .scripts([
       	'dropzone-config.js'
      ], 
        'public/js/dropzone-config.js');
});
