<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductPicture extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'productpictures';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['productid', 'caption','filename_thumb','filename_mid','filename_big', 'isdefault', 'order'];

    /**
     * Input validation Rules.
     *
     * @var array
     */
    static $storeRules = array(
        'productid'     => 'required',
        'caption'       => 'required',
        'filename_thumb'      => 'required',
        'filename_mid'      => 'required',
        'filename_big'      => 'required',
        'isdefault'     => 'required',
        'order'         => 'required'
    );

    static $updateRules = array(
        'productid'     => 'required',
        'caption'       => 'required',
        'filename_thumb'      => 'required',
        'filename_mid'      => 'required',
        'filename_big'      => 'required',
        'isdefault'     => 'required',
        'order'         => 'required'
    );

}
