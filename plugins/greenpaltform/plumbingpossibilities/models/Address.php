<?php

namespace GreenPaltform\PlumbingPossibilities\Models;

use Model;

/**
 * Model
 */
class Address extends Model
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
    public $table = 'greenpaltform_plumbingpossibilities_addresses';

    public const TABLE = 'greenpaltform_plumbingpossibilities_addresses';

    /**
     * @var array rules for validation.
     */
    public $rules = [];

    public $belongsTo = [
        "client" => Client::class,
        "province" => Province::class,
        "country" => Country::class
    ];

    public function getClientIdOptions()
    {
        return Client::lists("name", "id");
    }

    public function getCountryIdOptions()
    {
        return Country::orderBy("order")->lists("name", "id");
    }

    public function getProvinceIdOptions($value, $data)
    {
        return Province::where("country_id", $this->country_id)->lists("name", "id");
    }
}
