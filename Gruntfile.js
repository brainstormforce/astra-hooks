module.exports = function (grunt) {
    'use strict';
    // Project configuration
    var autoprefixer = require('autoprefixer');
    var flexibility = require('postcss-flexibility');

    grunt.initConfig({
            pkg: grunt.file.readJSON('package.json'),

            rtlcss: {
                options: {
                    // rtlcss options
                    config: {
                        preserveComments: true,
                        greedy: true
                    },
                    // generate source maps
                    map: false
                },
                dist: {
                    files: [
                        {
                            expand: true,
                            cwd: "addons/sticky-header/assets/css/unminified/",
                            src: [
                                    '*.css',
                                    '!*-rtl.css',
                                ],
                            dest: "addons/sticky-header/assets/css/unminified",
                            ext: '-rtl.css'
                        },
                        {
                            expand: true,
                            cwd: "addons/blog-pro/assets/css/unminified/",
                            src: [
                                    '*.css',
                                    '!*-rtl.css',
                                ],
                            dest: "addons/blog-pro/assets/css/unminified",
                            ext: '-rtl.css'
                        },
                        {
                            expand: true,
                            cwd: "addons/title-bar/assets/css/unminified/",
                            src: [
                                    '*.css',
                                    '!*-rtl.css',
                                ],
                            dest: "addons/title-bar/assets/css/unminified",
                            ext: '-rtl.css'
                        },
                        {
                            expand: true,
                            cwd: "addons/site-layouts/assets/css/unminified/",
                            src: [
                                    '*.css',
                                    '!*-rtl.css',
                                ],
                            dest: "addons/site-layouts/assets/css/unminified",
                            ext: '-rtl.css'
                        },
                        {
                            expand: true,
                            cwd: "addons/advanced-header/assets/css/unminified/",
                            src: [
                                    '*.css',
                                    '!*-rtl.css',
                                ],
                            dest: "addons/advanced-header/assets/css/unminified",
                            ext: '-rtl.css'
                        },
                        {
                            expand: true,
                            cwd: "addons/advanced-footer/assets/css/unminified/",
                            src: [
                                    '*.css',
                                    '!*-rtl.css',
                                ],
                            dest: "addons/advanced-footer/assets/css/unminified",
                            ext: '-rtl.css'
                        },
                        {
                            expand: true,
                            cwd: "addons/advanced-search/assets/css/unminified/",
                            src: [
                                    '*.css',
                                    '!*-rtl.css',
                                ],
                            dest: "addons/advanced-search/assets/css/unminified",
                            ext: '-rtl.css'
                        },
                        {
                            expand: true,
                            cwd: "addons/scroll-to-top/assets/css/unminified/",
                            src: [
                                    '*.css',
                                    '!*-rtl.css',
                                ],
                            dest: "addons/scroll-to-top/assets/css/unminified",
                            ext: '-rtl.css'
                        },
                        {
                            expand: true,
                            cwd: "addons/hero-section/assets/css/unminified/",
                            src: [
                                    '*.css',
                                    '!*-rtl.css',
                                ],
                            dest: "addons/hero-section/assets/css/unminified",
                            ext: '-rtl.css'
                        },
                    ]
                }
            },

            sass: {
                options: {
                    sourcemap: 'none',
                    outputStyle: 'expanded'
                },
                dist: {
                    files: [
                        {
                            expand: true,
                            cwd: "addons/blog-pro/assets/scss",
                            src: ["*.scss"],
                            dest: "addons/blog-pro/assets/css/unminified",
                            ext: ".css",
                            /*rename: function (dest, src) {
                                return dest + src.replace('scss', 'css'); // The target file is written to folder "css" instead of "scss" by renaming the folder
                            }*/
                        },
                        {
                            expand: true,
                            cwd: "addons/sticky-header/assets/scss",
                            src: ["*.scss"],
                            dest: "addons/sticky-header/assets/css/unminified",
                            ext: ".css",
                            /*rename: function (dest, src) {
                                return dest + src.replace('scss', 'css'); // The target file is written to folder "css" instead of "scss" by renaming the folder
                            }*/
                        },
                        {
                            expand: true,
                            cwd: "addons/title-bar/assets/scss",
                            src: ["*.scss"],
                            dest: "addons/title-bar/assets/css/unminified",
                            ext: ".css",
                            /*rename: function (dest, src) {
                                return dest + src.replace('scss', 'css'); // The target file is written to folder "css" instead of "scss" by renaming the folder
                            }*/
                        },
                        {
                            expand: true,
                            cwd: "addons/site-layouts/assets/scss",
                            src: ["*.scss"],
                            dest: "addons/site-layouts/assets/css/unminified",
                            ext: ".css",
                            /*rename: function (dest, src) {
                                return dest + src.replace('scss', 'css'); // The target file is written to folder "css" instead of "scss" by renaming the folder
                            }*/
                        },
                        {
                            expand: true,
                            cwd: "addons/advanced-header/assets/scss",
                            src: ["*.scss"],
                            dest: "addons/advanced-header/assets/css/unminified",
                            ext: ".css",
                            /*rename: function (dest, src) {
                                return dest + src.replace('scss', 'css'); // The target file is written to folder "css" instead of "scss" by renaming the folder
                            }*/
                        },
                        {
                            expand: true,
                            cwd: "addons/advanced-footer/assets/scss",
                            src: ["*.scss"],
                            dest: "addons/advanced-footer/assets/css/unminified",
                            ext: ".css",
                            /*rename: function (dest, src) {
                                return dest + src.replace('scss', 'css'); // The target file is written to folder "css" instead of "scss" by renaming the folder
                            }*/
                        },
                        {
                            expand: true,
                            cwd: "addons/advanced-search/assets/scss",
                            src: ["*.scss"],
                            dest: "addons/advanced-search/assets/css/unminified",
                            ext: ".css",
                            /*rename: function (dest, src) {
                                return dest + src.replace('scss', 'css'); // The target file is written to folder "css" instead of "scss" by renaming the folder
                            }*/
                        },
                        {
                            expand: true,
                            cwd: "addons/scroll-to-top/assets/scss",
                            src: ["*.scss"],
                            dest: "addons/scroll-to-top/assets/css/unminified",
                            ext: ".css",
                            /*rename: function (dest, src) {
                                return dest + src.replace('scss', 'css'); // The target file is written to folder "css" instead of "scss" by renaming the folder
                            }*/
                        },
                        {
                            expand: true,
                            cwd: "addons/hero-section/assets/scss",
                            src: ["*.scss"],
                            dest: "addons/hero-section/assets/css/unminified",
                            ext: ".css",
                            /*rename: function (dest, src) {
                                return dest + src.replace('scss', 'css'); // The target file is written to folder "css" instead of "scss" by renaming the folder
                            }*/
                        },
                    ]
                }
            },

            postcss: {
                options: {
                    map: false,
                    processors: [
                        flexibility,
                        autoprefixer({
                            browsers: [
                                'Android >= 2.1',
                                'Chrome >= 21',
                                'Edge >= 12',
                                'Explorer >= 7',
                                'Firefox >= 17',
                                'Opera >= 12.1',
                                'Safari >= 6.0'
                            ],
                            cascade: false
                        })
                    ]
                },
                style: {
                    expand: true,
                    src: [
                        "addons/sticky-header/assets/css/unminified/*",
                        "addons/blog-pro/assets/css/unminified/*",
                        "addons/title-bar/assets/css/unminified/*",
                        "addons/site-layouts/assets/css/unminified/*",
                        "addons/advanced-header/assets/css/unminified/*",
                        "addons/advanced-footer/assets/css/unminified/*",
                        "addons/advanced-search/assets/css/unminified/*",
                        "addons/scroll-to-top/assets/css/unminified/*",
                        "addons/hero-section/assets/css/unminified/*",
                    ]
                }
            },

            uglify: {
                js: {
                    files: [
                        {
                            expand: true,
                            cwd: "assets/js/unminified",
                            src: ["*.js"],
                            dest: "assets/js/minified",
                            ext: '.min.js'
                        },
                        {
                            expand: true,
                            cwd: "addons/advanced-footer/assets/js/unminified",
                            src: ["*.js"],
                            dest: "addons/advanced-footer/assets/js/minified",
                            ext: '.min.js'
                        },
                        {
                            expand: true,
                            cwd: "addons/blog-pro/assets/js/unminified",
                            src: ["*.js"],
                            dest: "addons/blog-pro/assets/js/minified",
                            ext: '.min.js'
                        },
                        {
                            expand: true,
                            cwd: "addons/sticky-header/assets/js/unminified",
                            src: ["*.js"],
                            dest: "addons/sticky-header/assets/js/minified",
                            ext: '.min.js'
                        },
                        {
                            expand: true,
                            cwd: "addons/colors-and-background/assets/js/unminified",
                            src: ["*.js"],
                            dest: "addons/colors-and-background/assets/js/minified",
                            ext: '.min.js'
                        },
                        {
                            expand: true,
                            cwd: "addons/hero-section/assets/js/unminified",
                            src: ["*.js"],
                            dest: "addons/hero-section/assets/js/minified",
                            ext: '.min.js'
                        },
                        {
                            expand: true,
                            cwd: "addons/title-bar/assets/js/unminified",
                            src: ["*.js"],
                            dest: "addons/title-bar/assets/js/minified",
                            ext: '.min.js'
                        },
                        {
                            expand: true,
                            cwd: "addons/transparent-header/assets/js/unminified",
                            src: ["*.js"],
                            dest: "addons/transparent-header/assets/js/minified",
                            ext: '.min.js'
                        },
                        {
                            expand: true,
                            cwd: "addons/blog-pro/assets/js/unminified",
                            src: ["*.js"],
                            dest: "addons/blog-pro/assets/js/minified",
                            ext: '.min.js'
                        },
                        {
                            expand: true,
                            cwd: "addons/sticky-header/assets/js/unminified",
                            src: ["*.js"],
                            dest: "addons/sticky-header/assets/js/minified",
                            ext: '.min.js'
                        },
                        {
                            expand: true,
                            cwd: "addons/site-layouts/assets/js/unminified",
                            src: ["*.js"],
                            dest: "addons/site-layouts/assets/js/minified",
                            ext: '.min.js'
                        },
                        {
                            expand: true,
                            cwd: "addons/spacing/assets/js/unminified",
                            src: ["*.js"],
                            dest: "addons/spacing/assets/js/minified",
                            ext: '.min.js'
                        },
                        {
                            expand: true,
                            cwd: "addons/advanced-header/assets/js/unminified",
                            src: ["*.js"],
                            dest: "addons/advanced-header/assets/js/minified",
                            ext: '.min.js'
                        },
                        {
                            expand: true,
                            cwd: "addons/advanced-search/assets/js/unminified",
                            src: ["*.js"],
                            dest: "addons/advanced-search/assets/js/minified",
                            ext: '.min.js'
                        },
                        {
                            expand: true,
                            cwd: "addons/typography/assets/js/unminified",
                            src: ["*.js"],
                            dest: "addons/typography/assets/js/minified",
                            ext: '.min.js'
                        },
                        {
                            expand: true,
                            cwd: "addons/scroll-to-top/assets/js/unminified",
                            src: ["*.js"],
                            dest: "addons/scroll-to-top/assets/js/minified",
                            ext: '.min.js'
                        },
                    ]
                }
            },

            cssmin: {
                options: {
                    keepSpecialComments: 0
                },
                css: {
                    files: [
                        { //.css to min.css
                            expand: true,
                            cwd: "addons/blog-pro/assets/css/unminified",
                            src: ["**.css"],
                            dest: "addons/blog-pro/assets/css/minified",
                            ext: ".min.css",
                        },
                        { //.css to min.css
                            expand: true,
                            cwd: "addons/sticky-header/assets/css/unminified",
                            src: ["**.css"],
                            dest: "addons/sticky-header/assets/css/minified",
                            ext: ".min.css",
                        },
                        { //.css to min.css
                            expand: true,
                            cwd: "addons/title-bar/assets/css/unminified",
                            src: ["**.css"],
                            dest: "addons/title-bar/assets/css/minified",
                            ext: ".min.css",
                        },
                        { //.css to min.css
                            expand: true,
                            cwd: "addons/site-layouts/assets/css/unminified",
                            src: ["**.css"],
                            dest: "addons/site-layouts/assets/css/minified",
                            ext: ".min.css",
                        },
                        { //.css to min.css
                            expand: true,
                            cwd: "addons/advanced-header/assets/css/unminified",
                            src: ["**.css"],
                            dest: "addons/advanced-header/assets/css/minified",
                            ext: ".min.css",
                        },
                        { //.css to min.css
                            expand: true,
                            cwd: "addons/advanced-footer/assets/css/unminified",
                            src: ["**.css"],
                            dest: "addons/advanced-footer/assets/css/minified",
                            ext: ".min.css",
                        },
                        { //.css to min.css
                            expand: true,
                            cwd: "addons/advanced-search/assets/css/unminified",
                            src: ["**.css"],
                            dest: "addons/advanced-search/assets/css/minified",
                            ext: ".min.css",
                        },
                        { //.css to min.css
                            expand: true,
                            cwd: "addons/scroll-to-top/assets/css/unminified",
                            src: ["**.css"],
                            dest: "addons/scroll-to-top/assets/css/minified",
                            ext: ".min.css",
                        },
                        { //.css to min.css
                            expand: true,
                            cwd: "addons/hero-section/assets/css/unminified",
                            src: ["**.css"],
                            dest: "addons/hero-section/assets/css/minified",
                            ext: ".min.css",
                        },
                    ]
                }
            },

            copy: {
                main: {
                    options: {
                        mode: true
                    },
                    src: [
                        '**',
                        '!node_modules/**',
                        '!build/**',
                        '!css/sourcemap/**',
                        '!.git/**',
                        '!bin/**',
                        '!.gitlab-ci.yml',
                        '!bin/**',
                        '!tests/**',
                        '!phpunit.xml.dist',
                        '!*.sh',
                        '!*.map',
                        '!Gruntfile.js',
                        '!package.json',
                        '!.gitignore',
                        '!phpunit.xml',
                        '!README.md',
                        '!sass/**',
                        '!codesniffer.ruleset.xml',
                    ],
                    dest: 'astra-hooks/'
                }
            },

            compress: {
                main: {
                    options: {
                        archive: 'astra-hooks.zip',
                        mode: 'zip'
                    },
                    files: [
                        {
                            src: [
                                './astra-hooks/**'
                            ]

                        }
                    ]
                }
            },

            clean: {
                main: ["astra-hooks"],
                zip: ["astra-hooks.zip"]

            },

            makepot: {
                target: {
                    options: {
                        domainPath: '/',
                        potFilename: 'languages/astra-hooks.pot',
                        exclude: [
                        	'admin/bsf-core',
                        ],
                        potHeaders: {
                            poedit: true,
                            'x-poedit-keywordslist': true
                        },
                        type: 'wp-plugin',
                        updateTimestamp: true
                    }
                }
            },

            addtextdomain: {
                options: {
                    textdomain: 'astra-hooks',
                },
                target: {
                    files: {
                        src: [
                            '*.php',
                            '**/*.php',
                            '!node_modules/**',
                            '!php-tests/**',
                            '!bin/**',
                            '!admin/bsf-core/**'
                        ]
                    }
                }
            }

        }
    );

    // Load grunt tasks
    grunt.loadNpmTasks('grunt-rtlcss');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-postcss');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-compress');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-wp-i18n');

    // rtlcss, you will still need to install ruby and sass on your system manually to run this
    grunt.registerTask('rtl', ['rtlcss']);

    // SASS compile
    grunt.registerTask('scss', ['sass']);

    // Style
    grunt.registerTask('style', ['scss', 'postcss:style', 'rtl']);

    // min all
    grunt.registerTask('minify', ['style', 'uglify:js', 'cssmin:css']);

    // Grunt release - Create installable package of the local files
    grunt.registerTask('release', ['clean:zip', 'copy', 'compress', 'clean:main']);

    // i18n
    grunt.registerTask('i18n', ['addtextdomain', 'makepot']);

    grunt.util.linefeed = '\n';
};
