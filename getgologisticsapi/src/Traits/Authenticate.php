<?php
namespace Adityafullstackdeveloper\GetGoLogistics\Traits;

use Adityafullstackdeveloper\GetGoLogistics\Clients\Client;
use Adityafullstackdeveloper\GetGoLogistics\Exceptions\ShiprocketException;

trait Authenticate
{
    public function auth(Client $client, $credentials = null)
    {
        if (! $credentials) {
            $credentials = config('getgologistics.credentials');
        }

        if (! is_array($credentials) || empty($credentials['email']) || empty($credentials['password'])) {
            throw new ShiprocketException('Invalid Credentials');
        }

        $endpoint = 'auth/login';

        $authDetails = $client->setEndpoint($endpoint)
            ->setHeaders('login')
            ->post($credentials);

        return $authDetails;
    }
}
