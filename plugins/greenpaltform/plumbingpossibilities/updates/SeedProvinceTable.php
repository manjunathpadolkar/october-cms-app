<?php

namespace GreenPaltform\PlumbingPossibilities\Updates;

use Seeder;
use GreenPaltform\PlumbingPossibilities\Models\Province;

class SeedProvinceTable extends Seeder
{
    public function run()
    {
        $provinces = array(
            array("id" => "1", "name" => "Alabama", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "2", "name" => "Alaska", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "3", "name" => "Alabama", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "4", "name" => "Arizona", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "5", "name" => "Arkansas", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "6", "name" => "California", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "7", "name" => "Colorado", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "8", "name" => "Connecticut", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "9", "name" => "Delaware", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "10", "name" => "District of Columbia", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "11", "name" => "Florida", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "12", "name" => "Georgia", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "13", "name" => "Hawaii", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "14", "name" => "Idaho", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "15", "name" => "Illinois", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "16", "name" => "Indiana", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "17", "name" => "Iowa", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "18", "name" => "Kansas", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "19", "name" => "Kentucky", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "20", "name" => "Louisiana", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "21", "name" => "Maine", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "22", "name" => "Maryland", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "23", "name" => "Massachusetts", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "24", "name" => "Michigan", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "25", "name" => "Minnesota", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "26", "name" => "Mississippi", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "27", "name" => "Missouri", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "28", "name" => "Montana", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "29", "name" => "Nebraska", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "30", "name" => "Nevada", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "31", "name" => "New Hampshire", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "32", "name" => "New Jersey", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "33", "name" => "New Mexico", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "34", "name" => "New York", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "35", "name" => "North Carolina", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "36", "name" => "North Dakota", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "37", "name" => "Ohio", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "38", "name" => "Oklahoma", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "39", "name" => "Oregon", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "40", "name" => "Pennsylvania", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "41", "name" => "Puerto Rico", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "42", "name" => "Rhode Island", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "43", "name" => "South Carolina", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "44", "name" => "South Dakota", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "45", "name" => "Tennessee", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "46", "name" => "Texas", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "47", "name" => "Utah", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "48", "name" => "Vermont", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "49", "name" => "Virginia", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "50", "name" => "Washington", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "51", "name" => "West Virginia", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "52", "name" => "Wisconsin", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "53", "name" => "Wyoming", "country_id" => "233", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "0.000"),
            array("id" => "54", "name" => "Alberta", "country_id" => "38", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "5.000"),
            array("id" => "55", "name" => "British Columbia", "country_id" => "38", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "12.000"),
            array("id" => "56", "name" => "Manitoba", "country_id" => "38", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "12.000"),
            array("id" => "57", "name" => "New Brunswick", "country_id" => "38", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "15.000"),
            array("id" => "58", "name" => "Newfoundland and Labrador", "country_id" => "38", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "15.000"),
            array("id" => "59", "name" => "Northwest Territories", "country_id" => "38", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "5.000"),
            array("id" => "60", "name" => "Nova Scotia", "country_id" => "38", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "15.000"),
            array("id" => "61", "name" => "Nunavut Territory", "country_id" => "38", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "5.000"),
            array("id" => "62", "name" => "Ontario", "country_id" => "38", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "13.000"),
            array("id" => "63", "name" => "Prince Edward Island", "country_id" => "38", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "15.000"),
            array("id" => "64", "name" => "QuÃ©bec", "country_id" => "38", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "14.975"),
            array("id" => "65", "name" => "Saskatchewan", "country_id" => "38", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "11.000"),
            array("id" => "66", "name" => "Yukon Territory", "country_id" => "38", "created_at" => "NULL", "updated_at" => "NULL", "tax_percentage" => "5.000")
        );

        foreach ($provinces as $value) {
            $province = Province::find($value["id"]);
            if (is_null($province)) {
                $province = new Province();
            }
            $province->name = $value["name"];
            $province->country_id = $value["country_id"];
            $province->tax_percentage = $value["tax_percentage"];
            $province->save();
        }
    }
}
