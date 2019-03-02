'use strict';

const { watch, series, src, dest } = require('gulp');
const sass = require('gulp-sass');
const cssnano = require('gulp-cssnano');
const sourcemaps = require('gulp-sourcemaps');
const autoprefixer = require('gulp-autoprefixer');

function transformScssToCss() {
  return src('./scss/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(
      autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false
      })
    )
    .pipe(cssnano())
    .pipe(sourcemaps.write('./'))
    .pipe(dest('../wp-content/themes/daylight/css'));
}

watch('./src/scss/**/*.scss', transformScssToCss);

exports.default = series(transformScssToCss);

