const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');
const sourcemaps = require('gulp-sourcemaps');
const browserSync = require('browser-sync').create();

// Paths
const paths = {
  styles: {
    src: 'wp-content/themes/hello-elementor-child/assets/css/main.scss',
    dest: 'wp-content/themes/hello-elementor-child/assets/css/',
    watch: 'wp-content/themes/hello-elementor-child/assets/css/**/*.scss'
  },
  scripts: {
    src: 'wp-content/themes/hello-elementor-child/assets/js/**/*.js',
    dest: 'wp-content/themes/hello-elementor-child/assets/js/',
    watch: 'wp-content/themes/hello-elementor-child/assets/js/**/*.js'
  }
};

// Compile Sass
function styles() {
  return gulp.src(paths.styles.src)
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
      cascade: false
    }))
    .pipe(cleanCSS())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(paths.styles.dest))
    .pipe(browserSync.stream());
}

// Compile JavaScript
function scripts() {
  return gulp.src(paths.scripts.src)
    .pipe(sourcemaps.init())
    .pipe(concat('custom-scripts.min.js'))
    .pipe(uglify())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(paths.scripts.dest))
    .pipe(browserSync.stream());
}

// Watch files
function watch() {
  browserSync.init({
    proxy: 'localhost:8080', // Change to your local WordPress URL
    notify: false
  });

  gulp.watch(paths.styles.watch, styles);
  gulp.watch(paths.scripts.watch, scripts);
  gulp.watch('wp-content/themes/hello-elementor-child/**/*.php').on('change', browserSync.reload);
}

// Build task
const build = gulp.series(gulp.parallel(styles, scripts));

// Export tasks
exports.styles = styles;
exports.scripts = scripts;
exports.watch = watch;
exports.build = build;
exports.default = watch;

