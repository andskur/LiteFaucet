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

/*elixir(function(mix) {
 mix.sass('app.scss');
 });*/

/*
 elixir(function (mix) {
 // Compile CSS
 mix.sass('app.scss', 'public/css/app.css', {
 includePaths: [
 'bower_components/foundation-sites/scss/'
 ]
 });

 // Compile JavaScript
 mix.scripts(
 ['vendor/modernizr.js', 'jquery/dist/jquery.min.js', 'foundation-sites/dist/foundation.min.js'], // Source files. You can also selective choose only some components
 'public/js/app.js', // Destination file
 'bower_components/' // Source files base directory
 );
 });*/

elixir(function (mix) {

    // Sass
    var options = {
        includePaths: [
            'bower_components/foundation-sites/scss',
            'bower_components/motion-ui/src'
        ]
    };

    mix.sass('app.scss', null, options);

    // Javascript
    var jQuery = '../../../bower_components/jquery/dist/jquery.js';
    var foundationJsFolder = '../../../bower_components/foundation-sites/js/';

    mix.scripts([
        jQuery,
        foundationJsFolder + 'foundation.core.js',
        // Include any needed components here. The following are just examples.
        // foundationJsFolder + 'foundation.util.keyboard.js',
        // foundationJsFolder + 'foundation.util.timerAndImageLoader.js',
        // foundationJsFolder + 'foundation.tabs.js',
        // foundationJsFolder + 'foundation.accordion.js',
        // foundationJsFolder + 'foundation.dropdown.js',
        // foundationJsFolder + 'foundation.dropdownMenu.js'
        // This file initializes foundation
        // 'start_foundation.js'
    ]);

    /*mix.scripts([
        jQuery,
        '../../../bower_components/foundation-sites/dist/foundation.min.js',
        // foundationJsFolder + 'foundation.util.keyboard.js',
        // foundationJsFolder + 'foundation.util.timerAndImageLoader.js',
        // foundationJsFolder + 'foundation.tabs.js'
    ]);*/
});