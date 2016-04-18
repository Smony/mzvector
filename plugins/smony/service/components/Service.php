<?php namespace Smony\Service\Components;

use Cms\Classes\ComponentBase;

class Service extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Service Component',
            'description' => 'Service Mz Vector...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getServices()
    {
        return \Smony\Service\Models\Service::get();
    }

    

}