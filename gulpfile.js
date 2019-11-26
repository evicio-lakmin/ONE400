'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass');

function style() {
  return (
      gulp
        .src("sass/*.scss")
        .pipe(sass({outputStyle: 'compressed'}))
        .on("error", sass.logError)
        .pipe(gulp.dest("css"))
  );
}

function watch(){
  gulp.watch('sass/*.scss', style)
}

exports.style = style; 
exports.watch = watch;

exports.default = gulp.parallel(style, watch);
