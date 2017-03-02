var gulp = require('gulp'),
    gutil = require('gulp-util'),
    browserify = require('browserify'),
    watchify = require('watchify'),
    babelify = require('babelify'),
    source = require('vinyl-source-stream'),
    config = require('../config.js');

gulp.task('watch:js', function () {

  var b = browserify('js/app.js', {
    cache: {},
    packageCache: {},
    debug: true
  });

  b.plugin(watchify, {
    poll: 300
  });
  b.transform(babelify, {
    presets: ['es2015'],
    ignore: '/node_modules/'
  });
  b.transform('browserify-shim');

  function rebundle(file) {

    if(file) {
      file.map(function(fileName) {
        gutil.log('File updated: ', gutil.colors.yellow(fileName));
      });
    }

    return b.bundle().on('error', function(err) {
              gutil.log("Browserify error:", err);
              this.emit('end');
            })
            .pipe(source('app.js'))
            .pipe(gulp.dest(config.paths.javascript.dest));
  }

  b.on('update', rebundle);
  b.on('log', function(msg) {
    gutil.log(gutil.colors.red(msg));
  });
  rebundle();
});
