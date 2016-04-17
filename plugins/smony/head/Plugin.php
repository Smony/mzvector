<?php namespace Smony\Head;

use Backend;
use System\Classes\PluginBase;

/**
 * head Plugin Information File
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
            'name'        => 'head',
            'description' => 'No description provided yet...',
            'author'      => 'Smony',
            'icon'        => 'icon-leaf'
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
            'Smony\Head\Components\Head' => 'myHead',
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
            'smony.head.some_permission' => [
                'tab' => 'head',
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
        #return []; // Remove this line to activate

        return [
            'head' => [
                'label'       => 'Head',
                'url'         => Backend::url('smony/head/head'),
                'icon'        => 'icon-leaf',
                #'permissions' => ['smony.head.*'],
                'order'       => 500,
            ],
        ];
    }

}
