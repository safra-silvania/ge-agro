const path = require("path");
const webpack = require("webpack");
const CleanWebpackPlugin = require("clean-webpack-plugin");
const WebpackMd5Hash = require("webpack-md5-hash");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const MergeIntoSingleFilePlugin = require("webpack-merge-and-include-globally");

const IS_DEV = process.env.NODE_ENV === "dev";

const config = {
    module: {
        rules: [
            {
                test: /\.js$/,
                loader: "babel-loader",
                exclude: /(node_modules)/,
                options: {
                    compact: false,
                },
            },
            {
                test: /\.css$/,
                use: [
                    "style-loader",
                    {
                        loader: "css-loader",
                        options: {
                            sourceMap: IS_DEV,
                        },
                    },
                ],
            },
            {
                test: /\.scss/,
                use: [
                    "style-loader",
                    MiniCssExtractPlugin.loader,
                    {
                        loader: "css-loader",
                        options: {
                            sourceMap: IS_DEV,
                        },
                    },
                    {
                        loader: "postcss-loader",
                        options: {
                            plugins: function () {
                                return [require("autoprefixer")];
                            },
                        },
                    },
                    {
                        loader: "sass-loader",
                        options: {
                            sourceMap: IS_DEV,
                        },
                    },
                ],
            },
            {
                test: /.(ttf|otf|eot|svg|woff(2)?)(\?[a-z0-9]+)?$/,
                use: [
                    {
                        loader: "file-loader",
                        options: {
                            outputPath: "files/",
                            name: "[name].[ext]?[hash:7]",
                        },
                    },
                ],
            },
            {
                test: /\.(gif|png|jpe?g)$/i,
                use: [
                    {
                        loader: "url-loader",
                        options: {
                            limit: 8192,
                            outputPath: "files/",
                            name: "[name].[ext]?[hash:7]",
                        },
                    },
                    {
                        loader: "image-webpack-loader",
                        options: {
                            bypassOnDebug: true,
                            mozjpeg: {
                                progressive: true,
                                quality: 85,
                            },
                        },
                    },
                ],
            },
        ],
    },
};

const main = Object.assign({}, config, {
    name: "main",
    entry: path.join(__dirname, "src/main"),
    output: {
        path: path.join(__dirname, "dist"),
        filename: "main.js",
    },
    plugins: [
        new webpack.DefinePlugin({
            IS_DEV: IS_DEV,
        }),
        new CleanWebpackPlugin(),
        new webpack.ProvidePlugin({
            $: "jquery",
            jQuery: "jquery",
            Popper: ["popper.js", "default"],
        }),
        new WebpackMd5Hash(),
        new MergeIntoSingleFilePlugin({
            files: {
                "site.js": [
                   "node_modules/@fortawesome/fontawesome-free/js/all.js",
                ],
                "admin.js": [
                    "node_modules/jquery/dist/jquery.js",
                    "theme/admin/js/respond.min.js",
                    "theme/admin/js/bootstrap.js",
                    "theme/admin/js/jquery-ui.min.js",
                    "theme/admin/js/jquery.noty.js",
                    "theme/admin/js/themes/default.js",
                    "theme/admin/js/layouts/bottom.js",
                    "theme/admin/js/layouts/topRight.js",
                    "theme/admin/js/layouts/top.js",
                    "theme/admin/js/custom.js",
                    "node_modules/moment/min/moment.min.js",
                    "node_modules/moment/locale/pt-br.js",
                    "node_modules/jquery-mask-plugin/src/jquery.mask.js",
                    "node_modules/datatables.net/js/jquery.dataTables.min.js",
                    "node_modules/datatables.net-dt/js/dataTables.dataTables.min.js",
                    "node_modules/nouislider/distribute/nouislider.min.js",
                    "node_modules/wnumb/wNumb.min.js",
                    "node_modules/bootstrap-fileinput/js/fileinput.min.js",
                    "node_modules/bootstrap-fileinput/themes/fas/theme.min.js",
                    "node_modules/bootstrap-fileinput/js/locales/pt-BR.js",
                    // "node_modules/@ckeditor/ckeditor5-build-classic/build/ckeditor.js",
                    // "node_modules/@ckeditor/ckeditor5-build-classic/build/translations/pt-br.js",
                    path.join(__dirname, "src/util.js"),
                    path.join(__dirname, "src/helper.js"),
                ],
            },
        }),
    ],
});

let files = [
    // { seeds_index: path.join(__dirname, "src/modules/seeds/index.js") },
];

files = files.map((file) => {
    const key = Object.keys(file)[0];

    return Object.assign({}, config, {
        name: key,
        entry: file[key],
        output: {
            path: path.join(__dirname, "bundle"),
            filename: key + ".bundle.js",
        },
    });
});

files.push(main);

module.exports = files;
