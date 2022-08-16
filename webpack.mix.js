const mix = require("laravel-mix")

mix.browserSync("vuesplash.test")
    .js("resources/js/app.js", "public/js")
    .version()
    .vue(); // 足した消すかも