<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'profiles';

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
    protected $fillable = ['logo', 'nama', 'deskripsi', 'ig', 'fb', 'wa', 'alamat'];

    
}
