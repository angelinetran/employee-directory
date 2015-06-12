var gulp = require('gulp'),
    usemin  = require('gulp-usemin'),
    globals = require('../globals'),
    gulpif = require('gulp-if'),
    uglify = require('gulp-uglify'),
    notify = require('gulp-notify'),
    csso = require('gulp-csso');
    rev = require('gulp-rev');

gulp.task('html', function () {

  return gulp.src(['app/**/*.html', 'app/**/*.php','app/.' ])
    .pipe(usemin({
      outputRelativePath: './',
      css: [csso()]
    }))
    .pipe(gulp.dest(globals.distPath));

});
