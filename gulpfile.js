
'use strict';

const gulp = require("gulp"),
  sass = require("gulp-sass")(require("sass")),
  sourcemaps = require("gulp-sourcemaps"),
  cleancss = require("gulp-clean-css"),
  autoprefixer = require("gulp-autoprefixer"),
  archiver = require('gulp-archiver');

const browserSupport = [
    "last 2 version",
    "safari 5",
    "ie 8",
    "ie 9",
    "opera 12.1",
    "ios 6",
    "android 4",
];
      

var PATHS = {
    sass: [
        './assets/scss/**/*.scss',
    ],
};
  
// Compile SCSS into CSS
gulp.task('sass', function () {
    return gulp
      .src(PATHS.sass)
      .pipe(sourcemaps.init())
      .pipe(sass.sync().on('error', sass.logError))
      .pipe(autoprefixer(browserSupport))
      .pipe(sourcemaps.write())
      .pipe(gulp.dest('./assets/css/'));
});
  
// Compile css
gulp.task("css", function () {
return gulp
    .src('./assets/scss/saros.scss')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(autoprefixer(browserSupport))
    .pipe(cleancss())
    .pipe(gulp.dest('./assets/css/'));
});

// zip 
gulp.task('zip', function () {
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
    ])
    .pipe(archiver('saros.zip'))
    .pipe(gulp.dest('./'));
});

// build
gulp.task('build', gulp.series('css', 'zip'));

// watch
gulp.task("watch", function () {
    gulp.watch(PATHS.sass, gulp.parallel('sass'));
});
  
// Default
gulp.task('default', function() {
    gulp.watch(PATHS.sass, gulp.parallel('sass'));
});


