<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description','slug'];

    /**
     * Input validation Rules.
     *
     * @var array
     */
    static $storeRules = array(
        'title'         => 'required',
        'description'   => 'required',
        'slug'          => 'required'
    );

    static $updateRules = array(
        'title'         => 'required',
        'description'   => 'required',
        'slug'          => 'required'
    );

}
