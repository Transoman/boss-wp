module.exports = function () {
  $.gulp.task('watch', function () {
    $.gulp.watch($.path.build + '**/*.php', $.browserSync.reload);
    $.gulp.watch($.path.source + 'sass/**/*.sass', $.gulp.series('styles:dev'));
    $.gulp.watch([$.path.source + 'images/general/**/*.{png,jpg,gif,svg}',
      $.path.source + 'images/content/**/*.{png,jpg,gif,svg}'], $.gulp.series('img:dev'));
    $.gulp.watch($.path.source + 'images/svg/*.svg', $.gulp.series('svg'));
    $.gulp.watch($.path.source + 'js/**/*.js', $.gulp.series('js:dev', 'js:copy'));
    $.gulp.watch($.path.source + 'fonts/**/*.*', $.gulp.series('fonts'));
  });
};