<?php namespace GreenPaltform\PlumbingPossibilities\Models;

use Model;

/**
 * Model
 */
class Settings extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string table in the database used by the model.
     */
    public $table = 'greenpaltform_plumbingpossibilities_settings';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

}
