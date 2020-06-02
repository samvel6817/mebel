'use strict';

const gulp = require('gulp'),
    /* postcss plugins */
    postcss = require('gulp-postcss'),
    autoprefixer = require('autoprefixer'),
    cssnano = require('cssnano'),
    postcssImport = require('postcss-import'),

    /* gulp plugins */
    concat = require('gulp-concat'),
    sourcemaps = require('gulp-sourcemaps'),
    del = require('del'),
    cache = require('gulp-cache'),
    imagemin = require('gulp-imagemin'),
    uglify = require('gulp-uglify'),
    rigger = require('gulp-rigger'),
    browserSync = require('browser-sync');

const browserify = require('browserify');
const source = require('vinyl-source-stream');
const buffer = require('vinyl-buffer');

const fontsFiles = ['./src/fonts/**/*'];
const jsPlugins = ['./src/plugins/**/*'];
const jsFiles = ['./src/js/main.js'];
const imgFiles = ['./src/img/**/*'];
const otherFiles = ['./src/**/*.php', './src/**/.htaccess', './src/**/.htpasswd'];

function fonts() {
    return gulp.src(fontsFiles)
        .pipe(gulp.dest('./build/fonts/'))
}

function other() {
    return gulp.src(otherFiles)
        .pipe(gulp.dest('./build/'))
}

function plugins() {
    return gulp.src(jsPlugins)
        .pipe(gulp.dest('./build/plugins/'))
}

function html() {
    return gulp.src('./src/*.html')
        .pipe(rigger())
        .pipe(gulp.dest('./build/'))
        .pipe(browserSync.stream());
}

// Сборка стилей
function styles() {
    return gulp.src('./src/css/style.css')
        .pipe(sourcemaps.init())
        .pipe(postcss([
            postcssImport(),
            autoprefixer(),
            cssnano()
        ]))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./build/css'))
        .pipe(browserSync.stream());
}

// Сбоока скриптов dev
function scriptsDev() {
    return browserify(jsFiles[0]).transform('babelify', { presets: ['@babel/env'] }).bundle()
        .pipe(source('main.js'))
        .pipe(buffer())
        .pipe(concat('scripts.js'))
        .pipe(gulp.dest('./build/js'))
        .pipe(browserSync.stream());
}

// Сбоока скриптов prod
function scriptsProd() {
    return browserify(jsFiles[0]).transform('babelify', { presets: ['@babel/env'] }).bundle()
        .pipe(source('main.js'))
        .pipe(buffer())
        .pipe(uglify({
            toplevel: true
        }))
        .pipe(concat('scripts.js'))
        .pipe(gulp.dest('./build/js'))
        .pipe(browserSync.stream());
}



// Сборка картинок
function images() {
    return gulp.src(imgFiles)
        .pipe(cache(imagemin([
            imagemin.gifsicle({interlaced: true}),
            imagemin.mozjpeg({quality: 90, progressive: true}),
            imagemin.optipng({optimizationLevel: 2}),
            imagemin.svgo({
                plugins: [
                    {sortAttrs: true}
                ]
            })
        ])))

        .pipe(gulp.dest('./build/img'))
}

//Функция для очистки папки build перед полной сборкой проекта
function clean() {
    return del(['build/*']);
}

// Вотчер с BrowserSync
function watch() {
    browserSync.init({
        server: {
            baseDir: "./build"
        },
        notify: false,
        host: 'localhost',
        port: 3000,
        logPrefix: "Codisy"
    });
    gulp.watch('./src/css/**/*.css', styles);
    gulp.watch('./src/js/**/*.js', scriptsDev);
    gulp.watch('./src/img/**/*', images);
    gulp.watch('./src/fonts/**/*', fonts);
    gulp.watch('./src/plugins/**/*', plugins);
    gulp.watch(['./src/*.html', './src/templates/**/*.html'], html);
    gulp.watch(['./src/**/*.php'], other);
}

//Очистка кеша Gulp
function clear_cache() {
    return cache.clearAll();
}

//Все доступные таски

gulp.task('clean', clean); //Удаление внутренностей папки build
gulp.task('clear_cache', clear_cache); //Очистка кеша Gulp

gulp.task('styles', styles); //Обработка стилей

gulp.task('fonts', fonts); //Копирование шрифтов в build

gulp.task('other', other); //Копирование разных файлов в build

gulp.task('plugins', plugins); //Копирование плагинов в build
gulp.task('scriptsDev', scriptsDev); //Обработка скриптов js
gulp.task('scriptsProd', scriptsProd); //Обработка скриптов js

gulp.task('images', images); //Обработка картинок
gulp.task('html', html);

gulp.task('watch', watch); // Таск Вотчера

//Полный билд проекта с сжатием картинок, очисткой папки build, очистки кеша и жесткой минификацией
gulp.task('build', gulp.series(clean, clear_cache, fonts, other,
    gulp.parallel(html, styles, scriptsProd, images, plugins)
));

// Дефолтный таск, для быстрого запуска вотчера командой gulp

gulp.task('default', gulp.series('build'));
