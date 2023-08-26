<?php

namespace GreenPaltform\PlumbingPossibilities\Models;

use Model;

/**
 * Model
 */
class Province extends Model
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
    public $table = 'greenpaltform_plumbingpossibilities_provinces';

    public const TABLE = 'greenpaltform_plumbingpossibilities_provinces';

    /**
     * @var array rules for validation.
     */
    public $rules = [];

    public $belongsTo = [
        "country" => Country::class
    ];

    public function getCountryIdOptions()
    {
        return Country::lists("name", "id");
    }
}
