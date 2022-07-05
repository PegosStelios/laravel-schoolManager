const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css', [
        //
    ])
    .browserSync({
        proxy: 'site',
        open: false,
        port: 3000,
    });
