'use strict';

var gulp = require('gulp'),
    watch = require('gulp-watch'),
    uglify = require('gulp-uglify'),
    sourceMaps = require('gulp-sourcemaps'),
    cssmin = require('gulp-minify-css'),
    imageMin = require('gulp-imagemin'),
    pngQuant = require('imagemin-pngquant'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    concat = require('gulp-concat');



var path = {
    build: {
        js: 'assets/js/dist',
        img: 'assets/images',
        css: 'assets/css'
    },

    src: {
        js: 'assets/scripts/*.js',
        img: 'assets/images/src/*.*',
        style: 'assets/scss/common.scss'
    }
};


var config = {
    server: {
        baseDir: "/assets/"
    },
    tunnel: true,
    host: 'localhost',
    port: 9000,
    logPrefix: "kidsLog"
};


gulp.task('js:build', function() {
    gulp.src(path.src.js)
        .pipe(sourceMaps.init())
        .pipe(concat('scripts.js'))
        .pipe(uglify())
        .pipe(sourceMaps.write())
        .pipe(gulp.dest(path.build.js))
});


gulp.task('style:build', function() {
    gulp.src(path.src.style)
        .pipe(sourceMaps.init())
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(cssmin())
        .pipe(sourceMaps.write())
        .pipe(gulp.dest(path.build.css))
});


gulp.task('image:build', function() {

    gulp.src(path.src.img)
        .pipe(imageMin({
            progressive: true,
            svgoPlugins: [{ removeViewBox: false }],
            use: [pngQuant],
            interplaced: true
        }))
        .pipe(gulp.dest(path.build.img))

});

gulp.task('watch', function(event, cb) {
    watch([path.watch.style], function(event, cb) {
        gulp.start('style:build');
    });

    watch([path.watch.js], function(event, cb) {
        gulp.start('js:build');
    });

    watch([path.watch.img], function(event, cb) {
        gulp.start('image:build');
    });
});