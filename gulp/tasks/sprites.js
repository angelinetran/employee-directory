var gulp = require('gulp');
var gulpif = require('gulp-if');
var sprite = require('css-sprite').stream;

// generate sprite.png and _sprite.scss
gulp.task('sprites', function () {
  return gulp.src(globals.appPath + '/assets/images/**/*.png')
    .pipe(sprite({
      name: 'sprite',
      style: '_sprite.scss',
      cssPath: '/assets/stylesheets/modules/',
      processor: 'scss',
    }))
    .pipe(notify('Gulp successfully created your sprites!'))
    .pipe(gulpif('*.png', gulp.dest(globals.distPath + '/assets/images'), gulp.dest(globals.distPath + '/assets/stylesheets')))
});