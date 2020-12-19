const fs = require('fs-extra');

const param = process.argv.slice(2);
const template = "Your Template here";

var coba = require('./models/function');
coba.area(param)

fs.appendFile(param[0]+param[1], template, function (err) {
    if (err) throw err;
    console.log('Created!');
});