module.exports = function(grunt) {

    // NPM plugins configuration
    grunt.initConfig({
        compass: {
            dev: {
                options: {
                    cssDir:         './',
                    noLineComments: false,
                    outputStyle:    'expanded',
                    sassDir:        'src/sass/',
                    specify:        'src/sass/style.scss',
                    watch:          false
                }
            },
            dist: {
                options: {
                    cssDir:         './',
                    force:          true,
                    noLineComments: false,
                    outputStyle:    'compressed',
                    sassDir:        'src/sass/',
                    specify:        'src/sass/style.scss',
                    watch:          false
                }
            }
        },
        postcss: {
            options: {
                map: true,
                processors: [
                    require('autoprefixer')
                ]
            },
            dist: {
                src: '*.css'
            }
        },
        watch:{
            options: {
                livereload: true,
            },
            sass:{
                files: ['src/sass/**/*.scss'],
                tasks: ['compass:dev','postcss'],
                options: {
                    spawn:      false
                }
            }
        }
    });

    // Load the NPM plugins
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-postcss');

    // Register Tasks
    grunt.registerTask('build', ['compass:dist','postcss']);
};
