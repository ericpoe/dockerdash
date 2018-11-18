var Encore = require("@symfony/webpack-encore");

Encore
  .enableSingleRuntimeChunk() // recommended setting
  // the project directory where compiled assets will be stored
  .setOutputPath("public/build/")
  // the public path used by the web server to access the previous directory
  .setPublicPath("/build")
  // empty the outputPath dir before each build
  .cleanupOutputBeforeBuild()
  // show OS notifications when builds finish/fail
  .enableBuildNotifications()
  .enableSourceMaps(!Encore.isProduction())
  // uncomment to create hashed filenames (e.g. app.abc123.css)
  .enableVersioning(Encore.isProduction())
  .enableVueLoader()
  .addEntry("js/app", "./assets/js/app.js")
  .enablePostCssLoader()
  .addStyleEntry("css/app", "./assets/css/app.scss")

  // uncomment if you use Sass/SCSS files
  .enableSassLoader(function(sassOptions) {}, {
    resolveUrlLoader: false
  });

// uncomment for legacy applications that require $/jQuery as a global variable
// .autoProvidejQuery()

module.exports = Encore.getWebpackConfig();
