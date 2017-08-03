var mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')

    .sass('resources/assets/sass/app.scss', 'public/css')

    .styles([
        'public/vendor/admin/bootstrap/css/bootstrap.css',
        'public/vendor/admin/font-awesome/css/font-awesome.css',
        'public/vendor/admin/magnific-popup/magnific-popup.css',
        'public/vendor/admin/bootstrap-datepicker/css/bootstrap-datepicker3.css',
        'public/vendor/admin/bootstrap-markdown/css/bootstrap-markdown.min.css',
        'public/vendor/admin/select2/css/select2.css',
        'public/vendor/admin/select2-bootstrap-theme/select2-bootstrap.min.css',
        'public/vendor/admin/jquery-datatables-bs3/assets/css/datatables.css',
        'public/vendor/admin/bootstrap-multiselect/bootstrap-multiselect.css',
        'public/vendor/admin/bootstrap-tagsinput/bootstrap-tagsinput.css',
        'public/vendor/admin/bootstrap-colorpicker/css/bootstrap-colorpicker.css',
        'public/vendor/admin/bootstrap-timepicker/css/bootstrap-timepicker.css',
        'public/vendor/admin/dropzone/dropzone.css',
        'public/vendor/admin/bootstrap-fileupload/bootstrap-fileupload.min.css'
    ], 'public/css/admin/vendor.css')

    .scripts([
        'public/vendor/admin/jquery/jquery.js',
        'public/vendor/admin/jquery-browser-mobile/jquery.browser.mobile.js',
        'public/vendor/admin/bootstrap/js/bootstrap.js',
        'public/vendor/admin/nanoscroller/nanoscroller.js',
        'public/vendor/admin/bootstrap-datepicker/js/bootstrap-datepicker.js',
        'public/vendor/admin/magnific-popup/jquery.magnific-popup.js',
        'public/vendor/admin/jquery-placeholder/jquery-placeholder.js',
        'public/vendor/admin/bootstrap-markdown/js/markdown.js',
        'public/vendor/admin/bootstrap-markdown/js/to-markdown.js',
        'public/vendor/admin/bootstrap-markdown/js/bootstrap-markdown.js',
        'public/vendor/admin/bootstrap-colorpicker/js/bootstrap-colorpicker.js',
        'public/vendor/admin/bootstrap-timepicker/bootstrap-timepicker.js',
        'public/vendor/admin/dropzone/dropzone.js',
        'public/vendor/admin/bootstrap-fileupload/bootstrap-fileupload.min.js',
        'public/vendor/admin/select2/js/select2.js',

    ], 'public/js/admin/vendor.js');
