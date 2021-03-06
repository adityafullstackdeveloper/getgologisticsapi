<?php

namespace Adityafullstackdeveloper\GetGoLogistics\Resources;

use Seshac\Shiprocket\Resources\Resource;

class ChannelResource extends Resource
{
    /**
     * To get details about all the integrated channels
     *
     * @return mixed
     */
    public function get()
    {
        $endpoint = 'channels';

        return  $this->getRequest($endpoint);
    }
}
