<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class katalog extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'katalogs';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['produk_id', 'katalog'];

    
}
