<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategory extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kategories';

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
    protected $fillable = ['name', 'icon'];


    public function Maps()
    {
        return $this->hasMany('App\Map', 'kategory_id', 'id');
    }

    
}
