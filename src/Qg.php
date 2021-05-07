<?php

namespace Clover\Qg;

use Illuminate\Support\Facades\Http;

class Qg
{

  protected $http;

  public function __construct()
  {
    $this->http = Http::withHeaders([

      'TokenKey' => config('qg.token'),
      'SecureKey' => config('qg.secure'),
      'Accept' => 'application/json',
      'Content-Type' => 'application/json'

    ])->timeout(30)
      ->baseUrl(config('qg.base_uri'));
  }

  public function post($data, $json = true)
  {
    $response = $this->http->asJson()->post('/api/qgpro', $data);

    $response->throw();

    if ($json)
      return $response->json();

    return $response;
  }
}
