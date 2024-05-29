const gulp = require('gulp');
const cp = require('child_process');
const sass = require('gulp-sass');
const csso = require('gulp-csso');
const sourcemaps = require('gulp-sourcemaps');
const autoprefixer = require('gulp-autoprefixer');
const rename = require('gulp-rename');
const minify = require('gulp-minify');
const imagemin = require('gulp-imagemin');
const del = require('del');
const watch = require('gulp-watch');
const htmlValidator = require('gulp-w3c-html-validator');

const source_path = './site';
const dist_path = './dist';

const paths = {
	bootstrap: './js/bootstrap',

	assets: source_path + '/_assets',
	scss: source_path + '/_assets/scss',
	js: source_path + '/_assets/js',
	vendors: source_path + '/_assets/vendors',

	dist_css: dist_path + '/css',
	dist_js: dist_path + '/js',
	dist_images: dist_path + '/images',
	dist_vendors: dist_path + '/vendors',
};

/**
 * Build the Jekyll Site - for windos. If you are on a Mac/linux change jekyll.bat to just jekyll
 */
gulp.task('jekyll-build', function (done) {
	return cp.spawn('jekyll.bat', ['build'], {stdio: 'inherit', cwd: 'site'}).on('close', done);
});

/**
 * Build scss to css
 */
gulp.task('css-build', function () {
	return gulp.src('./site/_assets/scss/**/*.scss')
		.pipe(sourcemaps.init())
		.pipe(sass({outputStyle: 'expanded'}))
		.pipe(autoprefixer())
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest('./dist/css/'));
});

/**
 * Compress css file to min.css
 */
gulp.task('css-min', function () {
	return gulp.src(['./dist/css/**/*.css', '!./dist/css/**/*.min.css'])
		.pipe(sourcemaps.init())
		.pipe(csso())
		.pipe(rename({suffix: '.min'}))
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest('dist/css/'))
});

/**
 * Build scss file to .css and .min.css
 */
gulp.task('css-rebuild', gulp.series('css-build', 'css-min'));

/**
 * Build js file to min file
 */
gulp.task('js-rebuild', function () {
	return gulp.src(['./site/_assets/js/**/*.js', '!./site/_assets/js/**/*.min.js'])
		.pipe(minify({
			ext: {
				src: '.js',
				min: '.min.js'
			},
			exclude: ['tasks'],
			ignoreFiles: []
		}))
		.pipe(gulp.dest('./dist/js'));
});

gulp.task('clean-vendors', function () {
	return del(['./dist/vendors/**']);
});

/**
 * Move vendors to dist
 */
gulp.task('vendors', gulp.series('clean-vendors',
	function () {
		return gulp.src('./site/_assets/vendors/**/*')
			.pipe(gulp.dest('./dist/vendors'));
	}, function () {
		return gulp.src('./js/bootstrap/**/*')
			.pipe(gulp.dest('./dist/vendors/bootstrap'));
	}));

gulp.task('clean-images', function () {
	return del(['./dist/images/**']);
});

gulp.task('images', gulp.series('clean-images', function () {
	return gulp.src('./site/_assets/images/**/*')
		.pipe(gulp.dest('./dist/images'));
}));

/**
 * Clean dist (excluded vendors directory)
 */
gulp.task('clean', function () {
	return del([
		'./dist/**',
		'!./dist/vendors/**',
	]);
});

/**
 * Clean all file in dist directory
 */
gulp.task('clean-all', function () {
	return del([
		'./dist/**'
	]);
});

/**
 * Watch css file
 */
gulp.task('watch-scss', function () {
	gulp.watch('./site/_assets/scss/**/*.scss').on('all', gulp.parallel('css-rebuild'));
});

/**
 * Watch js file
 */
gulp.task('watch-js', function () {
	gulp.watch(['./site/_assets/js/**/*.js', '!./site/_assets/js/**/*.min.js']).on('all', gulp.parallel('js-rebuild'));
});

gulp.task('watch-images', function () {
	return gulp.src('./site/_assets/images/**/*')
		.pipe(watch('./site/_assets/images', {
			base: './site/_assets/images',
			events: ['add', 'change', 'unlink', 'addDir', 'unlinkDir']
		}))
		.pipe(gulp.dest('./dist/images'));
});

gulp.task('watch-vendors', gulp.parallel(
	function () {
		return gulp.src('./site/_assets/vendors/**/*', {base: './site/_assets/vendors'})
			.pipe(watch('./site/_assets/vendors', {
				base: './site/_assets/vendors',
				events: ['add', 'change', 'unlink', 'addDir', 'unlinkDir']
			}))
			.pipe(gulp.dest('./dist/vendors'));
	}, function () {
		return gulp.src('./js/bootstrap/**/*')
			.pipe(watch('./js/bootstrap', {
				base: './js/bootstrap',
				events: ['add', 'change', 'unlink', 'addDir', 'unlinkDir']
			}))
			.pipe(gulp.dest('./dist/vendors/bootstrap'));
	}));

gulp.task('watch', gulp.parallel('watch-scss', 'watch-js', 'watch-images', 'watch-vendors'));
gulp.task('rebuild', gulp.parallel('css-rebuild', 'js-rebuild', 'images', 'vendors'));

gulp.task('rebuild-all', gulp.parallel('css-rebuild', 'js-rebuild', 'images', 'vendors', 'jekyll-build'));

/**
 * Static Server
 */
gulp.task('serve', gulp.parallel('jekyll-build', function (done) {
	return cp.spawn('jekyll.bat', ['serve'], {stdio: 'inherit', cwd: 'site'}).on('close', done);
}));

/**
 * Compress image file
 */
gulp.task('imagemin', function () {
	return gulp.src(['dist/images/**/*.jpg', 'dist/images/**/*.png'])
		.pipe(imagemin())
		.pipe(gulp.dest(function (file) {
			return file.base;
		}));
});

/**
 * Check code html w3c standard
 */
gulp.task('w3c', function () {
	return gulp.src("dist/**/*.html")
		.pipe(htmlValidator({skipWarnings: true}))
		.pipe(htmlValidator.reporter());
});

/**
 * Run default task
 */
gulp.task('default', gulp.series('clean', gulp.parallel('rebuild', 'watch', 'serve')));
