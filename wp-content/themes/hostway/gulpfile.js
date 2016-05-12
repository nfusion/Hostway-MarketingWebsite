var gulp = require('gulp');

/**
 * Automatically load any gulp plugins in your package.json
 *
 * @see https://www.npmjs.com/package/gulp-load-plugins
 */
var plugins = require('gulp-load-plugins')();
var path = require('path');

/**
 * 1. Join all scripts from assets/js/dev
 * 2. Minify JS
 * 3. Save as app.min.js in assets/js
 */
gulp.task('js', function () {
    return gulp.src('./assets/js/dev/**.js')
        .pipe(plugins.concat('app.min.js'))
        .pipe(plugins.uglify())
        .pipe(gulp.dest('./assets/js/'));
});

/**
 * 1. Compile all sass files in assets/styles/sass/
 * 2. Minify styles
 * 3. Join styles all styles
 * 4. Save as style.min.css in assets/styles/css
 * */
gulp.task('sass', function () {
    gulp.src(
        [
            //   './assets/styles/scss/bootstrap/variables.sass',
            // './assets/styles/scss/bootstrap/mixins.sass',
            './assets/styles/scss/bootstrap/**/*.scss',
            './assets/styles/scss/style.scss'
        ])
        .pipe(plugins.sass(
            {
                outputStyle: 'compressed',
                includePaths: require('node-bourbon').includePaths.concat(require('node-neat').includePaths).concat(require('node-normalize-scss').includePaths)
            }
        ).on('error', plugins.sass.logError))
        .pipe(plugins.concat('style.min.css'))
        .pipe(gulp.dest('./assets/styles/css'))
});

gulp.task('default', function () {
    gulp.watch('assets/styles/scss/**', ['sass']);
    gulp.watch('assets/js/dev/**', ['js']);
});