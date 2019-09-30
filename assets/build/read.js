var fs = require('fs');

var read = function(file, cb){
	fs.readFile(file, 'utf8', function(err, data){
		if(err) return console.log(err)
		if(typeof cb === 'function'){
			try {
				data = JSON.parse(data)
			}catch(e){}
			cb(data)
		}
	});
}

module.exports = read