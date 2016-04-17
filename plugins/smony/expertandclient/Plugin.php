<?php namespace Smony\Expertandclient;

use Backend;
use System\Classes\PluginBase;

/**
 * expertandclient Plugin Information File
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
            'name'        => 'expertandclient',
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
            'Smony\Expertandclient\Components\Client' => 'myClient',
            'Smony\Expertandclient\Components\Expert' => 'myExpert'
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
            'smony.expertandclient.some_permission' => [
                'tab' => 'expertandclient',
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
            'expertandclient' => [
                'label'       => 'Experts and Clients',
                'url'         => Backend::url('smony/expertandclient/expert'),
                'icon'        => 'icon-users',
                #'permissions' => ['smony.expertandclient.*'],
                'order'       => 500,

                'sideMenu' => [
                    'expert' => [
                        'label'       => 'Experts',
                        'icon'        => 'icon-user-secret',
                        'url'         => \Backend::url('smony/expertandclient/expert'),
                    ],
                    'client' => [
                        'label'       => 'Clients',
                        'icon'        => 'icon-users',
                        'url'         => \Backend::url('smony/expertandclient/client'),
                    ],
                ]
            ],
        ];
    }

}
