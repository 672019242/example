const mix = requie('laravel-mix');


mix.js('resources/js/app.js', 'public/js')

    .sass('resources/sass/app.scss', 'public/css', [


    ]);