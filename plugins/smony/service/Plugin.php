<?php namespace Smony\Service;

use Backend;
use System\Classes\PluginBase;

/**
 * service Plugin Information File
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
            'name'        => 'service',
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
            'Smony\Service\Components\Service' => 'myService',
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
            'smony.service.some_permission' => [
                'tab' => 'service',
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
            'service' => [
                'label'       => 'service',
                'url'         => Backend::url('smony/service/service'),
                'icon'        => 'icon-tags',
                #'permissions' => ['smony.service.*'],
                'order'       => 500,

                'sideMenu' => [
                    'service' => [
                        'label'       => 'Service',
                        'icon'        => 'icon-tags',
                        'url'         => \Backend::url('smony/service/service'),
                    ],
                    
                ]

            ],
        ];
    }

}
