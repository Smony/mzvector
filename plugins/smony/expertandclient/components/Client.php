<?php namespace Smony\Expertandclient\Components;

use Cms\Classes\ComponentBase;

class Client extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Clients Component',
            'description' => 'Clients for mzvector...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getClients()
    {
        return \Smony\Expertandclient\Models\Client::orderBy('id', 'asc')
            ->get();
    }

}