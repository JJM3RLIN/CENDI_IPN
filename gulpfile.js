const {src, dest} = require('gulp');
const terser = require('gulp-terser-js');
const sourcemaps = require('gulp-sourcemaps');
const concat = require('gulp-concat');
const rename = require('gulp-rename');
const javascript = ()=>{
  return src("src/js/*.js")
         .pipe(sourcemaps.init())
         .pipe(concat('bundle.js')) //Archivo final que juntara  todo el js
         .pipe( terser() )  //Minificams el js para hacerlo mas ligero
         .pipe(sourcemaps.write("."))
         .pipe(rename({ suffix: '.min' }))
         .pipe(dest("public/js/"))
}

exports.javascript =javascript;