module.exports = function () {
  $.gulp.task('clean', function () {
    return $.del([
      $.path.build + 'style.css',
      $.path.build + 'fonts/',
      $.path.build + 'js/',
      $.path.build + 'images/'
    ])
  })
};