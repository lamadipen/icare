<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model {
    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description','parentid'];

    /**
     * Input validation Rules.
     *
     * @var array
     */
    static $storeRules = array(
        'title'         => 'required',
        'description'   => 'required',
        'parentid'      => 'required'
    );

    static $updateRules = array(
        'title'         => 'required',
        'description'   => 'required',
        'parentid'      => 'required'
    );

    function getCategoriesAndProducts() {
        // to do
        // need to get category joins product joins productpictures
        // and make an array in following format and return it
        /* Array format
         * categories[]
         * -products[]
         * --id
         * --title
         * --filename_thumb*/

        return Array();
    }
}
