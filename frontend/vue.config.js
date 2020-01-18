module.exports = {
    // proxy API requests to Valet during development
    devServer: {
      proxy: 'http://blog.test'
    },
    // output built static files to Laravel's public dir.
    // note the "build" script in package.json needs to be modified as well.
    outputDir: '../public',
    // modify the location of the generated HTML file.
    // make sure to do this only in production.
    indexPath:
      process.env.NODE_ENV === 'production'
        ? '../resources/views/index.blade.php'
        : 'index.html',
      chainWebpack: (config) => {
        const svgRule = config.module.rule('svg');
    
        svgRule.uses.clear();
    
        svgRule
          .use('babel-loader')
          .loader('babel-loader')
          .end()
          .use('vue-svg-loader')
          .loader('vue-svg-loader');
      },
  }