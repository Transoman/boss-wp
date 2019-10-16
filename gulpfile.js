"use strict";

global.$ = {
  url: 'boss.loc',
  path: {
    task: require('./gulp/path/tasks.js'),
    source: 'src/',
    build: 'app/content/themes/irontheme/'
  },
  gulp: require('gulp'),
  browserSync: require('browser-sync').create(),
  del: require('del')
};

$.path.task.forEach(function (taskPath) {
  require(taskPath)();
});

$.gulp.task('dev', $.gulp.series(
  'clean',
  $.gulp.parallel(
    'fonts',
    'styles:dev',
    'img:dev',
    'js:dev',
    'js:copy',
    'svg'
  )
));

$.gulp.task('build', $.gulp.series(
  'clean',
  $.gulp.parallel(
    'fonts',
    'styles:build-min',
    'img:build',
    'js:build-min',
    'js:copy',
    'svg'
  )
));

$.gulp.task('default', $.gulp.series(
  'dev',
  $.gulp.parallel(
    'watch',
    'server'
  )
));