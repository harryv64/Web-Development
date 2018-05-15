"use strict";

var webSocketsServerPort = 8080;

var webSocketServer = require('websocket').server;
var http = require('http');
var date = new Date();
//create web server
var server = http.createServer(function(request, response) {
});
//use websockets
var wsServer = new webSocketServer({
    httpServer: server
});

wsServer.on('request', function(request) {
    var connection = request.accept(null, request.origin);
    console.log((new Date()) + ' connection accepted');

    setInterval(function(){
      connection.sendUTF(new Date().toTimeString());}, 5000); //set to every 5 seconds

    // user disconnected
    connection.on('close', function(connection) {
    });
});

server.listen(webSocketsServerPort, function() {
    console.log((new Date()) + " Server is listening on port " + webSocketsServerPort);
});
