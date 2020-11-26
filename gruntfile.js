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
        //'browserSync',
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
                        './assets/css/*.css',
                        './site/templates/*.html',
                        './workfiles/pug/**/*.pug',
                        './assets/img/*.*'
                    ]
                },
                options: {
                    port: 5703, //change port within range of 5700 to 5800
                    ui: {
                        port: 5704 //use first port but increase by 1
                    },
                    watchTask: true,
                    server: './',
                    startPath: './',
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
                        './assets/css/styles.css': './assets/sass/styles.sass',
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
                        './assets/css/**/*.css'
                    ]
            }
        },

        cssmin: {
            clean: {
                options: {
                    report: 'min'
                },
                files: {
                    './assets/css/styles.css': './assets/css/styles.css',
                }
            }
        },

        pug: {
            compile_templates: {
                files: [
                    {
                        expand: true,
                        cwd: "./workfiles/pug/templates",
                        src: "*.pug",
                        dest: "./site/templates/",
                        ext: ".php"
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
                    './assets/img/all.svg': ['./assets/img/icons/*.svg'],
                },
            },
        },

        watch: {
            sass: {
                files: [
                        './assets/sass/**/*.sass'
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
                files: ['./assets/js/**/*.js'],
                tasks: ['watcherCss', 'pug']
            }
        }
    });
};
