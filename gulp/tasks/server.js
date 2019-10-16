module.exports = function() {
  $.gulp.task('server', function() {
    $.browserSync.init({
      proxy: $.url,
      open: true,
      notify: false
    });
  });
};