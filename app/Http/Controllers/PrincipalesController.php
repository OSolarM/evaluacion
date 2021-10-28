<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class PrincipalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	  
    public function index()
    {
		
        $client = new Client(); 
		$nombre="Don Palmazo";
		
        $result = $client->get('http://www.trombasoft.com/boletas2/hello/'.$nombre);
		
		dd($result->getBody()->getContents());
    }
}
//Notas: con SLIM 3 escribimos la restapi simple que usamos en este ejemplo

/* 
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require './vendor/autoload.php';

$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
});
*/
