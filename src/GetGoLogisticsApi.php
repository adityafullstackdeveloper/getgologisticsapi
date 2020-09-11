<?php

namespace Adityafullstackdeveloper\GetGoLogistics;

use Adityafullstackdeveloper\GetGoLogistics\Clients\GetGoLogisticsApiClient;
use Adityafullstackdeveloper\GetGoLogistics\Resources\ChannelResource;
use Adityafullstackdeveloper\GetGoLogistics\Resources\CourierResource;
use Adityafullstackdeveloper\GetGoLogistics\Resources\GenerateResource;
use Adityafullstackdeveloper\GetGoLogistics\Resources\OrderResource;
use Adityafullstackdeveloper\GetGoLogistics\Resources\PickupResource;
use Adityafullstackdeveloper\GetGoLogistics\Resources\ProductResource;
use Adityafullstackdeveloper\GetGoLogistics\Resources\ShipmentResource;
use Adityafullstackdeveloper\GetGoLogistics\Resources\TrackingResource;
use Adityafullstackdeveloper\GetGoLogistics\Traits\Authenticate;

class GetGoLogisticsApi
{
    use Authenticate;

    public $client;

    public function __construct(GetGoLogisticsApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * Get the login details including token (valid for 24 hours)
     *
     * @param array $credentials
     * @return mixed
     */
    public function login($credentials = null)
    {
        return $this->auth($this->client, $credentials);
    }

    /**
     * Get the auth token (valid for 24 hours)
     *
     * @param array $credentials
     * @return string
     */
    public function getToken($credentials = null)
    {
        return $this->auth($this->client, $credentials)
            ->get('token');
    }

    /**
     * Order related wrapper class
     *
     * @param string $token
     * @return mixed
     */
    public function order(string $token)
    {
        return new OrderResource($this->client, $token);
    }

    /**
     * Pickup related wrapper class
     *
     * @param string $token
     * @return mixed
     */
    public function pickup(string $token)
    {
        return new PickupResource($this->client, $token);
    }

    /**
     * Courier related wrapper class
     *
     * @param string $token
     * @return mixed
     */
    public function courier(string $token)
    {
        return new CourierResource($this->client, $token);
    }

    /**
     * Tracking related wrapper class
     *
     * @param string $token
     * @return mixed
     */
    public function track(string $token)
    {
        return new TrackingResource($this->client, $token);
    }

    /**
     * Channel related wrapper class
     *
     * @param string $token
     * @return mixed
     */
    public function channel(string $token)
    {
        return new ChannelResource($this->client, $token);
    }

    /**
     * Shipment related wrapper class
     *
     * @param string $token
     * @return mixed
     */
    public function shipment(string $token)
    {
        return new ShipmentResource($this->client, $token);
    }

    /**
     * Print manifest/labels related wrapper class
     *
     * @param string $token
     * @return mixed
     */
    public function generate(string $token)
    {
        return new GenerateResource($this->client, $token);
    }

    /**
     * Product related wrapper class
     *
     * @param string $token
     * @return mixed
     */
    public function product(string $token)
    {
        return new ProductResource($this->client, $token);
    }
}
