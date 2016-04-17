<?php namespace Smony\Map\Components;

use Cms\Classes\ComponentBase;

class Map extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'GoogleMap Component',
            'description' => 'GoogleMap Component for Page / Layout'
        ];
    }

    public function defineProperties()
    {
        return [
            'latitude' => [
                'title'             => 'Latitude',
                'default'           => 50.6140978,
                'type'              => 'string',
            ],
            'longitude' => [
                'title'             => 'Longitude',
                'default'           => 26.2735943,
                'type'              => 'string',
            ],
            'zoom' => [
                'title'             => 'Zoom',
                'default'           => 12,
                'type'              => 'string',
            ],
            'width' => [
                'title'             => 'Width',
                'default'           => '100%',
                'description'       => 'It can be use px or %',
                'type'              => 'string',
            ],
            'height' => [
                'title'             => 'Height',
                'default'           => '360px',
                'description'       => 'It can be use px or %',
                'type'              => 'string',
            ],
            'mapTypeId' => [
                'title'             => 'Map Type',
                'default'           => 'ROADMAP',
                'type'              => 'dropdown',
                'options'           => ['ROADMAP'=>'Roadmap', 'SATELLITE'=>'Satellite', 'HYBRID'=>'Hybrid', 'TERRAIN'=>'Terrain']
            ],
            'showMarker' => [
                'title'             => 'Show Marker',
                'default'           => 'true',
                'type'              => 'checkbox',
            ],
            'apiKey' => [
                'title'             => 'API key',
                'description'       => 'It can be empty, but for more information visit: https://developers.google.com/maps/documentation/javascript/get-api-key',
                'default'           => '',
                'type'              => 'string',
            ]

        ];
    }

}