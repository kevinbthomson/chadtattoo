const { watch, series, parallel, src, dest } = require('gulp');
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const autoprefixer = require('gulp-autoprefixer');
const minifyCSS = require('gulp-csso');

const sassOptions = {
  errLogToConsole: true,
  outputStyle: 'compressed'
};

function css() {
  return src('./src/styles/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass(sassOptions).on('error', sass.logError))
    .pipe(sourcemaps.write())
    .pipe(autoprefixer())
    .pipe(minifyCSS())
    .pipe(dest('./'));
}

watch('./src/styles/**/*.scss', css);

exports.css = css;
exports.default = parallel(css);