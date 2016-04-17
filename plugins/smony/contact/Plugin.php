<?php namespace Smony\Contact;

use Backend;
use System\Classes\PluginBase;

/**
 * contact Plugin Information File
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
            'name'        => 'contact',
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
            'Smony\Contact\Components\Contact' => 'myContact',
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
            'smony.contact.some_permission' => [
                'tab' => 'contact',
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
            'contact' => [
                'label'       => 'Contact',
                'url'         => Backend::url('smony/contact/contact'),
                'icon'        => 'icon-envelope',
                #'permissions' => ['smony.contact.*'],
                'order'       => 500,
            ],
        ];
    }

}
