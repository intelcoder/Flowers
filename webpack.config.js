let webpack = require('webpack');
let path = require('path');


module.exports = {
    entry: './resources/assets/js/app.js',

    output: {
        path: path.resolve(__dirname, 'public/js'),
        filename: 'bundle.js',
        publicPath: ''
    },
    sassLoader: {
        includePaths: [path.resolve(__dirname, 'resources/assets/sass')]
    },

    module: {
        rules: [
            {
                test: /\.vue$/,
                loader: 'vue-loader',
                options: {
                    loaders: {
                        // Since sass-loader (weirdly) has SCSS as its default parse mode, we map
                        // the "scss" and "sass" values for the lang attribute to the right configs here.
                        // other preprocessors should work out of the box, no loader config like this nessessary.
                        'scss': 'vue-style-loader!css-loader!sass-loader',
                        'sass': 'vue-style-loader!css-loader!sass-loader?indentedSyntax'
                    }
                    // other vue-loader options go here
                }
            },
            {
                test: /\.js$/,
                loader: 'babel-loader',
                exclude: /node_modules/
            },
            {
                test: /\.(png|jpg|gif|svg)$/,
                loader: 'file-loader',
                options: {
                    name: '[name].[ext]?[hash]'
                }
            },
            {
                //materialize loader jquery, jquery.hammer preload
                test: /materialize-css\/bin\//,
                loader: 'imports?jQuery=jquery,$=jquery,hammerjs'
            },

            {
                test: /\.scss$/,
                loaders: [ 'style', 'css?sourceMap!sass?sourceMap' ]
            }
        ]
    },
    plugins: [

    ]

};

if (process.env.NODE_ENV === 'production') {
    module.exports.devtool = '#source-map'
    // http://vue-loader.vuejs.org/en/workflow/production.html
    module.exports.plugins = (module.exports.plugins || []).concat([
        new webpack.DefinePlugin({
            'process.env': {
                NODE_ENV: '"production"'
            }
        }),
        new webpack.optimize.UglifyJsPlugin({
            sourceMap: true,
            compress: {
                warnings: false
            }
        }),
        new webpack.LoaderOptionsPlugin({
            minimize: true
        })
    ])
}