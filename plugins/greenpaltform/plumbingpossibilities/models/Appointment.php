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

    public $attributes = [
        "default_timezone"
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

    public function getDefaultTimezoneAttribute()
    {
        $timezone = $this->timezone;
        if (empty($timezone)) {
            $timezone = Settings::where("key", "timezone")->first()->value ?? "Canada/Pacific";
        }

        return $timezone;
    }

    public function getTimezoneOptions()
    {
        return [
            'Africa/Asmera' => 'Africa/Asmera',
            'Africa/Timbuktu' => 'Africa/Timbuktu',
            'America/Argentina/ComodRivadavia' => 'America/Argentina/ComodRivadavia',
            'America/Atka' => 'America/Atka',
            'America/Buenos_Aires' => 'America/Buenos_Aires',
            'America/Catamarca' => 'America/Catamarca',
            'America/Coral_Harbour' => 'America/Coral_Harbour',
            'America/Cordoba' => 'America/Cordoba',
            'America/Ensenada' => 'America/Ensenada',
            'America/Fort_Wayne' => 'America/Fort_Wayne',
            'America/Godthab' => 'America/Godthab',
            'America/Indianapolis' => 'America/Indianapolis',
            'America/Jujuy' => 'America/Jujuy',
            'America/Knox_IN' => 'America/Knox_IN',
            'America/Louisville' => 'America/Louisville',
            'America/Mendoza' => 'America/Mendoza',
            'America/Montreal' => 'America/Montreal',
            'America/Nipigon' => 'America/Nipigon',
            'America/Pangnirtung' => 'America/Pangnirtung',
            'America/Porto_Acre' => 'America/Porto_Acre',
            'America/Rainy_River' => 'America/Rainy_River',
            'America/Rosario' => 'America/Rosario',
            'America/Santa_Isabel' => 'America/Santa_Isabel',
            'America/Shiprock' => 'America/Shiprock',
            'America/Thunder_Bay' => 'America/Thunder_Bay',
            'America/Virgin' => 'America/Virgin',
            'Antarctica/South_Pole' => 'Antarctica/South_Pole',
            'Asia/Ashkhabad' => 'Asia/Ashkhabad',
            'Asia/Calcutta' => 'Asia/Calcutta',
            'Asia/Chongqing' => 'Asia/Chongqing',
            'Asia/Chungking' => 'Asia/Chungking',
            'Asia/Dacca' => 'Asia/Dacca',
            'Asia/Harbin' => 'Asia/Harbin',
            'Asia/Istanbul' => 'Asia/Istanbul',
            'Asia/Kashgar' => 'Asia/Kashgar',
            'Asia/Katmandu' => 'Asia/Katmandu',
            'Asia/Macao' => 'Asia/Macao',
            'Asia/Rangoon' => 'Asia/Rangoon',
            'Asia/Saigon' => 'Asia/Saigon',
            'Asia/Tel_Aviv' => 'Asia/Tel_Aviv',
            'Asia/Thimbu' => 'Asia/Thimbu',
            'Asia/Ujung_Pandang' => 'Asia/Ujung_Pandang',
            'Asia/Ulan_Bator' => 'Asia/Ulan_Bator',
            'Atlantic/Faeroe' => 'Atlantic/Faeroe',
            'Atlantic/Jan_Mayen' => 'Atlantic/Jan_Mayen',
            'Australia/ACT' => 'Australia/ACT',
            'Australia/Canberra' => 'Australia/Canberra',
            'Australia/Currie' => 'Australia/Currie',
            'Australia/LHI' => 'Australia/LHI',
            'Australia/North' => 'Australia/North',
            'Australia/NSW' => 'Australia/NSW',
            'Australia/Queensland' => 'Australia/Queensland',
            'Australia/South' => 'Australia/South',
            'Australia/Tasmania' => 'Australia/Tasmania',
            'Australia/Victoria' => 'Australia/Victoria',
            'Australia/West' => 'Australia/West',
            'Australia/Yancowinna' => 'Australia/Yancowinna',
            'Brazil/Acre' => 'Brazil/Acre',
            'Brazil/DeNoronha' => 'Brazil/DeNoronha',
            'Brazil/East' => 'Brazil/East',
            'Brazil/West' => 'Brazil/West',
            'Canada/Atlantic' => 'Canada/Atlantic',
            'Canada/Central' => 'Canada/Central',
            'Canada/Eastern' => 'Canada/Eastern',
            'Canada/Mountain' => 'Canada/Mountain',
            'Canada/Newfoundland' => 'Canada/Newfoundland',
            'Canada/Pacific' => 'Canada/Pacific',
            'Canada/Saskatchewan' => 'Canada/Saskatchewan',
            'Canada/Yukon' => 'Canada/Yukon',
            'CET' => 'CET',
            'Chile/Continental' => 'Chile/Continental',
            'Chile/EasterIsland' => 'Chile/EasterIsland',
            'CST6CDT' => 'CST6CDT',
            'Cuba' => 'Cuba',
            'EET' => 'EET',
            'Egypt' => 'Egypt',
            'Eire' => 'Eire',
            'EST' => 'EST',
            'EST5EDT' => 'EST5EDT',
            'Etc/GMT' => 'Etc/GMT',
            'Etc/GMT+0' => 'Etc/GMT+0',
            'Etc/GMT+1' => 'Etc/GMT+1',
            'Etc/GMT+10' => 'Etc/GMT+10',
            'Etc/GMT+11' => 'Etc/GMT+11',
            'Etc/GMT+12' => 'Etc/GMT+12',
            'Etc/GMT+2' => 'Etc/GMT+2',
            'Etc/GMT+3' => 'Etc/GMT+3',
            'Etc/GMT+4' => 'Etc/GMT+4',
            'Etc/GMT+5' => 'Etc/GMT+5',
            'Etc/GMT+6' => 'Etc/GMT+6',
            'Etc/GMT+7' => 'Etc/GMT+7',
            'Etc/GMT+8' => 'Etc/GMT+8',
            'Etc/GMT+9' => 'Etc/GMT+9',
            'Etc/GMT-0' => 'Etc/GMT-0',
            'Etc/GMT-1' => 'Etc/GMT-1',
            'Etc/GMT-10' => 'Etc/GMT-10',
            'Etc/GMT-11' => 'Etc/GMT-11',
            'Etc/GMT-12' => 'Etc/GMT-12',
            'Etc/GMT-13' => 'Etc/GMT-13',
            'Etc/GMT-14' => 'Etc/GMT-14',
            'Etc/GMT-2' => 'Etc/GMT-2',
            'Etc/GMT-3' => 'Etc/GMT-3',
            'Etc/GMT-4' => 'Etc/GMT-4',
            'Etc/GMT-5' => 'Etc/GMT-5',
            'Etc/GMT-6' => 'Etc/GMT-6',
            'Etc/GMT-7' => 'Etc/GMT-7',
            'Etc/GMT-8' => 'Etc/GMT-8',
            'Etc/GMT-9' => 'Etc/GMT-9',
            'Etc/GMT0' => 'Etc/GMT0',
            'Etc/Greenwich' => 'Etc/Greenwich',
            'Etc/UCT' => 'Etc/UCT',
            'Etc/Universal' => 'Etc/Universal',
            'Etc/UTC' => 'Etc/UTC',
            'Etc/Zulu' => 'Etc/Zulu',
            'Europe/Belfast' => 'Europe/Belfast',
            'Europe/Kiev' => 'Europe/Kiev',
            'Europe/Nicosia' => 'Europe/Nicosia',
            'Europe/Tiraspol' => 'Europe/Tiraspol',
            'Europe/Uzhgorod' => 'Europe/Uzhgorod',
            'Europe/Zaporozhye' => 'Europe/Zaporozhye',
            'Factory' => 'Factory',
            'GB' => 'GB',
            'GB-Eire' => 'GB-Eire',
            'GMT' => 'GMT',
            'GMT+0' => 'GMT+0',
            'GMT-0' => 'GMT-0',
            'GMT0' => 'GMT0',
            'Greenwich' => 'Greenwich',
            'Hongkong' => 'Hongkong',
            'HST' => 'HST',
            'Iceland' => 'Iceland',
            'Iran' => 'Iran',
            'Israel' => 'Israel',
            'Jamaica' => 'Jamaica',
            'Japan' => 'Japan',
            'Kwajalein' => 'Kwajalein',
            'Libya' => 'Libya',
            'MET' => 'MET',
            'Mexico/BajaNorte' => 'Mexico/BajaNorte',
            'Mexico/BajaSur' => 'Mexico/BajaSur',
            'Mexico/General' => 'Mexico/General',
            'MST' => 'MST',
            'MST7MDT' => 'MST7MDT',
            'Navajo' => 'Navajo',
            'NZ' => 'NZ',
            'NZ-CHAT' => 'NZ-CHAT',
            'Pacific/Enderbury' => 'Pacific/Enderbury',
            'Pacific/Johnston' => 'Pacific/Johnston',
            'Pacific/Ponape' => 'Pacific/Ponape',
            'Pacific/Samoa' => 'Pacific/Samoa',
            'Pacific/Truk' => 'Pacific/Truk',
            'Pacific/Yap' => 'Pacific/Yap',
            'Poland' => 'Poland',
            'Portugal' => 'Portugal',
            'PRC' => 'PRC',
            'PST8PDT' => 'PST8PDT',
            'ROC' => 'ROC',
            'ROK' => 'ROK',
            'Singapore' => 'Singapore',
            'Turkey' => 'Turkey',
            'UCT' => 'UCT',
            'Universal' => 'Universal',
            'US/Alaska' => 'US/Alaska',
            'US/Aleutian' => 'US/Aleutian',
            'US/Arizona' => 'US/Arizona',
            'US/Central' => 'US/Central',
            'US/East-Indiana' => 'US/East-Indiana',
            'US/Eastern' => 'US/Eastern',
            'US/Hawaii' => 'US/Hawaii',
            'US/Indiana-Starke' => 'US/Indiana-Starke',
            'US/Michigan' => 'US/Michigan',
            'US/Mountain' => 'US/Mountain',
            'US/Pacific' => 'US/Pacific',
            'US/Samoa' => 'US/Samoa',
            'UTC' => 'UTC',
            'W-SU' => 'W-SU',
            'WET' => 'WET',
            'Zulu' => 'Zulu',
        ];
    }
}
