<?php

namespace GreenPaltform\PlumbingPossibilities\Models;

use Backend\Models\User;
use Illuminate\Support\Facades\DB;
use Model;

/**
 * Model
 */
class Appointment extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string table in the database used by the model.
     */
    public $table = 'greenpaltform_plumbingpossibilities_appointments';

    /**
     * @var array rules for validation.
     */
    public $rules = [];

    public $belongsTo = [
        "client" => Client::class,
        "assignee" => User::class,
        "address" => Address::class
    ];

    public function getClientIdOptions()
    {
        return Client::lists("name", "id");
    }

    public function getAssigneeIdOptions()
    {
        return User::get([
            "id",
            "first_name",
            "last_name",
            DB::raw("CONCAT(first_name,' ',last_name) as full_name")
        ])->lists("full_name", "id");
    }

    public function getClientNameAttribute()
    {
        return $this->client->name ?? "";
    }

    public function getAddressIdOptions()
    {
        $fullAddressQuery = "CONCAT(address_1, ', ', address_2, ', ', city, ', ', province.name, ', ', country.name, ' - ',postal) as full_address";
        return Address::where("client_id", $this->client_id)->leftJoin(Country::TABLE . " as country", "country.id", Address::TABLE . ".country_id")
            ->leftJoin(Province::TABLE . " as province", "province.id", Address::TABLE . ".province_id")
            ->get([
                Address::TABLE . ".id",
                "address_1",
                "address_2",
                "city",
                "postal",
                "country.name",
                "province.name",
                DB::raw($fullAddressQuery)
            ])->lists("full_address", "id");
    }


    public function getAssigneeFullNameAttribute()
    {
        return ($this->assignee->first_name ?? "") . " " . ($this->assignee->last_name ?? "");
    }
}
