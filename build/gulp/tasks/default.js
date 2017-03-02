var gulp = require('gulp');

require('./copy.js');
require('./sass.js');

gulp.task('default', ['copy', 'sass']);
