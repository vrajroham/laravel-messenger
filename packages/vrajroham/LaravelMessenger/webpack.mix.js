const { mix } = require('laravel-mix');

mix.sass('resources/assets/sass/app.scss', 'resources/assets/compiled/css/laravel-messenger.css');
mix.js('resources/assets/js/app.js', 'resources/assets/compiled/js/laravel-messenger.js');