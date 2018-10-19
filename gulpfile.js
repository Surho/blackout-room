'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var plumber = require('gulp-plumber');
var rename = require('rename');
var run = require('run-sequence');
var del = require('del');
var browserSync = require('browser-sync').create();
var cleanCSS = require('gulp-clean-css');


gulp.task('minify-css', () => {
  return gulp.src('css/*.css')
    .pipe(cleanCSS())
    .pipe(gulp.dest('css'));
});
 
gulp.task('serve', ['style'], function() {

    browserSync.init({
        server: "."
    });

    gulp.watch("sass/**/*.scss", ['style']);
    gulp.watch('*.html', ['html']);
});

gulp.task('html', function() {
    return gulp.src('*.html')
    .pipe(gulp.dest('build'))
    .pipe(browserSync.stream());
});

gulp.task('style', function() {
    gulp.src('sass/style.scss')
      .pipe(plumber())
      .pipe(sass())
      .pipe(gulp.dest('css'))
      .pipe(browserSync.stream());
});

gulp.task('copy', function() {
    return gulp.src([
      'fonts/**/*.{woff,woff2}',
      'img/**/*.{jpg,webp,svg,png}',
      'js/**',
      'css/**/*',
      '*.php'
    ], {
      base: '.'
    })
    .pipe(gulp.dest('build'));
  });

  gulp.task('clean', function() {
    return del('build');
  })

  gulp.task('finish', function(done) {
    run('clean', 'copy', 'style', 'html', done);
  })
