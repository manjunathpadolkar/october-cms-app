<?php

namespace GreenPaltform\PlumbingPossibilities\Models;

use Model;

/**
 * Model
 */
class Country extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    /**
     * @var array dates to cast from the database.
     */
    protected $dates = ['deleted_at'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'greenpaltform_plumbingpossibilities_countries';

    public const TABLE = 'greenpaltform_plumbingpossibilities_countries';

    /**
     * @var array rules for validation.
     */
    public $rules = [];
}
