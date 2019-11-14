const gulp   = require('gulp');
const sass   = require('gulp-sass');
const concat = require('gulp-concat');
const babel  = require('gulp-babel');


gulp.task('sass', () =>
  gulp
    .src(['../_src/scss/**/*.scss'])
    .pipe(sass().on('Syntax Error', sass.logError))
    .pipe(gulp.dest('../static/css/'))
);

const srcJs = [,
  '../_src/js/inc/file1.js',
  '../_src/js/inc/file2.js'
];

gulp.task('js', () =>
  gulp
    .src([...srcJs])
    .pipe(concat('bundle.js'))
    .pipe(babel({ presets: ['@babel/preset-env'] }))
    .pipe(gulp.dest('../static/js/'))
);