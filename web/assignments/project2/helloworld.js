const http = require('http');
const url = require('url');
const fs = require('fs');

http.createServer(onRequest).listen(8888);


function onRequest(request, response) {

        const path = url.parse(request.url).path;

        switch (path) {
        case '/home':
                home({response: response});
                break;
        case '/getData':
                getData({response: response});
                break;
        default:
                defaultResponse({response: response});
                break;
        }
}

function home(parameters) {
        let response = parameters.response;
        const html = fs.readFileSync('helloworld.html').toString();
        response.writeHead(200, {'Content-Type': 'text/html'});
        response.end(html);
        console.log('/home');
}

function getData(parameters) {
        let response = parameters.response;
        const json = '{"name":"Br. Burton","class":"cs313"}';
        response.writeHead(200, {'Content-Type': 'application/json'});
        response.end(json);
        console.log('/getData');
}

function defaultResponse(parameters) {
        let response = parameters.response;
        response.writeHead(200, {'Content-Type': 'text/plain'});
        response.end('Hello World!\n');
        console.log('/ {default}');
}

console.log('Server running at http://localhost:8888/');