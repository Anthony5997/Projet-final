<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpClient\HttpClient;

class CallApiService {

    private $httpClient;

    // public function __construct(HttpClientInterface $httpClient)
    // {
    //     $this->httpClient = $httpClient;
    // }
    
    // public function getRandomData():array {
       
    //     $response = $this->httpClient->request(

    //         'GET',
    //         'https://api.themoviedb.org/3/search/movie?api_key=04c35731a5ee918f014970082a0088b1&language=fr&query=leon',

    //     );

    //     $statusCode = $response->getStatusCode();
    //     // $statusCode = 200
    //     //dd($statusCode);
    //    // $contentType = $response->getHeaders()['content-type'][0];
    //     // $contentType = 'application/json'
    //    // dd($contentType);
    //     $content = $response->getContent();
    //     // $content = '{"id":521583, "name":"symfony-docs", ...}'
    //     $content = $response->toArray();
    //     // $content = ['id' => 521583, 'name' => 'symfony-docs', ...]
    //     return $response->toArray();
    // }

    // public function getDetailsMovieById($id):array {
       
    //     $response = $this->httpClient->request(

    //         'GET',
    //         'https://api.themoviedb.org/3/movie/'.$id.'?api_key=04c35731a5ee918f014970082a0088b1&language=fr',

    //     );

    //     $statusCode = $response->getStatusCode();
    //     // $statusCode = 200
    //     //dd($statusCode);
    //    // $contentType = $response->getHeaders()['content-type'][0];
    //     // $contentType = 'application/json'
    //    // dd($contentType);
    //     $content = $response->getContent();
    //     // $content = '{"id":521583, "name":"symfony-docs", ...}'
    //     $content = $response->toArray();
    //     // $content = ['id' => 521583, 'name' => 'symfony-docs', ...]
    //     return $response->toArray();
    // }

}

