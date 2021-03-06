<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dogs extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['name'];

    protected static function boot()
    {
        parent::boot();

        /*static::addGlobalScope('age', function (Builder $builder) {
            $builder->where('age', '>', 1);
        });*/
    }

    function dogsRequiringAntiRabbitBiteShot(){
        return $this->ageGreaterThan(6);
    }

    function scopeAgeGreaterThan($query, $age) {
        return $query->where('age', '>', $age);
    }

    function getNameAttribute($value){
        return strtoupper($value);
    }

    function getIdNameAgeAttribute(){
        return $this->attributes['id'] . ':' . $this->attributes['name'] . 'Age: ' . $this->attributes['age'];
    }

}
