const {resolve} = require('path');

var projectRoot = resolve(__dirname, '/')
var ExtractTextPlugin = require("extract-text-webpack-plugin");

module.exports = {
    entry: {
        "index": './resources/UI/Pages/index/index.js',
        "craft": './resources/UI/Pages/craft/craft.js',
    },
    output: {
        path: __dirname + "/public/js/compiled/",
        filename: '[name].js'
    },
    resolve: {
        extensions: ['.js', '.vue', '.scss', '.sass'],
        alias: {
            'vue$': 'vue/dist/vue.js'
        }
    },
    module: {
        rules: [
            {
                test: /\.vue$/,
                exclude: /node_modules/,
                use: [
                    {
                        loader: "vue-loader",
                        options: {
                            query: {
                                presets: ['es2015', "stage-0"]
                            }
                        }
                    }
                ]
            },
            {
                test: /\.scss$/,
                use: ExtractTextPlugin.extract({
                    fallback: 'style-loader',
                    //resolve-url-loader may be chained before sass-loader if necessary
                    use: ['css-loader', 'sass-loader']
                })
            }
            // Needed for the css-loader when [bootstrap-webpack](https://github.com/bline/bootstrap-webpack)
            // loads bootstrap's css.
            //{ test: /\.woff(\?v=\d+\.\d+\.\d+)?$/,   loader: "url?limit=10000&mimetype=application/font-woff" },
            //{ test: /\.woff2(\?v=\d+\.\d+\.\d+)?$/,  loader: "url?limit=10000&mimetype=application/font-woff" },
            //{ test: /\.ttf(\?v=\d+\.\d+\.\d+)?$/,    loader: "url?limit=10000&mimetype=application/octet-stream" },
            //{ test: /\.eot(\?v=\d+\.\d+\.\d+)?$/,    loader: "file" },
            //{ test: /\.svg(\?v=\d+\.\d+\.\d+)?$/,    loader: "url?limit=10000&mimetype=image/svg+xml" }

        ]
    },
    watchOptions: {
        poll: true
    },
    plugins: [
        new ExtractTextPlugin({
            filename: "../../css/compiled/[name].css"
        })
    ]
}