var gulp = require('gulp'),
    config = require('../config.js'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    sourcemaps = require('gulp-sourcemaps');

gulp.task('sass', function () {
 return gulp.src(config.paths.sass.src)
  .pipe(sourcemaps.init())
  .pipe(sass({
    includePaths: ['./node_modules'],
    outputStyle: 'compact'
  })).on('error', sass.logError)
  .pipe(autoprefixer({
     browsers: ['last 2 versions'],
     cascade: false
  }))
  .pipe(sourcemaps.write('./'))
  .pipe(gulp.dest(config.paths.sass.dest));
});
