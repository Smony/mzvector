<?php namespace Smony\Service\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Head Back-end Controller
 */
class Head extends Controller
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

        BackendMenu::setContext('Smony.Service', 'service', 'head');
    }
}