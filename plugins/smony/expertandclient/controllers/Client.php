<?php namespace Smony\Expertandclient\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Client Back-end Controller
 */
class Client extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Smony.Expertandclient', 'expertandclient', 'client');
    }
}