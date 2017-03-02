module.exports = {
  paths: {
    cacheDir: '.cache',
    fonts: {
      src: 'fonts/*.*',
      dest: '../assets/fonts'
    },
    images: {
      src: 'img/*.{png,gif,jpg}',
      dest: '../assets/img'
    },
    javascript: {
      src: 'js/*.js',
      dest: '../assets/js',
      vendor: 'js/vendor/*.*'
    },
    sass: {
      src: 'sass/**/*.scss',
      dest: '../assets/css'
    }
  }
};
