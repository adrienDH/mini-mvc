module.exports = function(grunt) {
	
	grunt.initConfig({
		
		less: {
			src: {
				expand: true,
				cwd: 'resources/less/',
				src: [
					'**/*.less'
				],
				ext: '.css',
				dest: 'resources/css/'
			}
		},

	
		watch: {
			styles: {
				files: ['resources/less/**/*.less'], // which files to watch
				tasks: ['less'],
				options: {
					nospawn: true
				}
			}
		}
	
	});
	
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.registerTask('default', ['less', 'watch']);
}