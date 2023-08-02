<?php namespace GreenPaltform\PlumbingPossibilities\Models;

use Model;

/**
 * Model
 */
class Page extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Factories\HasFactory;

    /**
     * @var array dates to cast from the database.
     */
    protected $dates = ['deleted_at'];

    protected $fillable = [
        "title",
        "sub_title",
        "content"
    ];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'greenpaltform_plumbingpossibilities_pages';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

}
