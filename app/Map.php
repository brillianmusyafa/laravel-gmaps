<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'maps';

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
    protected $fillable = ['kategory_id','title', 'description', 'lat', 'long', 'upload'];


    public function Kategori()
    {
        return $this->belongsTo('App\Kategory', 'kategory_id', 'id');
    }
    
}
