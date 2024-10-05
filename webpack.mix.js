const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .react()
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
    mix.react('resources/js/app.js', 'public/js')
   .react('resources/js/helloreact.js', 'public/js') // here your new react component
   .sass('resources/sass/app.scss', 'public/css');