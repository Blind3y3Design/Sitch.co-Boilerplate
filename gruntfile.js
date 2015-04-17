module.exports = function(grunt) {

	grunt.initConfig({

		pkg: grunt.file.readJSON('package.json'),

		// Watch task config
		watch: {
			sass: {
				files: "styles/sass/**/*.scss",
				tasks: ['sass']
			}
		},
		sass: {
			options: {
				sourceMap: true,
				outputStyle: 'compressed'
			},
			dist: {
				files: {
					'styles/css/style.css': 'styles/sass/style.scss'
				}
			}
		},
		jshint: {
			beforeconcat: ['javascripts/*.js']
		},

		concat: {
			dist: {
				src: [
					'scripts/libs/*.js',
					'scripts/modules/*.js',
					'scripts/custom.js'

				],
				dest: 'scripts/scripts.js'
			}
		},

		uglify: {
			build: {
				src: 'scripts/scripts.js',
				dest: 'scripts/scripts.min.js'
			}
		},
		// Using the BrowserSync Proxy for your existing website url.
		browserSync: {
			default_options: {
				bsFiles: {
					src: [
						"styles/css/style.css",
						"**/*.php"
					]
				},
				options: {
					watchTask: true,
					proxy: "localhost:8888/LandingPage_BoilerPlate/"
				}
			}
		}
	});
	require('load-grunt-tasks')(grunt);

	// grunt.registerTask('default', ['browserSync', 'watch']);
	// Default Task is basically a rebuild
	grunt.registerTask('default', ['jshint', 'concat', 'uglify', 'browserSync', 'watch']);

};