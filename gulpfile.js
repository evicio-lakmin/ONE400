'use strict';
 
const gulp = require('gulp');
const sass = require('gulp-sass');
const webp = require('gulp-webp');
const minify = require('gulp-minify');

function webpjpg() {
  return (
    gulp
    .src('assets/images/*.jpg')
    .pipe(webp())
    .pipe(gulp.dest('assets/webp'))
  );
}
function webppng() {
  return (
    gulp
    .src('assets/images/*.png')
    .pipe(webp())
    .pipe(gulp.dest('assets/webp'))
  );
}

function style() {
  return (
      gulp
        .src("sass/*.scss")
        .pipe(sass())
        .on("error", sass.logError)
        .pipe(gulp.dest("css"))
  );
}

function compressjs(){
  gulp.src('js/*.js')
  .pipe(minify({
      ext:{
          src:'-debug.js',
          min:'.js'
      },
  }))
  .pipe(gulp.dest('custom.min.js'))
}
function watch(){
  gulp.watch('sass/*.scss', style)
}

exports.style = style; 
exports.watch = watch;
exports.webpjpg = webpjpg;
exports.webppng = webppng;
exports.compressjs = compressjs;

exports.default = gulp.parallel(style, watch, webpjpg, webppng, compressjs);
