module.exports = function(grunt){
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		sass: {
			options: {
				sourceMap: true
			},
			dist: {
				files: {
					'style.css': 'scss/styles.scss'
				}
			}
		},
		postcss: {
	    options: {
	      map: false, // inline sourcemaps
	      processors: [
	        require('pixrem')(), // add fallbacks for rem units
	        require('autoprefixer')({browsers: 'last 2 versions'}), // add vendor prefixes
	        // require('cssnano')() // minify the result
	      ]
	    },
	    dist: {
	      src: 'style.css'
	    }
	  }
	});

	// load task files
	grunt.loadNpmTasks('grunt-sass')
	grunt.loadNpmTasks('grunt-postcss');

	// register tasks
	grunt.registerTask('default', ['sass', 'postcss']);
};
