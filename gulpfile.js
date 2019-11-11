'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass');
const webp = require('gulp-webp');
 
gulp.task('default', () =>
    gulp.src('src/image.jpg')
        .pipe(webp())
        .pipe(gulp.dest('dist'))
);
function webP() {
  return (
    gulp
    .src('assets/images/*.jpg')
    .pipe(webp())
    .pipe(gulp.dest('assets/webP'))
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

function watch(){
  gulp.watch('sass/*.scss', style)
}

exports.style = style; 
exports.watch = watch;
exports.webP = webP;

exports.default = gulp.parallel(style, watch, webP);
