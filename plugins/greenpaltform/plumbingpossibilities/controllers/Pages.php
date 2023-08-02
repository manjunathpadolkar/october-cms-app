<?php namespace GreenPaltform\PlumbingPossibilities\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;

class Pages extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = [
        'plumbing_possibilies.manage_pages' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('GreenPaltform.PlumbingPossibilities', 'pages');
    }

}
