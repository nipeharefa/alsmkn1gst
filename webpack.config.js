var path = require('path');
const elixir = require('laravel-elixir');
module.exports = {
	watch: elixir.isWatching(),
	resolve: {
		extensions: ['', '.js', '.vue'],
		fallback: [path.join(__dirname, '../node_modules')],
		alias: {
			'src': path.resolve(__dirname, '../src')
		}
	},
	module: {
		loaders: [
			{ test: /\.js$/, loader: 'babel', exclude: /node_modules/ },
			{ test: /\.jade$/, loader: 'jade' },
			{ test: /\.css$/, loader: 'style!css' },
			{ test: /\.css$/, loaders: ['style', 'css'] }
		],
		babel: {
			presets: ['es2015'],
			plugins: ['add-module-exports', 'transform-runtime']
		}
	},
	externals: {
		// require("jquery") is external and available
		//  on the global var jQuery
		'jquery': 'jQuery'
	}
}
