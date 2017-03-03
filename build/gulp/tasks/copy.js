var gulp = require('gulp'),
    config = require('../config.js'),
    newer = require('gulp-newer');

gulp.task('copy', function(cb) {

  gulp.src(config.paths.fonts.src)
    .pipe(newer('../css/fonts'))
    .pipe(gulp.dest(config.paths.fonts.dest));

  gulp.src(config.paths.images.src)
    .pipe(newer('../img'))
    .pipe(gulp.dest(config.paths.images.dest));

  cb();
});
