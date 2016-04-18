<?php namespace Smony\About;

use Backend;
use System\Classes\PluginBase;

/**
 * about Plugin Information File
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
            'name'        => 'about',
            'description' => 'About for mzvector..',
            'author'      => 'Smony',
            'icon'        => 'icon-users'
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
            'Smony\About\Components\About' => 'myAbout',
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
            'smony.about.some_permission' => [
                'tab' => 'about',
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
            'about' => [
                'label'       => 'About',
                'url'         => Backend::url('smony/about/about'),
                'icon'        => 'icon-newspaper-o',
                #'permissions' => ['smony.about.*'],
                'order'       => 500,

                'sideMenu' => [
                    'about' => [
                        'label'       => 'About',
                        'icon'        => 'icon-list-alt',
                        'url'         => \Backend::url('smony/about/about'),
                    ],
                ]
            ],
        ];
    }

}
