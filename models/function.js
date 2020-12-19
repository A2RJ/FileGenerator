const fs = require('fs-extra');
const template = "Your Template hereeeeeeeeeeee";

exports.area = function (r) {
    // return r;
  fs.appendFile(r[0]+0+r[1], template, function (err) {
    if (err) throw err;
    console.log('Created!');
  });
};