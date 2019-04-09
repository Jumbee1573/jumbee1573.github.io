const gulp         = require('gulp'), 
	  sass         = require('gulp-sass'), 
	  babel        = require('gulp-babel'),
	  browserSync  = require('browser-sync'),
	  autoprefixer = require('gulp-autoprefixer');

//Folders
const app = 'app';

gulp.task('scss', () => {
	gulp.src(app + '/scss/**/*.scss') // Берем источник
		.pipe(sass()) // Преобразуем Sass в CSS посредством gulp-sass
		.pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true })) // Создаем префиксы
		.pipe(gulp.dest(app + '/css')) // Выгружаем результата в папку app/css
		.pipe(browserSync.reload({stream: true})) // Обновляем CSS на странице при изменении
});

gulp.task('babel', () => {
    gulp.src(app + '/js/**/*.js')
        .pipe(babel({
            presets: ['@babel/env']
        }))
		.pipe(gulp.dest(app + '/tJS'))
		.pipe(browserSync.reload({stream: true}))
});

gulp.task('browser-sync', () => {
	browserSync({ // Выполняем browserSync
		proxy: "guruweb",
		notify: false // Отключаем уведомления
	});
});

gulp.task('watch', ['browser-sync', 'scss', 'babel'], () => {
	gulp.watch(app + '/scss/**/*.scss', ['scss']); // Наблюдение за sass файлами в папке sass
	gulp.watch(app + '/**/*.html', browserSync.reload); // Наблюдение за HTML файлами в корне проекта
	gulp.watch(app + '/**/*.php', browserSync.reload); // Наблюдение за PHP файлами в корне проекта
	gulp.watch(app + '/js/**/*.js', ['babel']);   // Наблюдение за JS файлами в папке js
});

gulp.task('default', ['watch']);
