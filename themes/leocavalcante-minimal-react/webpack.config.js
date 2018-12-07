module.exports = {
  entry: "./src/entry.js",
  output: {
    path: __dirname + '/assets/javascript/',
    filename: "bundle.js"
  },
  module: {
    loaders: [
      { test: /\.js$/, exclude: /node_modules/, loader: "babel-loader"}
    ]
  }
};
