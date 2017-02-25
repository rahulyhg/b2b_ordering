var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var uglify = require('gulp-uglify');
var babel = require('gulp-babel');
var rename = require('gulp-rename');

gulp.task('styles', function() {
  return gulp.src('scss/styles.scss')
    .pipe(sourcemaps.init())
      .pipe(sass({
        outputStyle: 'compressed',
      }).on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 3 versions'],
    }))
    .pipe(sourcemaps.write())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('./assets/css'));
});

gulp.task('scripts', function() {
  return gulp.src('assets/js/index.js')
    .pipe(sourcemaps.init())
      .pipe(babel({
        presets: ['es2015'],
      }))
      .pipe(uglify())
    .pipe(sourcemaps.write())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('assets/js/'));
});

gulp.task('default', ['styles', 'scripts'], function() {
  gulp.watch('scss/**/*.scss', ['styles']);
  gulp.watch('assets/js/**/*.js', ['scripts']);
});
