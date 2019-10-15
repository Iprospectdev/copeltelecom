
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
	var bower = require('gulp-bower');
	var flatten = require('gulp-flatten');

	var fs = require('fs');
	var pkg = JSON.parse(fs.readFileSync('./package.json'));

    var jsFiles =     	[
	                        'bower_components/jquery/dist/jquery.min.js',
	                        'bower_components/jquery-ui/jquery-ui.js',
	                        // 'bower_components/jquery-ui/ui/core.js',
	                        'bower_components/jquery-ui/ui/widgets/droppable.js',
	                        'bower_components/jquery-ui/ui/widgets/draggable.js',
	                        'bower_components/jquery-ui/ui/widgets/autocomplete.js',
	                        'bower_components/angular/angular.js',
	                        'bower_components/bootstrap/dist/js/bootstrap.min.js',
	                        'bower_components/Slidebars/dist/slidebars.min.js',
	                        'bower_components/jquery-validation/dist/jquery.validate.min.js',
	                        'bower_components/jquery-mask-plugin/dist/jquery.mask.min.js',
	                        'bower_components/lightgallery/dist/js/lightgallery-all.js',
	                        'bower_components/lightgallery/lib/jquery.mousewheel.min.js',
	                        'bower_components/matchHeight/dist/jquery.matchHeight-min.js',
	                        'bower_components/owl.carousel/dist/owl.carousel.js',
	                        'bower_components/wow/dist/wow.js',
	                        'bower_components/jssocials/dist/jssocials.min.js',
	                        'source/js/*'
                   		];

    var jsFilesAdmin =  [ 
	                        'bower_components/bootstrap/dist/js/bootstrap.min.js',
    						'bower_components/datatables.net/js/jquery.dataTables.min.js',
    						'bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js',
	                        'source/js/admin.js'
                   		];
	var jsDest =		'_assets/js/';


    var cssFiles =   	[	
    						'bower_components/bootstrap/dist/css/bootstrap.css',
    						'bower_components/font-awesome/css/font-awesome.min.css',
    						'bower_components/lightgallery/dist/css/lightgallery.min.css',
    						'bower_components/Slidebars/dist/slidebars.min.css',
    						'bower_components/wow/css/libs/animate.css',
	                        'bower_components/owl.carousel/dist/assets/owl.carousel.css',
    						'source/css/less.css'
    					];

    var cssFilesAdmin = [	
    						'bower_components/bootstrap/dist/css/bootstrap.min.css',
    						'bower_components/font-awesome/css/font-awesome.min.css',
    						'bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css',
    						'source/css/admin.css'
    					];

	var cssDest =		'_assets/css/';

	var fontsFiles = 	[
							'bower_components/font-awesome/fonts/**',
							'bower_components/bootstrap/dist/fonts/**',
							'bower_components/lightgallery/dist/fonts/**'
						];
	var fontsDest = 	'_assets/fonts/';



	var phpFiles = 	[
							// 'bower_components/sharrre/sharrre.php'
					];
	var phpDest = 	'_assets/php/';


	gulp.task('writeThemeName', function() {
		writeFile('style.css', ' /*\n\nTheme Name: '+pkg.nameTheme+'\n\nVersion: '+pkg.versionTheme+'\n\n*/', function(err) {
		  if (err) console.log(err);
		});
	});	

	gulp.task('bower', function() {
	  return bower()
	    .pipe(gulp.dest('bower_components'))
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
		gulp.src('source/less/import.less')
			.pipe(less())
			.pipe(rename('less.css'))
			.pipe(gulp.dest('source/css'));

		gulp.src('source/less/admin.less')
			.pipe(less())
			.pipe(rename('admin.css'))
			.pipe(gulp.dest('source/css'))
			.pipe(liveReload({auto: true}));

		gulp.src("source/css/less.css")
			.pipe(autoprefixer({
				browsers: ['last 4 versions'],
				cascade: false
			}))
			.pipe(gulp.dest('/source/css/'))
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
		gulp.src("source/css/less.css")
		.pipe(autoprefixer({
			browsers: ['last 4 versions'],
			cascade: false
		}))
		.pipe(gulp.dest('/source/css/'))
		.pipe(liveReload({auto: false}));
	});

	gulp.task('js', function() {
		gulp.src(jsFiles)
			.pipe(concat('all.min.js'))
			.pipe(gulp.dest(jsDest))
			.pipe(uglify())
			.pipe(gulp.dest(jsDest))
	        .pipe(liveReload({auto: false}));

	    gulp.src('source/js/compare/*')
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
	    watch('source/less/*.less', function() {
	        gulp.start('less');
	    });
	});

	gulp.task('default', function() {
		gulp.run('writeThemeName','copy-bower-fonts','copy-bower-php','less','js');
	});
