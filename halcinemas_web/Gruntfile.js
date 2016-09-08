module.exports = function(grunt){
    grunt.initConfig({
        sass: {
            dist: {
                files: {
                    "css/style.css": "scss/style.scss"
                }
            }
        },
        cssmin: {
            compress: {
                files: {
                    "css/style.min.css": "css/style.css"
                }
            }
        },
        watch : {
            scripts : {
                files : [
                    'css/style.css',
                    'scss/style.scss'
                ],
                tasks : 'sass',
                tasks : 'cssmin'
            }
        }
    });
    // ここに扱うモジュールを書く
    grunt.loadNpmTasks('grunt-contrib');
    grunt.loadNpmTasks('grunt-sass');
 
    grunt.registerTask('default', ['sass' ,'cssmin']);
    // grunt.registerTask('default', 'cssmin' );
};