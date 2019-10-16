module.exports = function () {
  $.gulp.task('fonts', () => {
    return $.gulp.src($.path.source + 'fonts/**/*.*')
      .pipe($.gulp.dest($.path.build + 'fonts/'));
  });
};