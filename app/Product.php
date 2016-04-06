<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description','slug', 'price', 'weight','cat_id','featured'];

    /**
     * Input validation Rules.
     *
     * @var array
     */
    static $storeRules = array(
        'title'         => 'required',
        'description'   => 'required',       
        'price'         => 'required',
        'weight'        => 'required'
    );

    static $updateRules = array(
        'title'         => 'required',
        'description'   => 'required',
        'slug'          => 'required',
        'price'         => 'required',
        'weight'        => 'required'
    );

     public function product_picture()
    {
        return $this->hasMany('App\ProductPicture')->where('isdefault','1');
    }

}
