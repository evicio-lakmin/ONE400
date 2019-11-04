'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require("browser-sync").create();

// Define tasks after requiring dependencies
function style() {
  return (
      gulp
          .src("sass/*.scss")
          // Use sass with the files found, and log any errors
          .pipe(sass())
          .on("error", sass.logError)
          .pipe(gulp.dest("css"))
          .pipe(browserSync.stream())
  );
}

//reloads browserSync 
function reload() {
  browserSync.reload();
}

function watch(){
  	
  // browserSync.init({
  //     // You can tell browserSync to use this directory and serve it as a mini-server
  //     server: {
  //         baseDir: "/"
  //     }
  // });
  // gulp.watch takes in the location of the files to watch for changes
  // and the name of the function we want to run on change
  gulp.watch('sass/*.scss', style)
  gulp.watch("/*.html", reload);
}

// $ gulp style
exports.style = style; 
// Don't forget to expose the task!
exports.watch = watch;

exports.default = gulp.parallel(style, watch);
