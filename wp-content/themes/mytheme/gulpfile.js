var gulp = require('gulp');
var connect = require('gulp-connect-php');
var sass = require('gulp-sass');
var watch = require('gulp-watch');
var minifycss = require('gulp-minify-css');
var rename = require('gulp-rename');
var gzip = require('gulp-gzip');
var jshint = require('gulp-jshint');
var livereload = require('gulp-livereload');
var shell = require('gulp-shell');
var opn = require('opn');

// SERVER OPTIONS

var serverOptions = {
    port: '8007',
    base: '../../../',
    open: true
}

// GZIP OPTIONS
var gzip_options = {
    threshold: '1kb',
    gzipOptions: {
        level: 9
    }
};

// PROCESSES, MINIFIES, AND GZIPS SASS FILES
gulp.task('sass', function() {
    return gulp.src('css/sass/*.scss')
        .pipe(sass({errLogToConsole: true}))
        .pipe(gulp.dest('css/stylesheets'))
        .pipe(rename({suffix: '.min'}))
        .pipe(minifycss())
        .pipe(gulp.dest('css/stylesheets'))
        .pipe(gzip(gzip_options))
        .pipe(gulp.dest('css/stylesheets'));
});

// JAVASCRIPT ERROR CHECKING
gulp.task('lint', function() {
    return gulp.src('js/custom/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});

// SERVER LAUNCH

gulp.task('connect', function() {
    connect.server(serverOptions);
});

//gulp.task('php', function(){
//    gulp.src('./*.php')
//        .pipe(connect.reload());
//});


// RUNS DJANGO SERVER
// OMIT TO RUN DJANGO SERVER SEPARATELY

//gulp.task('django', shell.task(['. venv/bin/activate && pip install -r requirements.txt && python ./manage.py runserver']));


gulp.task('watch', function() {

    gulp.watch('css/sass/*.scss', ['sass']);
    gulp.watch('js/custom/*.js', ['lint']);
    //gulp.watch(['./*.php'], ['php']);


});

gulp.task('default', ['sass', 'lint', 'watch', 'connect']);
