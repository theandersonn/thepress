var read = require('./read')
var bs   = require('browser-sync').create()

read(process.argv[2], function(data){
	bs.init(data[process.argv[3]]||{})
})
