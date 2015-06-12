var gulp = require('gulp'),
  browserify = require('gulp-browserify'),
  coffeeify = require('coffeeify'),
  source = require('vinyl-source-stream'),
  plumber = require('gulp-plumber'),
  notify = require('gulp-notify'),
  rename = require('gulp-rename'),
  concat = require('gulp-concat'),
  uglify = require('gulp-uglify'),
  globals = require('../globals');


gulp.task('scripts', function () {

   gulp.src([
    globals.appPath + '/assets/javascripts/app.js',
    globals.appPath + '/assets/javascripts/services.js',
    globals.appPath + '/assets/javascripts/directives.js',
    globals.appPath + '/assets/javascripts/controllers.js'
    ])
    .pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %>")}))
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest(globals.appPath + '/_tmp/javascripts'))
    .pipe(notify('Gulp successfully compiled your coffeescript files!'));

});
