var gulp = require('gulp');
var phpunit = require('gulp-phpunit');
var phpcs = require('gulp-phpcs');
var less = require('gulp-less');
var path = require('path');
var browserify = require('browserify');
var sourcemaps = require('gulp-sourcemaps');
var source = require('vinyl-source-stream');
var buffer = require('vinyl-buffer');
var uglify = require('gulp-uglify');

gulp.task('javascript', function() {

  var bundler = browserify({
    entries: ['./resources/assets/js/app.js'],
    debug: true
  });

  var bundle = function() {
    return bundler
      .bundle()
      .pipe(source('app.js'))
      .pipe(buffer())
      .pipe(sourcemaps.init({loadMaps: true}))
        // Add transformation tasks to the pipeline here.
        .pipe(uglify())
      .pipe(sourcemaps.write('./'))
      .pipe(gulp.dest('./public/js/'));
  };

  return bundle();
});

gulp.task('phpunit', function() {
    var options = {debug: false};
    gulp.src('phpunit.xml').pipe(phpunit('./vendor/bin/phpunit',options))
    .on('error',function(){
        console.log('PHP UNIT FAILED');
    });
});

gulp.task('less', function () {
  return gulp.src('./resources/assets/less/app.less')
    .pipe(less({
      paths: [ path.join(__dirname, 'node_modules') ]
    }))
    .pipe(gulp.dest('./public/css'));
});

gulp.task('phpcs', function() {
    return gulp.src('classes/**/*.php')
    .pipe(phpcs({
        bin:'./vendor/bin/phpcs',
        standard: 'PSR2',
        warningSeverity: 0
    }))
    .pipe(phpcs.reporter('log'));
});

gulp.task('watch', function(){
    gulp.watch(['classes/**/*.php', 'tests/**/*.php'], ['phpcs','phpunit']);
});

gulp.task('default',['less', 'javascript']);
