const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
  mode:'production',

  entry: [
    __dirname + '/assets/src/js/index.js',
    __dirname + '/assets/src/scss/style.scss'
  ],

  output: {
    path: path.resolve(__dirname, 'assets/public'),
    filename: 'js/bundle.min.js',
  },

  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env']
          }
        },
      }, {
        test: /\.scss$/,
        exclude: /node_modules/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
          },
          {
            loader: "css-loader",
          },
          {
            loader: "postcss-loader"
          },
          {
            loader: 'sass-loader',
          },
        ]
      }
    ]
  },

  plugins: [
    new MiniCssExtractPlugin({
      filename: 'css/style.min.css'
    })
  ],

  devtool: false

}