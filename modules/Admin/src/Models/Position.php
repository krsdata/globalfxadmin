<?php
namespace Modules\Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Position extends Model {

   
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'positions';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     /**
     * The primary key used by the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'user_name',
            'market_name',
            'bid_amount',
            'p_l_amount',
            'date_time',
            'amount',
            'status',
            'currency'
        ];  // All field of user table here    

    
    public function user() 
    {
        return $this->hasOne('Modules\Admin\Models\User','id','user_name');
    }

  
    
  
}
