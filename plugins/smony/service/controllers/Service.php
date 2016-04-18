<?php namespace Smony\Service\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Service Back-end Controller
 */
class Service extends Controller
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

        BackendMenu::setContext('Smony.Service', 'service', 'service');
    }
}