
const fs = require('fs');

//const http = require('http');


const server = http.createServer() 
server.on('request', (request, response) => {
  response.statusCode = 200;
  response.setHeader('Content-Type', 'text/plain');
  response.end('Hello World');
});

server.listen(3000)






// console.log("hello world");