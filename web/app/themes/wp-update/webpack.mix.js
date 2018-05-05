let mix = require('laravel-mix')
const OfflinePlugin = require('offline-plugin')

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

mix.setPublicPath('dist').
  js('resources/assets/js/app.js', 'js/').
  sass('resources/assets/sass/app.scss', 'css/').
  options({
    processCssUrls: false,
  }).
  version()

mix.webpackConfig({
  plugins: [
    new OfflinePlugin({
      rewrites: {
        '/js/app.js': '/app/themes/wp-update/dist/js/app.js',
        '/css/app.css': '/app/themes/wp-update/dist/css/app.css',
      },
      publicPath: "/app/themes/wp-update/dist/",
      externals: ['/'],
      ServiceWorker: {
        output: '../../../../sw.js',
        navigateFallbackURL: '/',
        events: true,
        minify: true
      },
    }),
  ],
})
