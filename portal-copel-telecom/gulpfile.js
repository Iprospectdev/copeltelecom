
	var gulp = require('gulp');

	var autoprefixer = require('gulp-autoprefixer');
	var concat = require('gulp-concat');
	var less = require('gulp-less');
	var liveReload  = require('gulp-livereload');
	var minifyCSS = require('gulp-minify-css');
	var rename = require('gulp-rename');
	var sftp = require('gulp-sftp');
	var uglify = require('gulp-uglify');
	var watch = require('gulp-watch');
	var writeFile = require('write');	
	var flatten = require('gulp-flatten');

	var fs = require('fs');
	var pkg = JSON.parse(fs.readFileSync('./package.json'));

    var jsFiles =     	[
	                        '_assets/old/bower_components/jquery/dist/jquery.min.js',
	                        '_assets/old/bower_components/jquery-ui/jquery-ui.js',
	                        // '_assets/old/bower_components/jquery-ui/ui/core.js',
	                        '_assets/old/bower_components/jquery-ui/ui/widgets/droppable.js',
	                        '_assets/old/bower_components/jquery-ui/ui/widgets/draggable.js',
	                        '_assets/old/bower_components/jquery-ui/ui/widgets/autocomplete.js',
	                        '_assets/old/bower_components/angular/angular.js',
	                        '_assets/old/bower_components/bootstrap/dist/js/bootstrap.min.js',
	                        '_assets/old/bower_components/Slidebars/dist/slidebars.min.js',
	                        '_assets/old/bower_components/jquery-validation/dist/jquery.validate.min.js',
	                        '_assets/old/bower_components/jquery-mask-plugin/dist/jquery.mask.min.js',
	                        '_assets/old/bower_components/lightgallery/dist/js/lightgallery-all.js',
	                        '_assets/old/bower_components/lightgallery/lib/jquery.mousewheel.min.js',
	                        '_assets/old/bower_components/matchHeight/dist/jquery.matchHeight-min.js',
	                        '_assets/old/bower_components/owl.carousel/dist/owl.carousel.js',
	                        '_assets/old/bower_components/wow/dist/wow.js',
	                        '_assets/old/bower_components/jssocials/dist/jssocials.min.js',
	                        '_assets/old/js/*'
                   		];

    var jsFilesAdmin =  [ 
	                        '_assets/old/bower_components/bootstrap/dist/js/bootstrap.min.js',
    						'_assets/old/bower_components/datatables.net/js/jquery.dataTables.min.js',
    						'_assets/old/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js',
	                        '_assets/old/js/admin.js'
                   		];
	var jsDest =		'_assets/old/js/';


    var cssFiles =   	[	
    						'_assets/old/bower_components/bootstrap/dist/css/bootstrap.css',
    						'_assets/old/bower_components/font-awesome/css/font-awesome.min.css',
    						'_assets/old/bower_components/lightgallery/dist/css/lightgallery.min.css',
    						'_assets/old/bower_components/Slidebars/dist/slidebars.min.css',
    						'_assets/old/bower_components/wow/css/libs/animate.css',
	                        '_assets/old/bower_components/owl.carousel/dist/assets/owl.carousel.css',
    						'_assets/old/css/less.css'
    					];

    var cssFilesAdmin = [	
    						'_assets/old/bower_components/bootstrap/dist/css/bootstrap.min.css',
    						'_assets/old/bower_components/font-awesome/css/font-awesome.min.css',
    						'_assets/old/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css',
    						'_assets/old/css/admin.css'
    					];

	var cssDest =		'_assets/old/css/';

	var fontsFiles = 	[
							'_assets/old/bower_components/font-awesome/fonts/**',
							'_assets/old/bower_components/bootstrap/dist/fonts/**',
							'_assets/old/bower_components/lightgallery/dist/fonts/**'
						];
	var fontsDest = 	'_assets/old/fonts/';



	var phpFiles = 	[
							// '_assets/old/bower_components/sharrre/sharrre.php'
					];
	var phpDest = 	'_assets/old/php/';


	gulp.task('writeThemeName', function() {
		writeFile('style.css', ' /*\n\nTheme Name: '+pkg.nameTheme+'\n\nVersion: '+pkg.versionTheme+'\n\n*/', function(err) {
		  if (err) console.log(err);
		});
	});	

	gulp.task('copy-bower-fonts', function() {
		gulp.src(fontsFiles)
		  .pipe(flatten())
		  .pipe(gulp.dest(fontsDest));
	});

	gulp.task('copy-bower-php', function() {
		gulp.src(phpFiles)
		  .pipe(flatten())
		  .pipe(gulp.dest(phpDest));
	});

	gulp.task('less', function() {
		gulp.src('_assets/old/less/import.less')
			.pipe(less())
			.pipe(rename('less.css'))
			.pipe(gulp.dest('_assets/old/css'));

		gulp.src('_assets/old/less/admin.less')
			.pipe(less())
			.pipe(rename('admin.css'))
			.pipe(gulp.dest('_assets/old/css'))
			.pipe(liveReload({auto: true}));

		gulp.src("_assets/old/css/less.css")
			.pipe(autoprefixer({
				browsers: ['last 4 versions'],
				cascade: false
			}))
			.pipe(gulp.dest('/_assets/old/css/'))
			.pipe(liveReload({auto: true}));

		gulp.src(cssFiles)
	        .pipe(concat('all.min.css'))
	        .pipe(gulp.dest(cssDest))
	        .pipe(minifyCSS({compatibility: 'ie8'}))
	        .pipe(gulp.dest(cssDest))
	        .pipe(liveReload({auto: true}));

	    gulp.src(cssFilesAdmin)
	        .pipe(concat('admin.min.css'))
	        .pipe(gulp.dest(cssDest))
	        .pipe(minifyCSS({compatibility: 'ie8'}))
	        .pipe(gulp.dest(cssDest))
	        .pipe(liveReload({auto: true}));

	});

	gulp.task('prefix', function () {
		gulp.src("_assets/old/css/less.css")
		.pipe(autoprefixer({
			browsers: ['last 4 versions'],
			cascade: false
		}))
		.pipe(gulp.dest('/_assets/old/css/'))
		.pipe(liveReload({auto: false}));
	});

	gulp.task('js', function() {
		gulp.src(jsFiles)
			.pipe(concat('all.min.js'))
			.pipe(gulp.dest(jsDest))
			.pipe(uglify())
			.pipe(gulp.dest(jsDest))
	        .pipe(liveReload({auto: false}));

	    gulp.src('_assets/old/js/compare/*')
			.pipe(concat('compare.min.js'))
			.pipe(gulp.dest(jsDest))
			.pipe(uglify())
			.pipe(gulp.dest(jsDest))
	        .pipe(liveReload({auto: false}));

		gulp.src(jsFilesAdmin)
			.pipe(concat('admin.min.js'))
			.pipe(gulp.dest(jsDest))
			.pipe(uglify())
			.pipe(gulp.dest(jsDest))
	        .pipe(liveReload({auto: false}));
	});


// ------------------------------------------------------------------------------------------------tasks
	gulp.task('watch', function() {
	    liveReload.listen();
	    watch('*.html', function() {
	        gulp.start('js');
	    });
	    watch(jsFiles, function() {
	        gulp.start('js');
	    });
	    watch('_assets/old/less/*.less', function() {
	        gulp.start('less');
	    });
	});

	gulp.task('default', function() {
		gulp.run('writeThemeName','copy-bower-fonts','copy-bower-php','less','js');
	});
