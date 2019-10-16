let gp = require('gulp-load-plugins')(),
    autoprefixer = require('autoprefixer'),
    stylesPATH = {
      "input": $.path.source + "sass/",
      "ouput": $.path.build
    };

module.exports = function () {
  $.gulp.task('styles:dev', () => {
    return $.gulp.src(stylesPATH.input + 'style.sass')
      .pipe(gp.plumber())
      .pipe(gp.sourcemaps.init())
      .pipe(gp.sass({outputStyle: 'nested'}).on('error', gp.notify.onError()))
      .pipe(gp.postcss([
        autoprefixer({
          cascade: false
        })
      ]))
      .pipe(gp.groupCssMediaQueries())
      .pipe(gp.sourcemaps.write())
      .pipe($.gulp.dest(stylesPATH.ouput))
      .pipe($.browserSync.stream());
  });

  $.gulp.task('styles:build', () => {
      return $.gulp.src(stylesPATH.input + 'style.sass')
        .pipe(gp.sass())
        .pipe(gp.postcss([
          autoprefixer({
            cascade: false
          })
        ]))
        .pipe(gp.groupCssMediaQueries())
        .pipe(gp.csscomb())
        .pipe($.gulp.dest(stylesPATH.ouput))
  });
  $.gulp.task('styles:build-min', () => {
    return $.gulp.src(stylesPATH.input + 'style.sass')
      .pipe(gp.sass())
      .pipe(gp.postcss([
        autoprefixer({
          cascade: false
        })
      ]))
      .pipe(gp.groupCssMediaQueries())
      .pipe(gp.csscomb())
      .pipe(gp.csso())
      .pipe($.gulp.dest(stylesPATH.ouput))
  });
};