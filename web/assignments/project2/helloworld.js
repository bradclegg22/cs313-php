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
                anythingElse({response: response});
                break;
        }
}

function home(x) {
        let response = x.response;
        const html = fs.readFileSync('helloworld.html').toString();
        response.writeHead(200, {'Content-Type': 'text/html'});
        response.end(html);
}

function getData(x) {
        let response = x.response;
        const json = '{"name":"Brad Clegg","class":"cs313"}';
        response.writeHead(200, {'Content-Type': 'application/json'});
        response.end(json);
}

function anythingElse(x) {
        let response = x.response;
        const html = fs.readFileSync('404.html').toString();
        response.writeHead(404, {'Content-Type': 'text/html'});
        response.end(html);
}

console.log('Server running at http://localhost:8888/home');