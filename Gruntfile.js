module.exports = function(grunt) {

    // NPM plugins configuration
    grunt.initConfig({
        path: 'content/themes/rawspace',
        compass: {
            dev: {
                options: {
                    basePath:       '<%= path %>/src/',
                    cssDir:         '../',
                    noLineComments: false,
                    outputStyle:    'expanded',
                    sassDir:        'sass',
                    specify:        '<%= path %>/src/sass/style.scss',
                    watch:          false
                }
            },
            dist: {
                files: {
                    'style.css' : 'sass/style.scss'
                },
                options: {
                    cssDir:         './',
                    noLineComments: false,
                    outputStyle:    'compact',
                    sassDir:        'sass',
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
                src: '<%= path %>/*.css'
            }
        },
        watch:{
            options: {
                livereload: true
            },
            sass:{
                files: ['<%= path %>/src/sass/**/*.scss'],
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
    grunt.registerTask('build', ['compass:dist']);
};