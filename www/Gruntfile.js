'use strict';

module.exports = function (grunt) {

  // Load grunt tasks automatically
  require('load-grunt-tasks')(grunt);

  // Time how long tasks take. Can help when optimizing build times
  require('time-grunt')(grunt);

  grunt.initConfig({

    config: {

      files: {
        js: {
          'web/assets/scripts/main.js': [
            'web/src/scripts/main.js',

          ],
          'web/assets/scripts/vendors.js': [
            // external libs scripts
            'bower_components/jquery/dist/jquery.js',
            'bower_components/owl.carousel/dist/owl.carousel.js',
            'bower_components/jquery-modal/jquery.modal.min.js'
          ],

        }
      }
    },

    sass: {
      options: {
        loadPath: 'bower_components'
      },
      dist: {
        files: [{
          expand: true,
          cwd: 'web/src/styles',
          src: ['*.{scss,sass}'],
          dest: 'web/assets/styles',
          ext: '.css'
        }]
      },
      server: {
        files: [{
          expand: true,
          cwd: 'web/src/styles',
          src: ['*.{scss,sass}'],
          dest: 'web/assets/styles',
          ext: '.css'
        }]
      }
    },

    concat: {
      options: {
        separator: ';',
      },
      dist: {
        files: '<%= config.files.js %>'
      },
      server: {
        files: '<%= config.files.js %>'
      },
    },

    uglify: {
      dist: {
        options: {
          mangle: false
        },
        files: {
          'web/assets/scripts/main.js': [ 'web/assets/scripts/main.js' ]
        }
      }
    },

    watch: {
      sass: {
        files: ['web/src/styles/*.scss'],
        tasks: ['sass:server']
      },
      javascript: {
        files: ['web/src/scripts/{,*/}*.js'],
        tasks: ['concat:server']
      },
      gruntfile: {
        files: ['Gruntfile.js'],
        tasks: ['concurrent:server']
      },

      livereload: {
        options: {
          livereload: '<%= connect.options.livereload %>'
        },
        files: [
          '**/*.html',
          'web/assets/styles/{,*/}*.css',
          'web/assets/scripts/{,*/}*.js',
          'web/assets/img/{,*/}*.{png,jpg,jpeg,gif,webp,svg}'
        ]
      }
    },

    connect: {
      options: {
        port: 9000,
        // open: true,
        hostname: '0.0.0.0',
        livereload: 35729
      },
      livereload: {
        options: {
          base: ['.']
        }
      }
    },

    notify: {
      complete: {
        options: {
          title: 'Task Complete',
          message: 'All tasks finished running'
        }
      }
    },

    copy: {
      fonts: {
        files: [{
        cwd: 'web/src/fonts/',
        src: '*.ttf',
        dest: 'web/assets/fonts/',
        expand: true
        }]
      },
      img: {
        files: [{
        cwd: 'web/src/img/',
        src: '{,*/}*.{png,jpg,jpeg,gif,webp,svg}',
        dest: 'web/assets/img/',
        expand: true
        }]
      }
    },

    // Run some tasks in parallel to speed up the build process
    concurrent: {
      server: [
        'sass:server',
        'concat:dist'
      ],
      dist: [
        'sass:dist',
        'concat:dist',
        'copy'
      ]
    },


  });

  grunt.registerTask('serve', function (target) {
    if (target === 'dist') {
      return grunt.task.run(['build', 'connect:dist:keepalive']);
    }

    grunt.task.run([
      'concurrent:server',
      'connect:livereload',
      'watch'
    ]);
  });

  grunt.registerTask('build', [
    'concurrent:dist',
    'uglify:dist',
  ]);

  grunt.registerTask('default', ['build']);
};
