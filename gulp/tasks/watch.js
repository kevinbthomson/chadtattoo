var gulp = require('gulp'),
  watch = require('gulp-watch');

gulp.task('watch', function() {
  watch('./src/styles/**/*.scss', function() {
    gulp.start('styles');
  });
});