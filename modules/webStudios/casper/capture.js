var casper = require('casper').create({
  verbose: true, logLevel: "debug", // uncomment for debug
  stepTimeout: 30000
});

var url = casper.cli.args[0];
var saveTo = casper.cli.args[1];

casper.start();

casper.thenOpen(url, function(page) {
/*
  this.evaluate(function() {
    var style = document.createElement('style');
    //style.innerHTML = 'html {background:url(http://design2.june.majexa.ru/m/img/capture-bg.png)}';
    style.innerHTML = 'html { background: #f00 }';
    document.body.appendChild(style);
  });
*/
  this.capture(saveTo, {
    top: 0,
    left: 0,
    width: 700,
    height: 1000
  });
});
casper.run();
