
'use strict';

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    archiver = require('gulp-archiver'),
    autoprefixer = require('gulp-autoprefixer'),
    rename = require('gulp-rename'),
    header = require('gulp-header'),
    pkg = require('./package.json');

var PATHS = {
    sass: [
        './assets/scss/**/*.scss',
    ],
};
  
// Compile SCSS into CSS
gulp.task('sass', function () {
    return gulp.src('./assets/scss/saros.scss')
        .pipe(sourcemaps.init())
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./assets/css/'))
        .pipe(gulp.dest('./assets/css/'));
});


// zip 
gulp.task('build', function () {
    return gulp.src([
        './**',
        '!package.json',
        '!package-lock.json',
        '!gulpfile.js',
        '!*.md',
        '!*.zip',
        '!.gitignore',
        '!./node_modules',
        '!./node_modules/**',
        '!./assets/scss',
        '!./assets/scss/**',
    ]).pipe(archiver('saros.zip')).pipe(gulp.dest('./'));
});

// Default
gulp.task('default', function() {
    gulp.watch(PATHS.sass, gulp.parallel('sass'));
});


