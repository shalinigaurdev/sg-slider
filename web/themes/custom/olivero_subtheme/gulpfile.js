const { src, dest, watch, series, parallel } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const sassGlob = require('gulp-sass-glob');
const sourcemaps = require('gulp-sourcemaps');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
var paths = {
  sassSrc: 'scss/styles.scss',
  sassDest: 'dist/css/',
  jsSrc: 'js/**/*.js',
  jsDest: 'dist/js/',
}
function buildStyles() {
 return src(paths.sassSrc)
   .pipe(sassGlob())
   .pipe(sourcemaps.init())
   .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
   .pipe(sourcemaps.write('./'))
   .pipe(dest(paths.sassDest));
}
function buildScripts() {
 return src(paths.jsSrc)
   .pipe(sourcemaps.init())
   .pipe(uglify())
   .pipe(concat('scripts.js'))
   .pipe(sourcemaps.write('./'))
   .pipe(dest(paths.jsDest));
}
exports.buildStyles = buildStyles;
exports.buildScripts = buildScripts;
exports.watch = function () {
 watch(paths.sassSrc, buildStyles);
 watch(paths.jsSrc, buildScripts);
};
exports.default = parallel(buildStyles, buildScripts);