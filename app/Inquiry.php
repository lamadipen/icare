<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inquiries';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['productid', 'name', 'email', 'description','phoneno'];

    /**
     * Input validation Rules.
     *
     * @var array
     */
    static $storeRules = array(
        'productid'     => 'required',
        'name'          => 'required',
        'email'         => 'required',
        'description'   => 'required'
    );

    static $updateRules = array(
        'productid'     => 'required',
        'name'          => 'required',
        'email'         => 'required',
        'description'   => 'required'
    );

}
