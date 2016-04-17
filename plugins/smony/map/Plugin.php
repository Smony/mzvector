<?php namespace Smony\Map;

use Backend;
use System\Classes\PluginBase;

/**
 * map Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Map',
            'description' => 'Map component front-end',
            'author'      => 'Smony',
            'icon'        => 'icon-globe'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        #return []; // Remove this line to activate

        return [
            'Smony\Map\Components\Map' => 'googleMap',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'smony.map.some_permission' => [
                'tab' => 'map',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'map' => [
                'label'       => 'map',
                'url'         => Backend::url('smony/map/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['smony.map.*'],
                'order'       => 500,
            ],
        ];
    }

}
