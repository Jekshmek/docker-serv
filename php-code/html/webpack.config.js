
//webpack.config.js
let path = require('path');
let ExtractTextPlugin = require("extract-text-webpack-plugin");// для сборки css в отдельный файл подключенный в js
//через import style './css/style.css'

let conf ={
    context: __dirname,
    entry: "./assets/js/index.js",//что преобразовывать
    output: {
        path: path.resolve(__dirname, "./assets/dist/js/"),//куда преобразовывать
        filename: "bundle.js",// имя файла сборки
        publicPath: "assets/dist/",// относительная ссылка , от куда брать файл async brawser
    },

    module:{
        rules:[
            {
                test:/\.js$/,
                loader:"babel-loader",
                exclude: /(node_modules)/,
            },
            /* подключение css внутрь js {
                test:/\.css$/,
                use:["css-loader","style-loader"],
                exclude: /(node_modules|bower_components)/,
            },*/
            /* подключение css отдельным файлом */
            {
                test:/\.css$/,
                use:ExtractTextPlugin.extract({
                    //fallback:"style-loader" fallback это откат ,  style-loader добавляет в раздел <head>
                    use:"css-loader"
                })
            }

        ]
    },
    plugins:[
        new ExtractTextPlugin("../css/styles.css")
    ]
};

module.exports = (env,options) => {
    let production = options.mode === 'production';
    // conf видна через замыкание
    // строить карту js в одном файле или в дополнительном для разработки
    // если будет ошибка то в консоле разработчика будет файл карту js с реальными номерами строк с ошибкой
    conf.devtool = production ?  false /* false это шифровать 'source-map'*/ : 'eval-sourcemap';

    return conf;
};