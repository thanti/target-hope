module.exports = function (grunt) {
    grunt.file.defaultEncoding = 'utf8';

    // Load grunt plugins
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-browser-sync');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-pug');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-postcss');
    grunt.loadNpmTasks('grunt-svgstore');    

    grunt.registerTask('default', [
        'svgstore',
        'sass',
        'postcss',
        'cssmin',
        'pug',
        'browserSync',
        'watch'
    ]);

    grunt.registerTask('watcherCss', [
        'svgstore',
        'sass',
        'postcss',
        'cssmin'
    ]);

    grunt.initConfig({

        browserSync: {
            dev: {
                bsFiles: {
                    src : [
                        './src/css/*.css',
                        './workfiles/*.html',
                        './workfiles/pug/**/*.pug',
                        './src/img/*.*'
                    ]
                },
                options: {
                    port: 5703, //change port within range of 5700 to 5800
                    ui: {
                        port: 5704 //use first port but increase by 1
                    },
                    watchTask: true,
                    server: './',
                    startPath: './workfiles/',
                    browsers: 'google chrome'
                }
            }
        },

        sass: {
            dist: {
                options: {
                    style: 'expanded',
                    sourcemap: 'none',
                    'default-encoding': 'utf-8'
                },
                files: [
                    {
                        './src/css/styles.css': './src/sass/styles.sass',
                    }
                ]
            }
        },

        postcss: {
            options: {
                map: false,

                processors: [
                    require('autoprefixer')({
                        browsers: ['ie >= 9', 'safari >= 3']
                    }),
                ]
            },
            dist: {
                src: [
                        './src/css/**/*.css'
                    ]
            }
        },

        cssmin: {
            clean: {
                options: {
                    report: 'min'
                },
                files: {
                    './src/css/styles.css': './src/css/styles.css',
                }
            }
        },

        pug: {
            compile: {
                files: [
                    {
                        expand: true,
                        cwd: "./workfiles/pug",
                        src: "*.pug",
                        dest: "./workfiles",
                        ext: ".html"
                    }
                ],
                options: {
                    pretty: true
                }
            }
        },

        svgstore: {
            options: {
                formatting: {
                    indent_size: 2
                },
                cleanup: ['fill'],
            },
            default: {
                files: {
                    './src/img/all.svg': ['./src/img/icons/*.svg'],
                },
            },
        },

        watch: {
            sass: {
                files: [
                        './src/sass/**/*.sass'
                ],
                tasks: ['watcherCss']
            },

            pug: {
                files: [
                './workfiles/pug/**/*.pug'
                ],
                tasks: ['pug',
                ]
            },

            js: {
                files: ['./src/js/**/*.js'],
                tasks: ['watcherCss', 'pug']
            }
        }
    });
};
