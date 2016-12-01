const   elixir = require('laravel-elixir'),
        postStylus = require('poststylus'),
        axis = require('axis'),
        rupture = require('rupture'),
        htmlmin = require('gulp-htmlmin'),
        cssnano = require('gulp-cssnano');

require('laravel-elixir-vue');
require('laravel-elixir-imagemin');

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

elixir.extend('compress', function() {
    new elixir.Task('compress', function() {
        return gulp.src('./storage/framework/views/*')
            .pipe(htmlmin({
                collapseWhitespace:    true,
                removeAttributeQuotes: true,
                removeComments:        true,
                minifyJS:              true,
            }))
            .pipe(gulp.dest('./storage/framework/views/'));
    })
    .watch('./resources/views/**/*.blade.php');
});

elixir.extend('cssnano', function() {
    new elixir.Task('cssnano', function() {
        return gulp.src('./public/css/*.css')
            .pipe(cssnano({
                safe:true,
                autoprefixer: {add:true}
            }))
            .pipe(gulp.dest('./public/css/'));

    })
    .watch('./resources/assets/stylus/**/*.styl');
});

elixir(mix => {
    mix
    .stylus('app.styl', null, {
        compress: true,
        use: [
            axis(),
            rupture(),
            postStylus(['lost', 'postcss-position'])
        ]
    })
    .webpack('app.js')
    .version('css/app.css')
    .imagemin({
        optimizationLevel: 3,
        progressive: true,
        interlaced: true
    })
    .browserSync({
        proxy: 'tredulan.dev',
        notify: false
    })
});
