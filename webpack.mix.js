let mix = require('laravel-mix');

mix.options({
    processCssUrls: false
});

mix
.js('src/app.js', 'dist').js('src/animations-single.js', 'dist').js('src/animations-home.js', 'dist').js('src/animations-archive.js','dist')
.sass('src/app.scss', 'dist');