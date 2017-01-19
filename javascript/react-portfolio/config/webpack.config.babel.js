import webpack from "webpack";

import {
    ROOT,
    SRC,
    DIST,
} from "./constants/paths";

export default {
    target: 'web',
    devtool: 'inline-source-map',
    entry: [
        'babel-polyfill',
        `${SRC}/main.js`,
    ],
    devServer: {
        contentBase: SRC
    },
    watch: true,
    output: {
        publicPath: '/',
        filename: 'bundle.js',
    },
    module: {
        loaders: [
            {
                test: /\.jsx?$/,
                exclude: /node_modules/,
                loader: 'babel-loader',
                query: {
                    plugins: ['react-html-attrs', 'transform-class-properties', 'transform-runtime'],
                }
            },
            {
                test: /\.css$/,
                loaders: ['style', 'css']
            },
        ]
    },
    plugins: [
        new webpack.LoaderOptionsPlugin({
            debug: true
        })
    ]
}