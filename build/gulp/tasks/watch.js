var gulp = require('gulp'),
    config = require('../config.js');

require('./browserify.js');
require('./default.js');
require('./sass.js');

gulp.task('watch', ['default'], function() {

  gulp.watch(config.paths.sass.src, ['sass']);
  gulp.start('watch:js');
});
