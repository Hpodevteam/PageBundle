const Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('./src/Resources/public/')
    .setPublicPath('/build')
    .setManifestKeyPrefix('bundles/page-bundle')

    .cleanupOutputBeforeBuild()
    .enableSassLoader()
    .enableSourceMaps(false)
    .enableVersioning(false)
    .disableSingleRuntimeChunk()

    .addEntry('app', './assets/js/app.js')
    .addStyleEntry('appStyles', './assets/css/app.scss')

    .autoProvidejQuery()
;

module.exports = Encore.getWebpackConfig();