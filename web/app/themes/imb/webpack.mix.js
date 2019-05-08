const mix_ = require('laravel-mix');


mix_.setPublicPath('./assets/')
	.js('./assets/js/_main.js', 'js/scripts.min.js')
	.js('./node_modules/jquery/dist/jquery.js', 'js/jquery.js')
	.sass('./assets/sass/main.scss', 'css/main.min.css')
	.browserSync();


if (mix_.inProduction()) {
	mix_.version();
} else {
	mix_.sourceMaps();
}
