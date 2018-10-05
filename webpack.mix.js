let mix = require("laravel-mix");

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

mix.styles(
    [
        // todos los archivos a compilar css
        "resourcesassets\templatecss\font-awesome.min.css",
        "resourcesassets\templatecsssimple-line-icons.min.css",
        "resourcesassets\templatecssstyle.css"
    ],
    "publiccss\template.css"
).scripts(
    [
        "resourcesassets\templatejs\bootstrap.min.js",
        "resourcesassets\templatejsChart.min.js",
        "resourcesassets\templatejsjquery.min.js",
        "resourcesassets\templatejspace.min.js",
        "resourcesassets\templatejspopper.min.js",
        "resourcesassets\templatejs\template.js"
    ],
    "publiccss\template.js"
);
